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

Route::get('inde', function () {
    return view('index');
});



Route::get('/', function () {
    return view('index');
});

Route::post('/', function () {
    return view('index');
});

Route::get('index', function () {
    return view('indexsistema');
})->middleware('auth');
 


/*
Route::get('indexferiados', function() {
    return view('feriados.indexferiado');
});
*/



Route::resource('feriados','FeriadoController')->middleware('auth');
/*
Route::get('editarferiado', function () {
    return view('editarferiado');
    
});
 */

Route::resource('operadores','OperadorController')->middleware('auth');

Route::resource('operadorexternos','OperadorExternoController')->middleware('auth');

Route::resource('tiposdeturnos','TiposDeTurnosController')->middleware('auth');

Route::get('perfil', function () {
    return view('perfil/indexperfil');
})->middleware('auth');
 

Route::get('notificaciones', function () {
    return view('notificaciones/indexnotificaciones');
})->middleware('auth');
 

Route::get('subirdocumentos', function () {
    return view('subirdocumentos/indexsubirdocumentos');
})->middleware('auth');
 

Route::get('listadodocumentos', function () {
    return view('subirdocumentos/listadodocumentos');
})->middleware('auth');


 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('vacaciones', function () {
    return view('vacaciones.registrovacaciones');
})->middleware('auth');



Route::get('turnospendientes', function () {
    return view('turnospendientes.registroturnospendientes');
})->middleware('auth');



Route::get('absentismos', function () {
    return view('absentismos.registroabsentismos');
})->middleware('auth');


Route::get('revisarsolicitudes', function () {
    return view('solicitudes.revisarsolicitudes');
})->middleware('auth');

 
Route::get('solicitarcambiodeturno', function () {
    return view('solicitudes.solicitarcambiodeturno');
})->middleware('auth');

Route::get('solicitardialibre', function () {
    return view('solicitudes.solicitardialibre');
})->middleware('auth');


Route::get('solicitarvacaciones', function () {
    return view('solicitudes.solicitardialibre');
})->middleware('auth');


Route::get('generarturnos', function () {
    return view('turnos.generarturnos');
})->middleware('auth');


Route::get('revisarturnos', function () {
    return view('turnos.turnos');
})->middleware('auth');

