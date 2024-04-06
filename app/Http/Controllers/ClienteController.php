<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Cliente;

class ClienteController extends Controller
{

    public function showHome() { return view('home'); }

    public function showFormCadastroCliente() { return view('formCadastroCliente'); }

    public function cadastrarCliente(Request $request) { 

        // dd($request);
        // dd($dadosValidos);
        $dadosValidos = $request->validate([

            // $request->"email" - Objeto
            // 'nome' = $request["nome"], - Array
            'nome' => 'string|required',
            'email' => 'string|required',
            'fone' => 'string|required'
            
        ]);

        Cliente::create($dadosValidos);
        return Redirect::route('home');
    
    }

    /* CADASTRO DE CLIENTE FUNCIONANDO APENAS COMENTANDO AS DEMAIS FUNÇÕES DEVIDO AO CONFLITO */

    /* Mostrar cliente p/ id */
    public function showFormGerenciaCliente(Request $request) { 
        
        $dadosClientes = Cliente::query();
        $dadosClientes->when($request->nome, function($query, $valor) {
            $query->where("nome", "like", "%" . $valor . "%");
        });
        $dadosClientes = $dadosClientes->get();

        return view('formGerenciaCliente', ['registrosClientes' => $dadosClientes]); 
    
    }

    /* Mostrar todos os clientes */
    public function mostrarGerenciarCliente(Cliente $id) {

        return view('formAlteraCliente', ['registrosClientes' => $id]);

    }
    
    public function alterarCliente(Cliente $id, Request $request) { 
        
        $dadosValidos = $request->validate([

            'nome' => 'string|required',
            'email' => 'string|required',
            'fone' => 'string|required'

        ]);

        $id->fill($dadosValidos); $id->save();
        return Redirect::route('home');
    
    }

    public function destroyCliente(Cliente $id) { $id->delete(); return Redirect::route('home'); }
    
}
