<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pe_b_o_indicators', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->string('color')->default('primary');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pe_b_o_indicators');
    }
};
