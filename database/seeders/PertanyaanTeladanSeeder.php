<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PertanyaanTeladan;

class PertanyaanTeladanSeeder extends Seeder
{
    public function run(): void
    {
        $pertanyaan = [
            ['Pelayanan Prima', 'Pegawai memahami dan memenuhi kebutuhan masyarakat'],
            ['Pelayanan Prima', 'Pegawai ramah, cekatan, solutif dan dapat diandalkan'],
            ['Pelayanan Prima', 'Pegawai melakukan perbaikan tiada henti'],

            ['Integritas', 'Pegawai melaksanakan tugas dengan jujur, bertanggungjawab, cermat, disiplin dan berintegritas tinggi'],
            ['Integritas', 'Pegawai menggunakan kekayaan dan barang milik negara secara bertanggung jawab, efektif, dan efisien'],
            ['Integritas', 'Pegawai tidak menyalahgunakan kewenangan jabatan'],

            ['Pembelajaran Berkelanjutan', 'Pegawai meningkatkan kompetensi diri untuk menjawab tantangan yang selalu berubah'],
            ['Pembelajaran Berkelanjutan', 'Pegawai membantu orang lain belajar'],
            ['Pembelajaran Berkelanjutan', 'Pegawai melaksanakan tugas dengan kualitas terbaik'],

            ['Harmoni', 'Pegawai menghargai setiap orang apapun latar belakangnya'],
            ['Harmoni', 'Pegawai suka menolong orang lain'],
            ['Harmoni', 'Pegawai membangun lingkungan kerja yang kondusif'],

            ['Loyalitas', 'Pegawai memegang teguh ideologi Pancasila, UUD 1945, setia kepada NKRI serta pemerintahan yang sah'],
            ['Loyalitas', 'Pegawai menjaga nama baik sesama ASN, pimpinan, instansi, dan negara'],
            ['Loyalitas', 'Pegawai menjaga rahasia jabatan dan negara'],

            ['Adaptabilitas', 'Pegawai cepat menyesuaikan diri menghadapi perubahan'],
            ['Adaptabilitas', 'Pegawai terus berinovasi dan mengembangkan kreativitas'],
            ['Adaptabilitas', 'Pegawai bertindak proaktif'],

            ['Kolaborasi', 'Pegawai memberi kesempatan kepada berbagai pihak untuk berkontribusi'],
            ['Kolaborasi', 'Pegawai terbuka dalam bekerja sama untuk menghasilkan nilai tambah'],
            ['Kolaborasi', 'Pegawai menggerakkan pemanfaatan berbagai sumberdaya untuk tujuan bersama'],
        ];

        foreach ($pertanyaan as $p) {
            PertanyaanTeladan::create([
                'kategori' => $p[0],
                'pertanyaan' => $p[1],
            ]);
        }
    }
}
