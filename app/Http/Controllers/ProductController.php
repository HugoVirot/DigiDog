<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use \App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('price','asc')->get();
        return view('products/index2', ['products' => $products]);
    }

    public function show($id)
    {
        $product = Product::where('id', $id)-> get();
        return view('products/show', ['product' => $product]);
    }
}
