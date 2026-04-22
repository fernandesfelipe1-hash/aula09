<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('filmes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('genero', 100)->nullable();
            $table->string('diretor');
            $table->integer('ano_lancamento');
            $table->integer('duracao_minutos')->nullable();
            $table->text('sinopse')->nullable();
            $table->boolean('assistido')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('filmes');
    }
};
