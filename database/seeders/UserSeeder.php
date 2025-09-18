<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin01',
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'gender' => 'L',
            'birth_date' => '1990-01-01',
            'phone' => '0811111111',
            'address' => 'Jl. Admin Raya No.1',
            'profile_photo' => null,
            'education' => 'S1 Teknik Informatika',
        ]);

        User::create([
            'username' => 'pegawai01',
            'name' => 'Pegawai Biasa',
            'email' => 'pegawai@example.com',
            'password' => Hash::make('password'),
            'role' => 'pegawai',
            'gender' => 'P',
            'birth_date' => '1995-05-10',
            'phone' => '0822222222',
            'address' => 'Jl. Pegawai Lama No.2',
            'profile_photo' => null,
            'education' => 'S1 Teknik Informatika',
        ]);

        User::create([
            'username' => 'direktur01',
            'name' => 'Kepala Direktur',
            'email' => 'direktur@example.com',
            'password' => Hash::make('password'),
            'role' => 'kepala_direktur',
            'gender' => 'L',
            'birth_date' => '1985-07-15',
            'phone' => '0833333333',
            'address' => 'Jl. Direktur Besar No.3',
            'profile_photo' => null,
            'education' => 'S1 Teknik Informatika',
        ]);
    }
}
