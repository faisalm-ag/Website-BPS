<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WinnerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('winners')->insert([
            'name'         => 'Bapak Muhamad Sobari, S.ST., M.Stat.',
            'position'     => 'Kepala Seksi Statistik Sosial',
            'title'        => 'Pegawai Teladan',
            'period'       => 'Triwulan I Tahun 2025',
            'announced_at' => '2025-01-15',
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);
    }
}
