<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Quarto;
use App\Http\Requests\StoreQuartoRequest;
use App\Http\Requests\UpdateQuartoRequest;

class QuartoController extends Controller
{
    
    public function showHome() { return view('home'); }

    public function showFormCadastroQuarto(Request $request) { return view('formCadastroQuarto'); }

    public function cadastrarQuarto(Request $request) {

        // dd($request);
        // dd($dadosValidos);
        $dadosValidos = $request->validate([
            'numero' => 'integer|required',
            'tipo' => 'string|required',
            'valor' => 'numeric|required'
        ]);

        Quarto::create($dadosValidos);
        return Redirect::route('home');
        
    }

    public function showFormGerenciaQuarto() { return view('formGerenciaQuarto'); }

}
