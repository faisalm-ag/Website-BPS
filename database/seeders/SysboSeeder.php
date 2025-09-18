<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sysbo;

class SysboSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            'BPS Kabupaten Tasikmalaya memberikan sanksi terhadap pegawai yang melakukan tindakan yang tidak sesuai dengan nilai BerAKHLAK.',
            'BPS Kabupaten Tasikmalaya memiliki standar yang jelas dalam mengimplementasikan nilai-nilai BerAKHLAK.',
            'BPS memberikan penghargaan kepada pegawai yang menunjukkan implementasi nilai BerAKHLAK dengan sangat baik.',
            'Sudah tersedia media pengaduan seperti email, telepon, SMS, WhatsApp, dan lainnya untuk menampung keluhan stakeholder (eksternal dan internal).',
            'Tersedia sarana bagi pegawai untuk secara aktif menyuarakan pendapat dalam meningkatkan nilai BerAKHLAK menjadi budaya organisasi.',
            'Telah ada inisiatif atau program untuk mendorong penguatan nilai BerAKHLAK dalam organisasi.',
            'BPS telah mengimplementasikan program peningkatan BerAKHLAK dalam pekerjaan sehari-hari.',
            'Pegawai dengan pelayanan luar biasa mendapat prioritas untuk peningkatan kompetensi.',
            'Ada media komunikasi rutin untuk sosialisasi BerAKHLAK dan budaya pelayanan seperti komunitas internal, Varia Statistik, email, atau grup WhatsApp.',
            'Inisiatif peningkatan BerAKHLAK dilakukan dengan memperhatikan masukan dari stakeholder internal dan eksternal.',
            'Penghargaan budaya BerAKHLAK diberikan secara adil dan transparan, khususnya dalam peningkatan kualitas pelayanan.',
        ];

        $colors = ['primary','success','warning','info','danger','secondary','dark'];

        foreach ($items as $i => $indikator) {
            Sysbo::create([
                'indikator' => $indikator,
                'color' => $colors[$i % count($colors)],
                'deskripsi' => 'Indikator System Budaya Organisasi (SysBO) mengukur sejauh mana sistem dan struktur organisasi BPS Kabupaten Tasikmalaya mendukung implementasi nilai-nilai BerAKHLAK dalam budaya kerja sehari-hari.'
            ]);
        }
    }
}
