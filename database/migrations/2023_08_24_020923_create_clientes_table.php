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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('email', 80);
            $table->string('cpf', 15);
            $table->date('nascimento');
            $table->string('rua', 200)->nullable();
            $table->string('num_compl', 30)->nullable();
            $table->string('cep', 9);
            $table->string('cidade', 50)->nullable();
            $table->string('estado', 2)->nullable();
            $table->string('sexo', 1);
            $table->boolean('ativo')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
