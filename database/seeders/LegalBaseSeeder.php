<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LegalBase;

class LegalBaseSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            'Undang-Undang Dasar Negara Republik Indonesia Tahun 1945',
            'Undang-Undang Nomor 16 Tahun 1997 tentang Statistik',
            'Undang-Undang Nomor 28 Tahun 1999 tentang Penyelenggaraan Negara yang Bersih dan Bebas dari Korupsi, Kolusi, dan Nepotisme',
            'Undang-Undang Nomor 5 Tahun 2014 tentang Aparatur Sipil Negara. (Lembaran Negara Republik Indonesia Nomor 191 Tahun 2013)',
            'Peraturan Presiden Republik Indonesia Nomor 86 Tahun 2007 tentang Badan Pusat Statistik (Lembaran Negara Republik Indonesia Tahun 2007 Nomor 39)',
            'Peraturan Menteri PANRB Nomor 10 Tahun 2011 tentang Pedoman Pelaksanaan Program Manajemen Perubahan',
            'Peraturan Menteri PANRB Nomor 39 Tahun 2012 tentang Pedoman Pengembangan Budaya Kerja (Berita Negara Republik Indonesia Nomor 751 Tahun 2012)',
            'Peraturan Menteri PANRB Nomor 27 Tahun 2014 tentang Pedoman Pembangunan Agen Perubahan di Instansi Pemerintah (Berita Negara Republik Indonesia Tahun 2014 Nomor 1455)',
            'Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 25 Tahun 2020 tentang Road Map Reformasi Birokrasi 2020–2024 ... sebagaimana telah diubah dengan Peraturan Menteri ... Nomor 3 Tahun 2023 ...',
            'Peraturan Kepala BPS Nomor 7 Tahun 2013 tentang Kode Etik Pegawai di Lingkungan Badan Pusat Statistik',
            'Peraturan Kepala BPS Nomor 87 Tahun 2017 tentang Organisasi dan Tata Kerja Politeknik Statistika STIS',
            'Peraturan BPS Nomor 7 Tahun 2020 tentang Organisasi dan Tata Kerja Badan Pusat Statistik (Berita Negara Republik Indonesia Tahun 2020 Nomor 1585)',
            'Peraturan BPS Nomor 8 Tahun 2020 tentang Organisasi dan Tata Kerja BPS Provinsi dan BPS Kabupaten/Kota (Lembaran Negara Republik Indonesia Tahun 2020 Nomor 1586)',
        ];

        foreach ($items as $title) {
            LegalBase::firstOrCreate(['title' => $title]);
        }
    }
}
