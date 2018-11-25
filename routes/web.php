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