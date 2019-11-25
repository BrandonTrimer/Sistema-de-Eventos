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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'paginasController@index');
Route::get('info_evento.php', 'paginasController@info_evento');
Route::get('confirmar_datos.php', 'paginasController@confirmar_datos');
Route::get('registro_completo.php', 'paginasController@registro_completo');

Route::get('login.php', 'paginasController@login');
Route::get('adminindex.php', 'paginasController@adminindex');
Route::get('crear_evento.php', 'paginasController@crear_evento');
Route::get('lista_usuarios.php', 'paginasController@lista_usuarios');
Route::get('crear_verificador.php', 'paginasController@crear_verificador');
Route::get('supervisor.php', 'paginasController@supervisor');