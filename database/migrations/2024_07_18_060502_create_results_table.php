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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained('games');
            $table->date('date');
            $table->unsignedInteger('open_3')->nullable();
            $table->unsignedInteger('open_1')->nullable();
            $table->unsignedInteger('close_3')->nullable();
            $table->unsignedInteger('close_1')->nullable();
            $table->unsignedInteger('pair')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
