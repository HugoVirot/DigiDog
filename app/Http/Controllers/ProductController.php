<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        //$products_asc = Product::->get();
        //$products_asc = $products_asc[0];

        return view('products/index', ['products' => $products/*, 'products_asc' => $products_asc*/]);
    }

    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }
}
