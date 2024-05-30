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
        Schema::table('directivos', function (Blueprint $table) {
            $table->string('apellido')->after('nombre'); // Añade la columna apellido después de la columna nombre
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('directivos', function (Blueprint $table) {
            $table->dropColumn('apellido');
        });
    }
};
