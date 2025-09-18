<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Priker;

class PrikerSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['judul' => 'Berorientasi Pelayanan', 'deskripsi' => 'yaitu memahami dan memenuhi kebutuhan masyarakat, ramah, cekatan, solutif, dapat diandalkan, dan melakukan perbaikan tiada henti.', 'warna' => 'primary'],
            ['judul' => 'Akuntabel', 'deskripsi' => 'yaitu melaksanakan tugas dengan jujur, bertanggungjawab, cermat, disiplin berintegritas tinggi, menggunakan kekayaan dan barang milik negara secara bertanggungjawab, efektif, efisien, dan tidak menyalahgunakan kewenangan jabatan.', 'warna' => 'success'],
            ['judul' => 'Kompeten', 'deskripsi' => 'yaitu meningkatkan kompetensi diri untuk menjawab tantangan yang selalu berubah, membantu orang lain belajar, dan melaksanakan tugas dengan kualitas terbaik.', 'warna' => 'warning'],
            ['judul' => 'Harmonis', 'deskripsi' => 'yaitu menghargai setiap orang apapun latar belakangnya, suka menolong orang lain, dan membangun lingkungan kerja yang kondusif.', 'warna' => 'info'],
            ['judul' => 'Loyal', 'deskripsi' => 'yaitu memegang teguh ideologi Pancasila, Undang-Undang Dasar Negara Republik Indonesia Tahun 1945, setia kepada NKRI serta pemerintahan yang sah, menjaga nama baik sesama ASN, Pimpinan, Instansi, dan Negara, dan menjaga rahasia jabatan dan negara.', 'warna' => 'danger'],
            ['judul' => 'Adaptif', 'deskripsi' => 'yaitu cepat menyesuaikan diri menghadapi perubahan, terus berinovasi dan mengembangkan kreativitas, dan bertindak proaktif.', 'warna' => 'secondary'],
            ['judul' => 'Kolaboratif', 'deskripsi' => 'yaitu memberi kesempatan kepada berbagai pihak untuk berkontribusi, terbuka dalam bekerja sama untuk menghasilkan nilai tambah, dan menggerakkan pemanfaatan berbagai sumberdaya untuk tujuan bersama.', 'warna' => 'dark'],
        ];

        foreach ($data as $item) {
            Priker::create($item);
        }
    }
}
