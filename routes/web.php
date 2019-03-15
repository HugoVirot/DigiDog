<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageController@accueil');

Route::get('/panier', "CartController@panier");

Route::get('/catalogue', "ProductController@index");

Route::get('/catalogue/{product}', "ProductController@show")->name('voir_Produit');

Route::get('/connexion', "LoginController@index");

Route::get('/connexion', "LoginController@index");

Route::get('/mon_compte', "LoginController@show");

Route::get('/mes_commandes', "LoginController@commandes");

Route::get('/mes_adresses', "LoginController@adresses");

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', "PageController@contact");

Route::get('/recrutement', "PageController@recrutement");

Route::get('/faq', "PageController@faq");

Route::get('/mentions_legales', "PageController@mentions_legales");

Route::get('/a_propos', "PageController@a_propos");

Route::get('/sav', "PageController@sav");

Route::get('/inscription', "LoginController@inscription");

//Back Office

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', "AdminController@index")->name('index');

    Route::resource('/products', 'ProductController');
});