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
        Schema::create('personal_access_tokens', function (Blueprint $tabela) {
            $tabela->id();
            $tabela->morphs('tokenable');
            $tabela->string('name');
            $tabela->string('token', 64)->unique();
            $tabela->text('abilities')->nullable();
            $tabela->timestamp('last_used_at')->nullable();
            $tabela->timestamp('expires_at')->nullable();
            $tabela->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
