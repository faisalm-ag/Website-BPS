<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('footer_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_id')->constrained('footer_sections')->onDelete('cascade'); 
            $table->string('title');   // contoh: "Facebook", "Instagram"
            $table->string('url');     // contoh: "https://facebook.com/bps"
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('footer_links');
    }
};
