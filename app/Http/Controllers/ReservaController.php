<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Reserva;
use App\Http\Requests\StoreReservaRequest;
use App\Http\Requests\UpdateReservaRequest;

class ReservaController extends Controller
{

    public function showHome(Request $request) { return view('home'); }

    public function showFormCadastroReserva(Request $request) { return view('formCadastroReserva'); }

    public function cadastrarReserva(Request $request) {

        // dd($request);
        // dd($dadosValidos);
        $dadosValidos = $request->validate([

            'idcliente' => 'integer|required',
            'idfuncionario' => 'integer|required',
            'idquarto' => 'integer|required',
            'situacao' => 'required|in:pago,pendente',
            'valorTotal' => 'numeric|required',
            'dataEntrada' => 'date|required',
            'dataSaida' => 'date|required'

        ]);

        Reserva::create($dadosValidos);
        return Redirect::route('home');

    }

    /* CADASTRO DE RESERVAS FUNCIONANDO APENAS COMENTANDO AS DEMAIS FUNÇÕES DEVIDO AO CONFLITO */

    /* Mostrar todas as reservas */
    public function mostrarGerenciarReserva() { 

        return view('formGerenciaReserva');
        
    }

}
