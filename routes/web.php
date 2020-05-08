<?php

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
    return view('welcome');
});

Route::get('/user', 'UserController@index');
Route::get('/corporation', 'CorporationController@index');
Route::get('/notification', 'NotificationController@index');

Auth::routes(['verify' => true]);
Route::resource('recyclers', 'Recycler\RecyclerController')->except(['destroy', 'edit']);
Route::get('comunas/{municipio_id}', 'Recycler\RecyclerController@getComunas')->name('comunas');
Route::get('sectores/{municipio_id}/{comuna_id}', 'Recycler\RecyclerController@getSectores')->name('sectores');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/materiales', 'MaterialController@getMaterials')->name('materiales');

// Route::resource('mediciones', 'MaterialCorporacionController')->except(['destroy', 'edit', 'update']);
Route::get('/mediciones', 'MaterialCorporacionController@index')->name('mediciones');
