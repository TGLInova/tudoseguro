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
        Schema::create('produto_categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 150);
            $table->string('descricao', 500)->nullable();
            $table->boolean('exibir_menu')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto_categorias');
    }
};
