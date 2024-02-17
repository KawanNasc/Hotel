<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;

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

Route::get('/', [ClienteController::class, 'showHome']);
Route::get('/cadastroCliente', [ClienteController::class, 'showFormCadastroCliente']);
Route::get('/cadastroFuncionario', [FuncionarioController::class, 'showFormCadastroFuncionario']);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function() {
//     return view('home');
// });