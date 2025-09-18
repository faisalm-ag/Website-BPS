<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('winners', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // nama pemenang
            $table->string('position')->nullable(); // jabatan
            $table->string('title')->nullable(); // judul misalnya "Pegawai Teladan"
            $table->string('period')->nullable(); // periode, misalnya "Triwulan I Tahun 2025"
            $table->date('announced_at')->nullable(); // tanggal diumumkan
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('winners');
    }
};
