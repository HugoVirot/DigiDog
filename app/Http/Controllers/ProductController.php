<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::get();
        $products = Product::get();

        return view('products.index', ['products' => $products, 'categories' => $categories]);
    }

    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    public function addToCart(Request $request, Product $product)
    {
        $nbProduct = $request->get('nbProduct');

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
        $request->session()->put('panier', $panier);

        // flash message
        $request->session()->flash('state', __('messages.success.product.add.cart'));
        $request->session()->flash('color', 'bg-secondary');

        // redirection
        return back();

    }
}
