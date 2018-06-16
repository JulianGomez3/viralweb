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

Route::get('/','Controller@getInicio'); //nueva
Route::get('Inicio','Controller@getInicio');
Route::get('Login','Controller@getLogin')->middleware('invitado');
Route::get('Perfil','Controller@getPerfil')->middleware('miembro');  //nuevo
Route::get('Miembros','Controller@getMiembros');
Route::get('Historia','Controller@getHistoria');
Route::get('Administrador','Controller@getAdministrar')->middleware('admin'); //nuevo

 

Route::post('registrarParticipante','MiembroController@registrarParticipante');

// rutas de sesion
Route::post('autenticar', 'Auth\LoginController@login');
Route::get('Logout','Auth\LoginController@logout')->middleware('miembro'); //nuevo