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
        Schema::create('produtos_produto_categorias', function (Blueprint $table) {
            $table->foreignId('produto_id')->constrained('produtos');
            $table->foreignId('produto_categoria_id')->constrained('produto_categorias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos_produto_categorias');
    }
};
