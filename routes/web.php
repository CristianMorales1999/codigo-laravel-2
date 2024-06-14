<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');
Route::get('servicios','App\Http\Controllers\ServiciosController@index')->name('servicios');
Route::view('contacto','contacto')->name('contacto');

//Generar las 7 rutas de los metodos del controlador
Route::resource('servicios','App\Http\Controllers\ServiciosController');

//Si queremos registrar solo algunos de los metodos del controlador
//Utizamos el metodo only() para elegir cual método se registre
/*Route::resource('servicios','App\Http\Controllers\ServiciosController')->only('index','show');*/

//Si queremos registrar todos los metodos del controlador menos algunos en especifico
//Utizamos el metodo except() para elegir cual método no quiero que se registre
/*Route::resource('servicios','App\Http\Controllers\ServiciosController')->only('index','show');*/