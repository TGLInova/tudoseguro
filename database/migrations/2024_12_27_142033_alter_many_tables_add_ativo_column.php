<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    const TABLES = [
        'produtos',
        'testemunhos',
        'parceiros',
    ];

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        foreach (static::TABLES as $tableName) {
            Schema::table($tableName, fn (Blueprint $table) => $table->boolean('ativo')->default(1));
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        foreach (static::TABLES as $tableName) {
            Schema::table($tableName, fn (Blueprint $table) => $table->dropColumn('ativo'));
        }
    }
};
