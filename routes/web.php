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

Auth::routes();

//despues cambiamos esto de abajo por el controlador que es
Route::get('/login', function(){
    return view('login');
});
Route::get('/registroCorp', function(){
    return view('login.registroCorp');
});
Route::get('/RestablecerContraseña', function(){
    return view('login.CambioPssw');
});

Route::get('/crear_reciclador', function () {
    return view('Reciclador.crear_reciclador');
});

Route::get('/crear_reciclador_2', function () {
    return view('Reciclador.crear_reciclador_2');
});

Route::get('/crear_reciclador_3', function () {
    return view('Reciclador.crear_reciclador_3');
});

Route::get('/crear_reciclador_4', function () {
    return view('Reciclador.crear_reciclador_4');
});

Route::get('/editar_reciclador', function () {
    return view('Reciclador.editar_reciclador');
});

Route::get('/reciclador_individual', function () {
    return view('Reciclador.reciclador_individual');
});
Route::get('/Detalle_usuario', function(){
    return view('DetalleUser');
});
Route::get('/user', 'UserController@index');
Route::get('/corporation', 'CorporationController@index');
Route::get('/recycler', 'RecyclerController@index');
Route::get('/notification', 'NotificationController@index');

//despues cambiamos esto de abajo por el controlador que es

Route::get('/NuevaMedicion', function(){
    return view('mediciones.nueva');
});
Route::get('/HistorialMediciones', function(){
    return view('mediciones.historial');
});
Route::get('/Emisiones', function(){
    return view('mediciones.emisiones');
});
Route::get('/Mapa', function(){
    return view('mapa.mapa');
});
Route::get('/dank', function(){
    return view('login.confirmar');
});
Route::get('/ResultadosCorporacion', function(){
    return view('ResultadosBusqueda.ListaCorporaciones');
});
Route::get('/Resultados', function(){
    return view('ResultadosBusqueda.ListaUsuarios');
});




