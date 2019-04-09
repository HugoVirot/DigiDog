<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index () {
        return view('login/connexion');
    }

    public function show() {
        return view('login/mon_compte');
    }

    public function commandes() {
        return view('login/mes_commandes');
    }

    public function edit() {
        return view ('login/inscription');
    }
    public function inscription() {
        return view ('login/inscription');
    }

    public function adresses() {
        return view ('login/mes_adresses');
    }
}
