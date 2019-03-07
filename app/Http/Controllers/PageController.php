<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function accueil()
    {
        return view('pages/welcome');
    }
    public function contact()
    {
        return view('pages/contact');
    }
    public function mentions_legales()
    {
        return view('pages/mentions_legales');
    }
    public function a_propos()
    {
        return view('pages/a_propos');
    }
}
