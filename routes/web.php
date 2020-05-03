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
Route::get('home', function () {
    return view('welcome');
});
Route::get('index', function () {
    return view('welcome');
});
Route::get('solo_texto', function () {
    return 'Hola mundo en laravel <br /><br /><a href="index" >Regresar </a>';
});
Route::get('solo_texto_y_param/{var}', function ($var) {
    return 'Hola mundo en laravel '.$var.' <br /><br /><a 
    href="../index" >Regresar </a>';
});
Route::get('ver_una_vista', function () {
    return view('demo1');
});

Route::get('ver_una_vista_y_param/{var}', function ($var) {
    return view('demo2')->with('variable',$var);
});



Route::get('usa_control', 'InicioController@usa_control');


Route::get('usa_control_y_param/{var}', 
	'InicioController@controllerCaseTwo');









Route::get('bienvenida', function () {
    return view('bienvenida');
});

