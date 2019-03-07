<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        //$products = DB::select('select * from products ');
        //$products = Product::all();
        //$products = Product::orderBy('nom', 'ASC')->get();
         $products = Product::orderBy('price','ASC')->get();

        return view('products/index', ['products' => $products]);
    }

    public function show($id)
    {
        /*$product = DB::select('select * from products where id = :id', ['id'=>$id]);
        $product = $product[0];*/
        $product = Product::where('id',$id)->get();
        $product = $product[0];

        return view('products/show',['product' => $product]);
    }
}