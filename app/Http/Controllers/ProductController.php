<?php

namespace App\Http\Controllers;

use App\custom\classes\DigiDogMessageState;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->input('tri');

        if ($sort == 'price') {
            $products = Product::orderBy('price')->get();
        } elseif ($sort == 'name') {
            $products = Product::orderBy('name')->get();
        } else {
            $products = Product::get();
        }

        return view('products.index', ['products' => $products]);
    }

    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    /**
     * @param Request $request
     * @param Product $product
     */
    public function addToCart(Request $request, Product $product)
    {
        //dump($product);
        //dump($request->all());

        // session add
        /* if (!isset($_SESSION['panier'])) {
             // ajout qts à l'article
             $_SESSION['panier']['id_' . $article->id_Article] = ['qts' => 1,
                 'poids' => $article->Poids
             ];
             // ajout du poids unitaire
             //$_SESSION['panier']['id_' . $idArticle] = ['poids' => $article->Poids];
         } else {
             if (!array_key_exists('id_' . $article->id_Article, $_SESSION['panier'])) {

                 $_SESSION['panier']['id_' . $article->id_Article] = ['qts' => 1,
                     'poids' => $article->Poids
                 ];
             } else {
                 $_SESSION['panier']['id_' . $idArticle]['qts'] = intval($_SESSION['panier']['id_' . $idArticle]['qts']) + 1;
             }
         }
         */

        //$request->session(['panier']['id_' +$product->id] = ['qts' => '1' , 'weight' => $product->weight]);

        // $INOD = 'id_' . $product->id;
        //
       // dump($request->session('panier'));
        /*
         *
         * $pan[1] = 1;
          $pan[2] = 1;
         $pan[3] = 1;
         $pan[4] = 1;
         if (array_key_exists(2, $pan)) {
            dump('exist' . 2 );
         }
        dd($pan);
         *
         */

        $pan = (array) session::get('panier');

            if (array_key_exists($product->id, $pan)) {
                $pan[$product->id] = intval($pan[$product->id]) + 1;
            }else {
                $pan[$product->id] = 1;
            }



        $request->session('panier',$pan );
        dump($request->session('panier'));die();


        /*
         if ($request->session()->has('panier')) {
            if (array_key_exists($product->id, $request->session('panier'))) {

                $request->session()->put('panier',[$product->id =>['qts' => $request->session()->put('panier', [$product->id => 1,]]);
            } else {
                $request->session()->put('panier', [
                    $product->id => 1];
            }

        }
*/


        /*
        $request->session()->put('panier', [
            'id_' . $product->id =>
                [
                    'qts' => 1,
                    'weight' => (int)$product->weight,
                ]]);
        dd($request->session());
        */
        // flash message
        $request->session()->flash('state', DigiDogMessageState::$SUCCESS_CART_PRODUIT_ADD);
        $request->session()->flash('color', 'bg-secondary');

        // redirection
        return back();

    }
}