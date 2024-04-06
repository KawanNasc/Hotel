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

    /* CADASTRO DE QUARTO FUNCIONANDO APENAS COMENTANDO AS DEMAIS FUNÇÕES DEVIDO AO CONFLITO */

    /* Mostrar quarto p/ id */
    public function showFormGerenciaQuarto(Request $request) { 
        
        $dadosQuarto = Quarto::query();
        $dadosQuarto->when($request->numero, function($query, $valor) {
            $query->where("numero", "like", "%" . $valor . "%");
        });
        $dadosQuarto = $dadosQuarto->get();

        return view('formGerenciaQuarto', ['registrosQuarto' => $dadosQuarto]); 
    
    }

    /* Mostrar todos os funcionários */
    public function mostrarGerenciarQuarto(Quarto $id) { 

        return view('formAlteraQuarto', ['registrosQuarto' => $id]);

    }

    public function alterarQuarto(Quarto $id, Request $request) { 
        
        $dadosValidos = $request->validate([

            'numero' => 'integer|required',
            'tipo' => 'string|required',
            'valor' => 'numeric|required'
            
        ]);

        $id->fill($dadosValidos); $id->save();
        return Redirect::route('home');
    
    }

    public function destroyQuarto(Quarto $id) { $id->delete(); return Redirect::route('home'); }

}
