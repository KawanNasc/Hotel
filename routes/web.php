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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', function() {
    return view('clientes');
});

Route::get('/funcionarios', function() {
    return view('funcionarios');
});

Route::get('/quartos', function() {
    return view('quartos');
});

Route::get('/reservas', function() {
    return view('reservas');
});