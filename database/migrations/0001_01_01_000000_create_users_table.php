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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // Username unik untuk login
            $table->string('username')->unique();

            // Nama lengkap user
            $table->string('name');

            // Email (opsional kalau hanya pakai username login)
            $table->string('email')->unique()->nullable();

            // Waktu verifikasi email (opsional)
            $table->timestamp('email_verified_at')->nullable();

            // Password
            $table->string('password');

            // Role (admin, pegawai, kepala_direktur)
            $table->enum('role', ['admin', 'pegawai', 'kepala_direktur'])->default('pegawai');

            // Tambahan atribut user
            $table->enum('gender', ['L', 'P'])->nullable();
            $table->date('birth_date')->nullable();
            $table->string('phone', 20)->nullable();
            $table->text('address')->nullable();
            $table->string('profile_photo')->nullable();
            $table->string('education')->nullable();

            // Token untuk remember me
            $table->rememberToken();

            // Created_at & updated_at
            $table->timestamps();
        });


        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
    }
};
