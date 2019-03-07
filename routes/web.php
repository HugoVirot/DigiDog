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

Route::get('/catalogue/{nom}', "ProductController@show");






Route::get('/login', "LoginController@index");

Route::get('/contact', "PageController@contact");

Route::get('/mentions_legales', "PageController@mentions_legales");

Route::get('/a_propos', "PageController@a_propos");