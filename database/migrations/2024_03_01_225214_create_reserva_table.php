<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reserva', function (Blueprint $tabela) {
            $tabela->id();
            $tabela->integer('idcliente');
            $tabela->integer('idfuncionario');
            $tabela->integer('idquarto');
            $tabela->enum('situacao', ['Pago', 'Pendente']);
            $tabela->decimal('valorTotal', 8, 2);
            $tabela->timestamp('dataEntrada');
            $tabela->date('dataSaida');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        System::dropIfExists('reserva');
    }
};
