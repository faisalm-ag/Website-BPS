<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LeadBOIndicator;

class LeadBOIndicatorSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            'Pegawai menerima masukan secara rutin dari pimpinan mengenai implementasi nilai BerAKHLAK dalam pelaksanaan tugas sehari-hari.',
            'Pimpinan memberikan contoh yang baik dalam implementasi nilai-nilai BerAKHLAK.',
            'Pimpinan memberikan pujian ketika salah seorang bawahan memberikan pelayanan terbaik kepada stakeholder (internal dan eksternal) sesuai dengan nilai BerAKHLAK.',
            'Pimpinan melakukan program coaching yang efektif untuk membantu pegawai mengembangkan kompetensi mereka.<br><small><em>Note:</em> Coaching adalah teknik atau proses ...</small>',
            'Pimpinan bukan hanya berbicara, tetapi mengambil tindakan nyata untuk meningkatkan nilai BerAKHLAK sebagai budaya organisasi.',
            'Pimpinan menekankan secara berulang pentingnya implementasi nilai-nilai BerAKHLAK dalam pekerjaan sehari-hari.',
            'Pimpinan melaksanakan program mentoring yang efektif ...',
            'Pimpinan mendorong seluruh bawahannya untuk selalu memberikan layanan terbaik.',
        ];

        $colors = ['primary', 'success', 'warning', 'info', 'danger', 'secondary', 'dark'];

        foreach ($items as $i => $item) {
            LeadBOIndicator::create([
                'content' => $item,
                'color'   => $colors[$i % count($colors)],
            ]);
        }
    }
}
