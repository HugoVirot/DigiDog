<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

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
}