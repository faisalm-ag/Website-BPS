<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CoreValue;

class CoreValueSeeder extends Seeder
{
    public function run(): void
    {
        CoreValue::create([
            'title' => 'Berorientasi Pelayanan',
            'icon' => 'handshake',
            'description' => 'Komitmen memberikan pelayanan prima demi kepuasan masyarakat',
            'items' => [
                'Memahami dan memenuhi kebutuhan masyarakat',
                'Ramah, cekatan, solutif, dan dapat diandalkan',
                'Melakukan perbaikan tiada henti'
            ],
        ]);

        CoreValue::create([
            'title' => 'Akuntabel',
            'icon' => 'check-circle',
            'description' => 'Bertanggung jawab atas kepercayaan yang diberikan',
            'items' => [
                'Melaksanakan tugas dengan jujur dan disiplin',
                'Menggunakan sumber daya negara secara efisien',
                'Tidak menyalahgunakan kewenangan'
            ],
        ]);

        // Tambahkan nilai lainnya sesuai kebutuhan...
    }
}
