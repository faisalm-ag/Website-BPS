<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('legal_bases', function (Blueprint $table) {
            $table->id();
            $table->text('title'); // isi teks dasar hukum
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('legal_bases');
    }
};
