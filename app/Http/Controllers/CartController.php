<?php

namespace App\Http\Controllers;


use App\Address;
use function App\custom\arrayToSession;
use function App\custom\generateKeyOrder;
use function App\custom\recapPanier;
use function App\custom\sessionToArray;

use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function __construct()
    {                                                                       // ??
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

        $Adresses = Address::where('user_id' ,Auth::id())->first();

        if (Auth::check()) {
            if ($Adresses){

                return view("cart.fraisDePort");
            }else{

                return view('cart.adresse1');
            }

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
    public function  addOrder(){
        $Adresses = Address::where('user_id' ,Auth::id())->first();


        //Order creation
        $order = Order::create([
            'order_num'=> generateKeyOrder(),
            'date' => Carbon::now(),
            'user_id' => Auth::id(),
            'address_delivery_id' => $Adresses->id,
            'address_billing_id' => $Adresses->id,
            ]);


        $basket = sessionToArray();
        foreach ($basket as $idProduct => $qts){
            $product = Product::find($idProduct);
            $order->products()->attach($product->id,['quantity' => $qts, 'price'  => $product->price * $qts]);
        }

   }

}
