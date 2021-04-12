<?php

use App\Http\Controllers\savanController;
use App\Livre;
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
    $livres=Livre::all();
    return view('accueil',compact("livres"));
})->middleware('customAuth');
Route::get('/index','indexController@formulaire')->middleware('customAuth');

Route::get('/connexion','connexionController@vueconnexion' );
Route::post('/connexion','connexionController@connexion' );

Route::get('/inscription','inscriptioncontroller@vueinscription');
Route::post('/inscription', 'inscriptionController@inscription');

Route::get('/ajout','savanController@vueajout')->middleware('customAuth');
Route::post('/ajout','savanController@ajout')->middleware('customAuth');

Route::get('/search','searchController@recherche')->middleware('customAuth');
Route::post('/search','searchController@search')->middleware('customAuth');

Route::get('/deconnexion','connexionController@deconnexion');

