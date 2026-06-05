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
        Schema::create('games', function (Blueprint $table) {
            $table->id("game_id");
            $table->timestamps();
            $table->foreignId("player1_id")->constrained("naam");
            $table->foreignId("player2_id")->constrained("naam");
            $table->foreignId("winner_id")->constrained("naam");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
