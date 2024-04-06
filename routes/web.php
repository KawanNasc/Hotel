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

/* Home e mostrar forms de cadastros */
Route::get('/', [ClienteController::class, 'showHome'])->name('home');
Route::get('/cadastroCliente', [ClienteController::class, 'showFormCadastroCliente'])->name('formCadastroCliente');
Route::get('/cadastroFuncionario', [FuncionarioController::class, 'showFormCadastroFuncionario'])->name('formCadastroFuncionario');
Route::get('/cadastroQuarto', [QuartoController::class, 'showFormCadastroQuarto'])->name('formCadastroQuarto');
Route::get('/cadastroReserva', [ReservaController::class, 'showFormCadastroReserva'])->name('formCadastroReserva');

/* Enviar dados dos cadastros */
Route::post('/cadastroCliente', [ClienteController::class, 'cadastrarCliente'])->name('enviaBancoCliente');
Route::post('/cadastroFuncionario', [FuncionarioController::class, 'cadastrarFuncionario'])->name('enviaBancoFuncionario');
Route::post('/cadastroQuarto', [QuartoController::class, 'cadastrarQuarto'])->name('enviaBancoQuarto');
Route::post('/cadastroReserva', [ReservaController::class, 'cadastrarReserva'])->name('enviaBancoReserva');

/* Home e mostrar forms de gerenciamento */
Route::get('/gerenciaCliente', [ClienteController::class, 'mostrarGerenciarCliente'])->name('formGerenciaCliente');
Route::get('/gerenciaFuncionario', [FuncionarioController::class, 'mostrarGerenciarFuncionario'])->name('formGerenciaFuncionario');
Route::get('/gerenciaQuarto', [QuartoController::class, 'mostrarGerenciarQuarto'])->name('formGerenciaQuarto');
Route::get('/gerenciaReserva', [ReservaController::class, 'mostrarGerenciarReserva'])->name('formGerenciaReserva');

/* Home e mostrar forms de gerenciamento p/ ID */
Route::post('/gerenciaCliente', [ClienteController::class, 'showFormGerenciaCliente'])->name('mostrarCliente');
Route::post('/gerenciaFuncionario', [FuncionarioController::class, 'showFormGerenciaFuncionario'])->name('mostrarFuncionario');
Route::post('/gerenciaQuarto', [QuartoController::class, 'showFormGerenciaQuarto'])->name('mostrarQuarto');

/* Alterar e apagar */
Route::put('/alteraCliente/{id}', [ClienteController::class, 'alterarCliente'])->name('alterarClienteBanco');
Route::delete('/apagaCliente/{id}', [ClienteController::class, 'destroyCliente'])->name('apagarClienteBanco');

Route::put('/alteraFuncionario/{id}', [FuncionarioController::class, 'alterarFuncionario'])->name('alterarFuncionarioBanco');
Route::delete('/apagaFuncionario/{id}', [FuncionarioController::class, 'destroyFuncionario'])->name('apagarFuncionarioBanco');

Route::put('/alteraQuarto/{id}', [QuartoController::class, 'alterarQuarto'])->name('alterarQuartoBanco');
Route::delete('/apagaQuarto/{id}', [QuartoController::class, 'destroyQuarto'])->name('apagarQuartoBanco');

Route::post('/alterarReserva', [ReservaController::class, 'mostrarGerenciarReserva'])->name('mostrarReserva');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function() {
//     return view('home');
// });