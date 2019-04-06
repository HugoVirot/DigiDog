<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('panier', 'identification');
    }


    public function panier()
    {
        // id des produits
        $productsKey = [];
        // Qts par produits
        $allQts = [];
        // tableau des sommes p * qts
        $sommeLigne = [];


        if (session()->has('panier')) {
            // dump('panier');
            $panier = session()->get('panier');
        } else {
            $panier = [];
        }

        // recuperer les produits et calculer le prix par ligne
        foreach ($panier as $product => $qts) {
            array_push($productsKey, $product);
            array_push($allQts, $qts);
        }

        // On récupère les produits
        $products = Product::find($productsKey);

        // calcul du prix des produits * prix unitaire
        foreach ($products as $key => $product) {
            array_push($sommeLigne, ($product->price * $allQts[$key]));
        }
        // Total de la commande sans les frais de port
        $total = Array_sum($sommeLigne);

        return view('cart.panier', ['products' => $products, 'sommesLigne' => $sommeLigne, 'total' => $total,'qts' => $allQts]);

    }

    public function identification()
    {
        if (Auth::check()) {
            return view('cart.adresse1');
        } else {
            return view("cart.identification");
        }
    }


    public function creationCompte()
    {
        return view("cart.creationCompte");
    }


    public function CreateAdresse1()
    {
        return view("cart.adresse1");
    }

    public function adresse2()
    {
        return view("cart.adresse2");
    }


    public function fraisDePort()
    {
        return view("cart.fraisDePort");
    }


    public function paiement()
    {
        return view("cart.paiement");
    }


}
