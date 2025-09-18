<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema; // <--- tambahkan ini
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Matikan foreign key checks supaya bisa truncate user walau direferensikan tabel lain
        Schema::disableForeignKeyConstraints();

        // Hapus isi tabel user biar tidak duplicate email
        User::truncate();

        // Aktifkan lagi constraint
        Schema::enableForeignKeyConstraints();

        // Buat akun default
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'), // password default
        ]);

        // Jalankan seeder tambahan
        $this->call([
            SettingSeeder::class,
            WinnerSeeder::class,
            FooterSeeder::class,
            UserSeeder::class,
            LegalBaseSeeder::class,
            CulturalModelSeeder::class,
            CoreValueSeeder::class,
            LeadBOIndicatorSeeder::class,
            PeBOIndicatorSeeder::class,
            PrikerSeeder::class,
            SysboSeeder::class,
            PertanyaanBudayaSeeder::class,
            PertanyaanTeladanSeeder::class,
            FotoSeeder::class,
        ]);
    }
}
