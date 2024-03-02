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

        $dadosValidos = $request->validate([
            'idcliente' => 'integer|required',
            'idfuncionario' => 'integer|required',
            'idquarto' => 'integer|required',
            'situacao' => 'enum|required',
            'valorTotal' => 'numeric|required',
            'dataEntrada' => 'required|date_format:Y-m-d\TH:i',
            'dataSaida' => 'date|required'
        ]);

        Reserva::create($dadosValidos);
        return Redirect::route('home');

    }
}
