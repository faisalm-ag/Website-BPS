<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('settings')->insert([
            'site_title'   => 'Penilaian Kinerja Pegawai BPS Kabupaten Tasikmalaya',
            'logo'         => 'foto/logobps.png',
            'footer_text'  => 'Badan Pusat Statistik Kabupaten Tasikmalaya',
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);
    }
}
