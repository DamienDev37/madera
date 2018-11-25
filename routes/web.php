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

Route::get('/', 'HomeController@index');

Route::get('/login', function () {
    return view('login');
});

Route::get('/plan', function () {
    return view('plan');
});

Route::get('/register', function () {
    return view('register');
});

/*** Le projet ***/
Route::get('projet',[
  'as' => 'projet', 
  'uses' => 'ProjetController@index'
]);
Route::get('projet/{id}',[
  'as' => 'showprojet', 
  'uses' => 'ProjetController@show'
]);
Route::get('projet/create',[
  'as' => 'create', 
  'uses' => 'ProjetController@create'
]);
Route::post('projet', ['uses' => 'ProjetController@store', 'as' => 'storeprojet']);
Route::post('projet', ['uses' => 'ProjetController@destroy', 'as' => 'deleteprojet']);
/*** La maison ***/
Route::get('maison',[
  'as' => 'maison', 
  'uses' => 'MaisonController@index'
]);
Route::get('maison/{id}',[
  'as' => 'show', 
  'uses' => 'MaisonController@show'
]);
Route::get('maison/create',[
  'as' => 'creationMaison', 
  'uses' => 'MaisonController@create'
]);
Route::post('maison', ['uses' => 'MaisonController@store', 'as' => 'storeMaison']);
/*** Le devis ***/
Route::get('devis',[
  'as' => 'devis', 
  'uses' => 'DevisController@index'
]);
Route::get('devis/{id}',[
  'as' => 'show', 
  'uses' => 'DevisController@show'
]);
Route::get('devis/create',[
  'as' => 'create', 
  'uses' => 'DevisController@create'
]);
Route::post('devis', ['uses' => 'DevisController@store', 'as' => 'storeDevis']);

