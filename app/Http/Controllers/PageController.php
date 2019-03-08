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
        return view('pages.a_propos');
    }
    public function recrutement()
    {
        return view('pages/recrutement');

    }
    public function faq()
    {
        return view('pages/faq');

    }
}
