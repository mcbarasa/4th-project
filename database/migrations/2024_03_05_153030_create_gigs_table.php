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
        Schema::create('gigs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('artist_id')->nullable();
            $table->string('location')->nullable();
            $table->string('description')->nullable();
            $table->string('instrument')->nullable();
            $table->string('experience')->nullable();
            $table->string('attire')->nullable();
            $table->string('time')->nullable();
            $table->string('date')->nullable();
            $table->string('genre')->nullable();
            $table->string('title')->nullable();
            $table->string('add_info')->nullable();
            $table->string('poster_picture')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gigs');
    }
};
