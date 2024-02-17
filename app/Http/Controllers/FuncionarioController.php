<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function showHome() { return view('home'); }

    public function showFormCadastroFuncionario(Request $request) { return view('formCadastroFuncionario'); }
}
