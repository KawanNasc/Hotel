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
        Schema::create('users', function (Blueprint $tabela) {
            $tabela->id();
            $tabela->string('name');
            $tabela->string('email')->unique();
            $tabela->timestamp('email_verified_at')->nullable();
            $tabela->string('password');
            $tabela->rememberToken();
            $tabela->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
