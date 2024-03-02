<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ReservaController;

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

Route::get('/', [ClienteController::class, 'showHome'])->name('home');
Route::get('/cadastroCliente', [ClienteController::class, 'showFormCadastroCliente'])->name('formCadastroCliente');
Route::get('/cadastroFuncionario', [FuncionarioController::class, 'showFormCadastroFuncionario'])->name('formCadastroFuncionario');
Route::get('/cadastroQuarto', [QuartoController::class, 'showFormCadastroQuarto'])->name('formCadastroQuarto');
Route::get('/cadastroReserva', [ReservaController::class, 'showFormCadastroReserva'])->name('formCadastroReserva');

Route::post('/cadastroCliente', [ClienteController::class, 'cadastrarCliente'])->name('enviaBancoCliente');
Route::post('/cadastroFuncionario', [FuncionarioController::class, 'cadastrarFuncionario'])->name('enviaBancoFuncionario');
Route::post('/cadastroQuarto', [QuartoController::class, 'cadastrarQuarto'])->name('enviaBancoQuarto');
Route::post('/cadastroReserva', [ReservaController::class, 'cadastrarReserva'])->name('enviaBancoReserva');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function() {
//     return view('home');
// });