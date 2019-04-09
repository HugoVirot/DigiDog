<?php

namespace App\Http\Controllers;

use App\Address;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cart.adresse1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'complementAdresse' => ['string', 'max:255'],
            'codePostal' => ['required', 'integer'],
            'ville' => ['required', 'string', 'max:255'],
            'pays' => ['required', 'string', 'max:255'],
            'libelleAdresse' => ['required', 'string', 'max:255'],


        ], [
            'nom.required' => 'Le nom est obligatoire',
            'nom.max:255' => 'Le champs ne doit pas depasser 255 caractères',
            'prenom.required' => 'Le prénom est obligatoire',
            'prenom.max:255' => 'Le champs ne doit pas depasser 255 caractères',
        ]);
        Address::create([
            'last_name' => $request->input('nom'),
            'first_name' =>$request->input('prenom'),
            'street' => $request->input('adresse'),
            'additionnal_address' => $request->input('complementAdresse'),
            'postal_code' => $request->input('codePostal'),
            'city' => $request->input('ville'),
            'country' => $request->input('pays'),
            'wording' => $request->input('libelleAdresse'),
            'user_id' => Auth::id()


        ]);
return redirect('/panier/fraisDePort');
        /*

        */
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
