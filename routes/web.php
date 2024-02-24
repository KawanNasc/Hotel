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

Route::get('/', [ClienteController::class, 'showHome'])->name('home');
Route::get('/cadastroCliente', [ClienteController::class, 'showFormCadastroCliente'])->name('formCadastroCliente');
Route::get('/cadastroFuncionario', [FuncionarioController::class, 'showFormCadastroFuncionario'])->name('formCadastroFuncionario');

Route::post('/cadastroCliente', [ClienteController::class, 'cadastrarCliente'])->name('enviaBancoCliente');
Route::post('/cadastroFuncionario',[FuncionarioController::class, 'cadastrarFuncionario'])->name('enviaBancoFuncionario');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function() {
//     return view('home');
// });