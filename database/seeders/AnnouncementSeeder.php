<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnouncementSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('announcements')->insert([
            'message'     => 'Pengumuman Pemenang Pegawai Teladan telah diumumkan! <strong>Klik untuk melihat detail →</strong>',
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
    }
}
