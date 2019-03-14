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
        $products_name = Product::orderBy('name')->get();
        $products_price = Product::orderBy('price')->get();

        return view('products/index', ['products' => $products, 'products_name' => $products_name, 'products_price' => $products_price]);
    }

    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }
}