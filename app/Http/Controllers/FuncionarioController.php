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

        // dd($request);
        // dd($dadosValidos);
        $dadosValidos = $request->validate([

            'nome' => 'string|required',
            'funcao' => 'string|required'

        ]);

        Funcionario::create($dadosValidos);
        return Redirect::route('home');

    }

    /* CADASTRO DE FUNCIONÁRIO FUNCIONANDO APENAS COMENTANDO AS DEMAIS FUNÇÕES DEVIDO AO CONFLITO */

    /* Mostrar todos os funcionários */
    public function mostrarGerenciarFuncionario() { 

        $dadosFuncionarios= Funcionario::all();
        return view('formGerenciaFuncionario', ['registrosFuncionarios' => $dadosFuncionarios]);

    }

     /* Mostrar funcionário p/ id */
     public function showFormGerenciaFuncionario(Request $request) { 
        
        $dadosFuncionarios = Funcionario::query();
        $dadosFuncionarios->when($request->nome, function($query, $valor) {
            $query->where("nome", "like", "%" . $valor . "%");
        });
        $dadosFuncionarios = $dadosFuncionarios->get();

        return view('formAlteraFuncionario', ['registrosFuncionarios' => $dadosFuncionarios]);
    
    }

    public function alterarFuncionario(Funcionario $id, Request $request) { 
        
        $dadosValidos = $request->validate([

            'nome' => 'string|required',
            'funcao' => 'string|required'

        ]);

        $id->fill($dadosValidos); $id->save(); return Redirect::route('home');
    
    }

    public function destroyFuncionario(Funcionario $id) { $id->delete(); return Redirect::route('home'); }
    
}
