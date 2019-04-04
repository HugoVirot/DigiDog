<?php

namespace App\Http\Controllers;

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
        // if (!Auth::check()) {
        return view('cart.panier');
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
