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
        Schema::table('cartao_beneficios', function (Blueprint $table) {
            $table->string('celular', 16)->nullable();
            $table->string('cpf', 11)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cartao_beneficios', function (Blueprint $table) {
            $table->dropColumn('celular');
        });
    }
};
