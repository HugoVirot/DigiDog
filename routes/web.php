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

/**
 * PANIER
 */

Route::get('/panier', "CartController@panier")->name('panier.recapitulatif');
Route::get('/panier/remove/{id}', "CartController@removeSessionProduct")->name('panier.remove.product');
Route::post('/panier/recalcule','CartController@recalculePanier')->name('panier.recalcule');
Route::get('/panier/identification','CartController@identification')->name('panier.identification');
Route::get('/panier/adresse1','CartController@CreateAdresse1')->name('panier.adresse1');
Route::get('/panier/creationCompte','CartController@creationCompte')->name('panier.compte');
Route::get('/panier/fraisDePort','CartController@FraisDePort')->name('panier.FraisDePort');

/*
Route::get('/panier/adresse2','CartController@adresse2')->name('panier.adresse2');



Route::get('/panier/paiement','CartController@paiement')->name('panier.paiement');
*/
/**
 *
 */
/*---------------------------------------------------------------------------*/
Route::resource('/products', 'ProductController');
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
/*---------------------------------------------------------------------------*/

Route::post('/product/addToCart/{product}', "ProductController@addToCart")->name('productAddToCart');






Route::get('/home', 'HomeController@index')->name('home');

Route::resource('addresses', 'AddressController');



//Back Office
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', "AdminController@index")->name('index');

    Route::resource('/categories', 'CategoryController');
    Route::resource('/products', 'ProductController');

});
Auth::routes();


