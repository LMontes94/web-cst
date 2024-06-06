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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_type_id');
            $table->dateTime('discharge_date');
            $table->dateTime('date');
            $table->string('title');
            $table->string('subtitle');
            $table->text('description');
            $table->unsignedBigInteger('user_id');
            $table->unsignedTinyInteger('state');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
