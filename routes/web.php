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

// Route::get('/', function () {
//     return view('welcome');
// });
// El login es la pagina de inicio
Route::get('/login', function(){
    return view('login');
});
Route::get('/crear_reciclador', function () {
    return view('crear_reciclador');
});

Route::get('/crear_reciclador_2', function () {
    return view('crear_reciclador_2');
});

Route::get('/crear_reciclador_3', function () {
    return view('crear_reciclador_3');
});

Route::get('/crear_reciclador_4', function () {
    return view('crear_reciclador_4');
});

Route::get('/editar_reciclador', function () {
    return view('editar_reciclador');
});

Route::get('/reciclador_individual', function () {
    return view('reciclador_individual');
});
Route::get('/user', 'UserController@index');
Route::get('/corporation', 'CorporationController@index');
Route::get('/recycler', 'RecyclerController@index');
Route::get('/notification', 'NotificationController@index');
//despues cambiamos esto de abajo por el controlador que es
Route::get('/registroCorp', function(){
    return view('registroCorp');
});
Route::get('/RestablecerContraseña', function(){
    return view('CambioPssw');
});


