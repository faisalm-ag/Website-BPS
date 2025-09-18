<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PeBOIndicator;

class PeBOIndicatorSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            'Pegawai memahami dan memenuhi kebutuhan masyarakat',
            'Pegawai ramah, cekatan, solutif, dan dapat diandalkan',
            'Pegawai melakukan perbaikan tiada henti',
            'Pegawai melaksanakan tugas dengan jujur, bertanggung jawab, cermat, disiplin, dan berintegritas tinggi',
            'Pegawai menggunakan kekayaan dan barang milik negara secara bertanggung jawab, efektif, dan efisien',
            'Pegawai tidak menyalahgunakan kewenangan jabatan',
            'Pegawai meningkatkan kompetensi diri untuk menjawab tantangan yang selalu berubah',
            'Pegawai membantu orang lain belajar',
            'Pegawai melaksanakan tugas dengan kualitas terbaik',
            'Pegawai menghargai setiap orang apapun latar belakangnya',
            'Pegawai suka menolong orang lain',
            'Pegawai membangun lingkungan kerja yang kondusif',
            'Pegawai memegang teguh ideologi Pancasila, UUD 1945, dan setia kepada NKRI serta pemerintahan yang sah',
            'Pegawai menjaga nama baik sesama ASN, pimpinan, instansi, dan negara',
            'Pegawai menjaga rahasia jabatan dan negara',
            'Pegawai cepat menyesuaikan diri menghadapi perubahan',
            'Pegawai terus berinovasi dan mengembangkan kreativitas',
            'Pegawai bertindak proaktif',
            'Pegawai memberi kesempatan kepada berbagai pihak untuk berkontribusi',
            'Pegawai terbuka dalam bekerja sama untuk menghasilkan nilai tambah',
            'Pegawai menggerakkan pemanfaatan berbagai sumber daya untuk tujuan bersama',
        ];

        $colors = ['primary', 'success', 'warning', 'info', 'danger', 'secondary', 'dark'];

        foreach ($items as $i => $content) {
            PeBOIndicator::create([
                'content' => $content,
                'color' => $colors[$i % count($colors)],
            ]);
        }
    }
}
