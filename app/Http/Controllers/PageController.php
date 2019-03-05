<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function accueil()
    {
        return view('pages/welcome');
    }

    public function sav()
    {
        return view('pages/sav');
    }
}
