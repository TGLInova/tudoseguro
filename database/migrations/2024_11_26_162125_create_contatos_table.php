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
        Schema::create('contatos', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable();
            $table->string('telefone', 15)->nullable();
            $table->string('email')->nullable();
            $table->string('assunto', 350)->nullable();
            $table->time('melhor_horario')->nullable();
            $table->string('profissao')->nullable();
            $table->text('mensagem')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contatos');
    }
};
