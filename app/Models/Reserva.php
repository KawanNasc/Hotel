<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table = 'reserva';

    protected $fillable = [
        'idcliente',
        'idfuncionario',
        'idquarto',
        'situacao',
        'valorTotal',
        'dataEntrada',
        'dataSaida'
    ];
}
