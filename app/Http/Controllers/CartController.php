<?php

namespace App\Http\Controllers;


use function App\custom\arrayToSession;
use function App\custom\recapPanier;
use function App\custom\sessionToArray;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('panier', 'identification','removeSessionProduct','recalculePanier');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function panier()
    {
        return view('cart.panier', recapPanier());
    }
    public function removeSessionProduct($id){

        $panier = sessionToArray();
        if (array_key_exists($id, $panier)) {
            unset($panier[$id]);
        }
        arrayToSession($panier);


        return redirect('panier');
    }
    public function recalculePanier(Request $request){

        $req = $request->all();
        $panier = [];
        foreach ($req as $key => $line){
           if (is_numeric($key))
               $panier[(int)$key] = (int)$line;
        }
        arrayToSession($panier);

        return redirect('panier');
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

    public function paiement(Request $request)
    {
        //temporary traitment for price carrier
        $Transporteur_price = [0,8,6,4];
        Session::put('fraisdeport' , $Transporteur_price[$request->input('optradio')]);




        return view("cart.paiement" ,recapPanier($Transporteur_price[$request->input('optradio')]));
    }


}
