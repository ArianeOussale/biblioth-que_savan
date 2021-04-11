<?php

use App\Http\Controllers\savanController;
use App\livres;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $livres=livres::all();
    return view('accueil',compact("livres"));
});
Route::get('/index','indexController@formulaire');
Route::get('/connexion','connexionController@vueconnexion' );
Route::post('/connexion','connexionController@connexion' );
Route::get('/inscription','inscriptioncontroller@vueinscription');
Route::post('/inscription', 'inscriptionController@inscription');
Route::get('/ajout','savanController@vueajout');
Route::post('/ajout','savanController@ajout');
Route::get('/search','searchController@recherche');
Route::post('/search','searchController@search');


