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
        Schema::create('quarto', function (Blueprint $tabela) {
            $tabela->id();
            $tabela->integer('numero');
            $tabela->string('tipo');
            $tabela->decimal('valor', 8, 2);
            $tabela->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        System::dropIfExists('quarto');
    }
};
