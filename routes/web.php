<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorPublico;
use App\Http\Controllers\ControladorPrivado;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Autenticado;


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

Route::get('/login', function () {
    return view('login');
});

Route::get('/crearUsuario', function () {
    return view('crearUsuario');
});

Route::post('/login', [UserController::class,'Login']);
Route::post('/crearUsuario', [UserController::class,'CrearUsuario']);



Route::get('/public', [ControladorPublico::class,'mostrar']);
Route::get('/private',[ControladorPrivado::class,'mostrarPrivado'])-> middleware(Autenticado::class);
Route::get('/privateView',function () {
    return view('login');
})-> middleware(Autenticado::class);


