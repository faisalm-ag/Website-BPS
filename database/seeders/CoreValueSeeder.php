<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CoreValue; // Pastikan model CoreValue Anda ada di App\Models
use Illuminate\Support\Facades\DB;

class CoreValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel dulu agar tidak duplikat setiap kali seeding
        DB::table('core_values')->delete();

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
                'Melaksanakan tugas dengan jujur, tanggung jawab, cermat, disiplin, dan integritas tinggi',
                'Gunakan kekayaan/barang negara secara efisien',
                'Tidak menyalahgunakan kewenangan jabatan'
            ],
        ]);

        CoreValue::create([
            'title' => 'Kompeten',
            'icon' => 'lightbulb',
            'description' => 'Terus belajar dan mengembangkan kapabilitas',
            'items' => [
                'Tingkatkan kompetensi diri',
                'Bantu orang lain belajar',
                'Kerja dengan kualitas terbaik'
            ],
        ]);

        CoreValue::create([
            'title' => 'Harmonis',
            'icon' => 'heart',
            'description' => 'Saling peduli dan menghargai perbedaan',
            'items' => [
                'Menghargai setiap orang',
                'Suka menolong',
                'Membangun lingkungan kerja kondusif'
            ],
        ]);

        CoreValue::create([
            'title' => 'Loyal',
            'icon' => 'flag',
            'description' => 'Berdedikasi dan mengutamakan kepentingan Bangsa dan Negara',
            'items' => [
                'Memegang teguh ideologi dan konstitusi',
                'Menjaga nama baik ASN, pimpinan, dan negara',
                'Menjaga rahasia jabatan dan negara'
            ],
        ]);

        CoreValue::create([
            'title' => 'Adaptif',
            'icon' => 'sync',
            'description' => 'Terus berinovasi dan antusias dalam menghadapi perubahan',
            'items' => [
                'Cepat menyesuaikan diri',
                'Terus berinovasi dan kreatif',
                'Bertindak proaktif'
            ],
        ]);

        CoreValue::create([
            'title' => 'Kolaboratif',
            'icon' => 'people-arrows',
            'description' => 'Membangun kerja sama yang sinergis',
            'items' => [
                'Buka kesempatan kontribusi dari berbagai pihak',
                'Terbuka dalam bekerja sama',
                'Manfaatkan sumber daya untuk tujuan bersama'
            ],
        ]);
    }
}
