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

Auth::routes(['verify'=>true]);
Route::resource('recyclers', 'Recycler\RecyclerController')->except(['destroy','edit']);
Route::get('/home', 'HomeController@index')->name('home');

//////////////////////////////////////////////

Route::get('/', function () {
    return view('welcome');
});

Route::get('/crear_reciclador', function () {
    return view('Reciclador.crear_reciclador');
});

Route::get('/nav', function () {
    return view('nav');
});
Route::get('/exito_crear', function () {
    return view('Reciclador.exito_crear');
});
Route::get('/exito_edit', function () {
    return view('Reciclador.exito_edit');
});
Route::get('/confirmar_eliminar', function () {
    return view('Reciclador.confirmar_eliminar');
});
Route::get('/confirmar_edicion', function () {
    return view('Reciclador.confirmar_edicion');
});
Route::get('/exito_delete', function () {
    return view('Reciclador.exito_delete');
});
Route::get('/editar_reciclador', function () {
    return view('Reciclador.editar_reciclador');
});
Route::get('/recicladores', function () {
    return view('Reciclador.index');
});
<<<<<<< HEAD
Route::get('/busquedau', function () {
    return view('Busqueda.resultsUser');
});
Route::get('/busquedac', function () {
    return view('Busqueda.resultsCorp');
=======
Route::get('/NuevaMedicion', function(){
    return view('mediciones.nueva');
});
Route::get('/HistorialMediciones', function(){
    return view('mediciones.historial');
});
Route::get('/Emisiones', function(){
    return view('mediciones.emisiones');
>>>>>>> parent of fcafcdf... Carpeta de emisiones frontend terminado
});
