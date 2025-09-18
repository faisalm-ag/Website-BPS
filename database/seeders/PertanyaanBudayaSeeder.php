<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PertanyaanBudaya;

class PertanyaanBudayaSeeder extends Seeder
{
    public function run(): void
    {
        $indikator = [
            'PriKer' => [
                'Berorientasi pelayanan, yaitu memahami dan memenuhi kebutuhan masyarakat, ramah, cekatan, solutif, dapat diandalkan, dan melakukan perbaikan tiada henti.',
                'Akuntabel, yaitu melaksanakan tugas dengan jujur, bertanggung jawab, cermat, disiplin berintegritas tinggi, menggunakan kekayaan dan barang milik negara secara bertanggung jawab, efektif, efisien, dan tidak menyalahgunakan kewenangan jabatan.',
                'Kompeten, yaitu meningkatkan kompetensi diri untuk menjawab tantangan yang selalu berubah, membantu orang lain belajar, dan melaksanakan tugas dengan kualitas terbaik.',
                'Harmonis, yaitu menghargai setiap orang apapun latar belakangnya, suka menolong orang lain, dan membangun lingkungan kerja yang kondusif.',
                'Loyal, yaitu memegang teguh ideologi Pancasila, UUD 1945, setia kepada NKRI serta pemerintahan yang sah, menjaga nama baik sesama ASN, pimpinan, instansi, dan negara, serta menjaga rahasia jabatan dan negara.',
                'Adaptif, yaitu cepat menyesuaikan diri menghadapi perubahan, terus berinovasi dan mengembangkan kreativitas, dan bertindak proaktif.',
                'Kolaboratif, yaitu memberi kesempatan kepada berbagai pihak untuk berkontribusi, terbuka dalam bekerja sama untuk menghasilkan nilai tambah, dan menggerakkan pemanfaatan berbagai sumber daya untuk tujuan bersama.',
            ],
            'LeadBO' => [
                'Pegawai menerima masukan secara rutin dari pimpinan mengenai implementasi nilai BerAKHLAK dalam pelaksanaan tugas sehari-hari.',
                'Pimpinan memberikan contoh yang baik dalam implementasi nilai-nilai BerAKHLAK.',
                'Pimpinan memberikan pujian ketika salah seorang bawahan memberikan pelayanan terbaik kepada stakeholder (internal dan eksternal) sesuai dengan nilai BerAKHLAK.',
                'Pimpinan melakukan program coaching yang efektif untuk membantu pegawai mengembangkan kompetensi mereka.',
                'Pimpinan bukan hanya berbicara, tetapi mengambil tindakan yang nyata untuk meningkatkan nilai BerAKHLAK sebagai budaya organisasi.',
                'Pimpinan menekankan secara berulang-ulang tentang pentingnya BerAKHLAK diimplementasikan dalam pekerjaan sehari-hari.',
                'Pimpinan melaksanakan program mentoring yang efektif untuk membantu pegawai mengembangkan kompetensi.',
                'Pimpinan mendorong semua anak buahnya untuk selalu memberikan layanan yang terbaik.',
            ],
            'PeBO' => [
                'Pegawai memahami dan memenuhi kebutuhan masyarakat.',
                'Pegawai ramah, cekatan, solutif dan dapat diandalkan.',
                'Pegawai melakukan perbaikan tiada henti.',
                'Pegawai melaksanakan tugas dengan jujur, bertanggungjawab, cermat, disiplin dan berintegritas tinggi.',
                'Pegawai menggunakan kekayaan dan barang milik negara secara bertanggung jawab, efektif, dan efisien.',
                'Pegawai tidak menyalahgunakan kewenangan jabatan.',
                'Pegawai meningkatkan kompetensi diri untuk menjawab tantangan yang selalu berubah.',
                'Pegawai membantu orang lain belajar.',
                'Pegawai melaksanakan tugas dengan kualitas terbaik.',
                'Pegawai menghargai setiap orang apapun latar belakangnya.',
                'Pegawai suka menolong orang lain.',
                'Pegawai membangun lingkungan kerja yang kondusif.',
                'Pegawai memegang teguh ideologi Pancasila, UUD 1945, setia kepada NKRI serta pemerintahan yang sah.',
                'Pegawai menjaga nama baik sesama ASN, pimpinan, instansi, dan negara.',
                'Pegawai menjaga rahasia jabatan dan negara.',
                'Pegawai cepat menyesuaikan diri menghadapi perubahan.',
                'Pegawai terus berinovasi dan mengembangkan kreativitas.',
                'Pegawai bertindak proaktif.',
                'Pegawai memberi kesempatan kepada berbagai pihak untuk berkontribusi.',
                'Pegawai terbuka dalam bekerja sama untuk menghasilkan nilai tambah.',
                'Pegawai menggerakkan pemanfaatan berbagai sumber daya untuk tujuan bersama.',
            ],
            'SysBO' => [
                'BPS Kabupaten Tasikmalaya memberikan sanksi terhadap pegawai yang melakukan tindakan yang tidak sesuai dengan BerAKHLAK.',
                'BPS Kabupaten Tasikmalaya memiliki standar yang jelas dalam mengimplementasikan BerAKHLAK.',
                'BPS Kabupaten Tasikmalaya memberikan penghargaan kepada pegawai yang menunjukkan nilai BerAKHLAK yang sangat baik.',
                'BPS Kabupaten Tasikmalaya telah memiliki media untuk menampung keluhan dari stakeholder (eksternal dan internal).',
                'BPS Kabupaten Tasikmalaya telah memiliki sarana bagi pegawainya untuk dapat secara aktif menyuarakan pendapat mereka dalam upaya untuk meningkatkan nilai BerAKHLAK.',
                'BPS Kabupaten Tasikmalaya memiliki sejumlah inisiatif atau program untuk meningkatkan BerAKHLAK menjadi budaya organisasi.',
                'BPS Kabupaten Tasikmalaya telah mengimplementasikan inisiatif atau program untuk meningkatkan BerAKHLAK dalam pekerjaan sehari-hari.',
                'Pegawai yang menunjukkan kualitas pelayanan yang luar biasa diberi prioritas kesempatan untuk meningkatkan kompetensinya.',
                'Terdapat jalur komunikasi untuk mensosialisasikan BerAKHLAK dan budaya pelayanan kepada semua pegawai BPS secara rutin.',
                'Inisiatif atau program peningkatan nilai BerAKHLAK dilakukan dengan mendengarkan saran dari stakeholder (internal dan eksternal).',
                'Penghargaan yang berkaitan dengan implementasi nilai BerAKHLAK dalam meningkatkan kualitas pelayanan diberikan secara adil dan transparan.',
            ],
        ];

        foreach ($indikator as $kategori => $pertanyaans) {
            foreach ($pertanyaans as $pertanyaan) {
                PertanyaanBudaya::create([
                    'kategori'   => $kategori,
                    'pertanyaan' => $pertanyaan,
                ]);
            }
        }
    }
}
