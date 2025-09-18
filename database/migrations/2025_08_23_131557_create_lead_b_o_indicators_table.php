<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lead_b_o_indicators', function (Blueprint $table) {
            $table->id();
            $table->text('content'); // isi indikator
            $table->string('color')->default('primary'); // warna border/card
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lead_b_o_indicators');
    }
};
