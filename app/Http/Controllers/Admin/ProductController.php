<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AjoutProduit;
use App\Http\Requests\UpdateProduct;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->paginate();

        return view('backoffice.products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AjoutProduit $request)
    {
        $validated = $request->validated();

        $product = new Product;
        $product->name = $validated['name'];
        $product->picture = $validated['picture'];
        $product->description = $validated['description'];
        $product->price = $validated['price'];
        $product->weight = $validated['weight'];
        $product->stock = $validated['stock'];
        $product->category_id = $validated['category_id'];
        $product->save();

        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product->load('category');

        return view('backoffice.products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        return view('backoffice.products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduct $request, Product $product)
    {
        $validated = $request->validated();

        $product = Product::where('id', $product->id)->first();

        $product->name = $validated['name'];
        $product->picture = $validated['picture'];
        $product->description = $validated['description'];
        $product->price = $validated['price'];
        $product->weight = $validated['weight'];
        $product->stock = $validated['stock'];
        $product->category_id = $validated['category_id'];
        $product->save();

        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.products.index');
    }
}
