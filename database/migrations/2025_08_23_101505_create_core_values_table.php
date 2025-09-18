<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('core_values', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('icon')->nullable();
            $table->text('description')->nullable();
            $table->json('items')->nullable(); // disimpan dalam array JSON
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('core_values');
    }
};
