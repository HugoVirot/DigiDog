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
        $nbProduct  = $request->get('nbProduct');

        // init le panier exist
        if ($request->session()->has('panier')) {
            $panier = session()->get('panier');
        } else {
            $panier = [];
        }
        // le produit est present dans la session
        if (array_key_exists((int)$product->id, $panier)) {
            $panier[$product->id] = intval($panier[$product->id]) + $nbProduct;
        } else {
            $panier[$product->id] = $nbProduct;
        }
        // affectation de l'array à la session
        $request->session()->put('panier',$panier);



        // flash message
        $request->session()->flash('state', __('messages.SUCCESS_CART_PRODUIT_ADD'));
        $request->session()->flash('color', 'bg-secondary');

        // redirection
        return back();

    }
}
