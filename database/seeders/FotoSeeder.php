<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Foto;

class FotoSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama' => 'Triwulan I Tahun 2024', 'file' => 'foto/triwulan1_2024.jpg'],
            ['nama' => 'Triwulan II Tahun 2024', 'file' => 'foto/triwulan2_2024.jpg'],
            ['nama' => 'Triwulan III Tahun 2024', 'file' => 'foto/triwulan3_2024.jpg'],
            ['nama' => 'Triwulan IV Tahun 2024', 'file' => 'foto/triwulan4_2024.jpg'],
            ['nama' => 'Triwulan I Tahun 2025', 'file' => 'foto/triwulan1_2025.jpg'],
        ];

        foreach ($data as $item) {
            Foto::create($item);
        }
    }
}
