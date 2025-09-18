<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cultural_models', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Leadership / People / System
            $table->string('icon')->nullable(); // chess-king, users, cogs
            $table->string('color')->default('primary'); 
            $table->text('description')->nullable();
            $table->json('points')->nullable(); // list point disimpan JSON
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cultural_models');
    }
};
