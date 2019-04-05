<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\custom\classes\DigiDogMessageState;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        return view('admin.categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
                               'name' => 'required|max:255'

                           ], [
                               'name.required' => 'Le nom de la Catégorie est obligatoire',
                               'name.max:255' => 'Le champs ne doit pas depasser 255 caractères'
                           ]);



        $category = new Category();
        $category->name = $request->input('name');
        $category->save();


        $categories = Category::all();
        $request->session()->flash('state', DigiDogMessageState::$SUCCESS_CATEGORY_ADD);
        $request->session()->flash('color', 'bg-secondary');

        return view('admin.categories.index', ['categories' => $categories]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {


        $request->validate([
                               'name' => 'required|max:255'

                           ], [
                               'name.required' => 'Le nom de la Catégorie est obligatoire',
                               'name.max:255' => 'Le champs ne doit pas depasser 255 caractères'
                           ]);

        $category->name = $request->input('name');
        $category->save();
        $request->session()->flash('state', DigiDogMessageState::$SUCCESS_CATEGORY_UPDATE);
        $request->session()->flash('color', 'bg-secondary');


        $categories = Category::all();
        return view('admin.categories.index', ['categories' => $categories]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Category $category)
    {
        if ($category) {
            try {

                $category->delete();

            } catch (\Illuminate\Database\QueryException $e) {
                $categories = Category::all();
                $request.session()->flash('state', DigiDogMessageState::$ERROR_CATEGORY);
                $request.session()->flash('color', 'bg-secondary');
                return view('admin.categories.index', ['categories' => $categories]);


            }
            $categories = Category::all();
            $request.session()->flash('state', DigiDogMessageState::$SUCCESS_CATEGORY_DELETE);
            $request.session()->flash('color', 'bg-secondary');

            return view('admin.categories.index', ['categories' => $categories]);


        } else {

            $categories = Category::all();

            $request.session()->flash('state', DigiDogMessageState::$ERROR_CATEGORY);
            $request.session()->flash('color', 'bg-secondary');
            return view('admin.categories.index', ['categories' => $categories]);
        }
    }
}
