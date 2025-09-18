<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pertanyaan_budaya', function (Blueprint $table) {
            $table->id();
            $table->string('kategori')->nullable(); // contoh: Integritas, Profesional, dll
            $table->text('pertanyaan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pertanyaan_budaya');
    }
};
