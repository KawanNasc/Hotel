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

    public function showFormGerenciaCliente() { return view('formGerenciaCliente'); }

}
