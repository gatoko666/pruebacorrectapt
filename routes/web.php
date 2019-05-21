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

Route::get('/', function () {
    return view('index');
});

Route::get('index', function () {
    return view('index');
});
 


/*
Route::get('indexferiados', function() {
    return view('feriados.indexferiado');
});
*/



Route::resource('feriados','FeriadoController');
/*
Route::get('editarferiado', function () {
    return view('editarferiado');
    
});
 */

Route::resource('operadores','OperadorController');

Route::resource('operadorexternos','OperadorExternoController');

Route::resource('tiposdeturnos','TiposDeTurnosController');

Route::get('perfil', function () {
    return view('perfil/indexperfil');
});
 

Route::get('notificaciones', function () {
    return view('notificaciones/indexnotificaciones');
});
 

Route::get('subirdocumentos', function () {
    return view('subirdocumentos/indexsubirdocumentos');
});
 

Route::get('listadodocumentos', function () {
    return view('subirdocumentos/listadodocumentos');
});