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


Route::post('/anadir', 'juegosController@anadir')->name('anadir');

Route::get('/', 'juegosController@mostrar')->name('mostrar');


Route::get('/lista', 'juegosController@listar')->name('listar');


Route::get('/juego/{id}', 'juegosController@mostrarJuego')->name('mostrarJuego');