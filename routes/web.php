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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource("usuarios", "UsuarioController");

Route::get("registrar", "UsuarioController@create")->name("usuarios.create");

Route::get("usuarios/{usuario}/actualizar", "UsuarioController@edit")->name("usuarios.edit");

Route::get("usuarios/{usuario}/confirmar", "UsuarioController@confirm")->name("usuarios.confirm");  

Route::get("ingreso", function(){
	return view("auth.ingreso");
});