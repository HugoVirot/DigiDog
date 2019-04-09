<?php

namespace App\Http\Controllers;

use App\Address;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
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
            'first_name' => $request->input('prenom'),
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
    public function edit()
    {
        //Artisan::call('cache:clear');
        $addresses=Address::where('user_id',Auth::id())->first();
        //dd($addresses);
        //if ($addresses->user_id == Auth::id()) {
            return view('login.mes_adresses',['addresses' => $addresses]);
        //}

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $addresses)
    {
        $request->validate([
            'wording' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'street' => 'required',
            'additionnal_address' => 'required',
            'postal_code' => 'required ',
            'city' => 'required',
            'country' => 'required',

        ]);


        //$addresses = new Address();
        $addresses->wording = $request->input('wording');
        $addresses->last_name = $request->input('last_name');
        $addresses->first_name = $request->input('first_name');
        $addresses->street = $request->input('street');
        $addresses->additionnal_address = $request->input('additionnal_address');
        $addresses->postal_code = $request->input('postal_code');
        $addresses->city = $request->input('city');
        $addresses->country = $request->input('country');
        $addresses->user_id = Auth::id();
        //dd($addresses);
        $addresses->save();


        return view('login.mes_adresses',['addresses' => $addresses]);
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
