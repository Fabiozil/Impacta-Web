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
Route::resource('recyclers', 'Recycler\RecyclerController')->except(['edit']);
Route::resource('recyclers.zona','Recycler\ZonaController')->only(['store','update','destroy']);
Route::get('comunas/{municipio_id}', 'Recycler\RecyclerController@getComunas')->name('comunas');
Route::get('sectores/{municipio_id}/{comuna_id}', 'Recycler\RecyclerController@getSectores')->name('sectores');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/materiales', 'MaterialController@getMaterials')->name('materiales');
// Route::resource('mediciones', 'MaterialCorporacionController')->except(['destroy', 'edit', 'update']);
Route::get('/mediciones', 'MaterialCorporacionController@index')->name('mediciones');

// Pruebas
Route::get('/mediciones/nueva', function () {
    return view('mediciones.nueva');
});
Route::get('/mediciones/emisiones', function () {
    return view('mediciones.emisiones');
});
Route::get('/mediciones/historial', function () {
    return view('mediciones.historial');
});
Route::get('/notificaciones', function () {
    return view('notifications.index');
});
Route::get('/comunidad', function () {
    return view('mapa.mapa');
});
Route::get('/configuracion', function () {
    return view('config.editar');
});
Route::get('/contacto', function () {
    return view('contacto.index');
});
Route::get('/corporaciones', function () {
    return view('Busqueda.resultsCorp');
});
Route::get('/usuarios', function () {
    return view('Busqueda.resultsUser');
});
Route::get('/crearManual', function () {
    return view('notifications.manual.create');
});
Route::get('/crearAutomatica', function () {
    return view('notifications.automatic.create');
});
Route::get('/register2', function () {
    return view('auth.register2');
});
Route::get('/verify', function () {
    return view('auth.verify');
});
Route::get('/confirm', function () {
    return view('auth.passwords.confirm');
});
//Rutas busquedas
Route::get('/resultadosCorp', function () {
    return view('busqueda.resultsCorp');
});
Route::get('/resultadosUser', function () {
    return view('busqueda.resultsUser');
});
//Rutas editar corporacion
Route::get('/editCorp', function () {
    return view('config.editar');
});
//Ruta contacto
Route::get('/editCorp', function () {
    return view('contacto.index');
});
//Ruta comunidad
Route::get('/comunidad', function () {
    return view('mapa.mapa');
});
Route::get('/comunidad/corporaciones', function () {
    return view('mapa.mapaotrascorp');
});
Route::get('/comunidad/asignarReciclador/Michel', function () {
    return view('mapa.asignarRecicladorMichel');
});
Route::get('/comunidad/asignarReciclador/Harlan', function () {
    return view('mapa.asignarRecicladorHarlan');
});
Route::get('/comunidad/asignarReciclador/TorresDelRiachuelo', function () {
    return view('mapa.asignarRecicladorUnidad1');
});
//Rutas mediciones
Route::get('/emisiones', function () {
    return view('mediciones.emisiones');
});
Route::get('/historial', function () {
    return view('mediciones.historial');
});
Route::get('/nuevamedicion', function () {
    return view('mediciones.nueva');
});
//Rutas notificaciones
Route::get('/nuevanotificaciona', function () {
    return view('notifications.automatic.create');
});
Route::get('/nuevanotificacionm', function () {
    return view('notifications.manual.create');
});
Route::get('/notificaciones', function () {
    return view('notifications.index');
});
Route::get('/editar', function () {
    return view('recycler.show');
});

