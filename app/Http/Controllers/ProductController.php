<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function index () {
        $products = Product::all();

        return view('products/index', ['products' => $products]);
    }

    public function show($id) {
        $product = Product::where('id',$id)->get();
        $product = $product[0];
        return view('products/show', ['product' => $product]);
    }
}
