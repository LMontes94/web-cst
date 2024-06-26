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
        Schema::table('image_posts', function (Blueprint $table) {
            $table->string('thumbnail')->nullable();
            $table->string('medium')->nullable();
            $table->string('large')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('image_posts', function (Blueprint $table) {
            $table->dropColumn('thumbnail');
            $table->dropColumn('medium');
            $table->dropColumn('large');
        });
    }
};
