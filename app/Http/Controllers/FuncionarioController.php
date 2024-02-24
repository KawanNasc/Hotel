<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function showHome() { return view('home'); }

    public function showFormCadastroFuncionario(Request $request) { return view('formCadastroFuncionario'); }

    public function cadastrarFuncionario(Request $request) {

        $dadosValidos = $request->validate([

            'nome' => 'string|required',
            'funcao' => 'string|required'

        ]);

        Funcionario::create($dadosValidos);
        return Redirect::route('home');

    }
}
