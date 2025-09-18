<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CulturalModel;

class CulturalModelSeeder extends Seeder
{
    public function run(): void
    {
        CulturalModel::create([
            'title' => 'Leadership',
            'icon' => 'chess-king',
            'color' => 'primary',
            'description' => 'Aspek kepemimpinan yang menunjang implementasi nilai inti BerAKHLAK:',
            'points' => [
                'Commitment yang ditunjukkan oleh seluruh pimpinan',
                'Coaching & Mentoring dari pimpinan kepada seluruh pegawai',
            ],
        ]);

        CulturalModel::create([
            'title' => 'People',
            'icon' => 'users',
            'color' => 'primary',
            'description' => 'Aspek sumber daya manusia yang mencerminkan perilaku BerAKHLAK:',
            'points' => [
                'Berorientasi Pelayanan',
                'Akuntabel',
                'Kompeten',
                'Harmonis',
                'Loyal',
                'Adaptif',
                'Kolaboratif',
            ],
        ]);

        CulturalModel::create([
            'title' => 'System',
            'icon' => 'cogs',
            'color' => 'primary',
            'description' => 'Aspek sistem kerja yang mendukung nilai budaya:',
            'points' => [
                'Standard & Measurement yang jelas dan terukur dalam implementasi nilai budaya',
                'Improvement & Innovation secara berkelanjutan dalam meningkatkan implementasi nilai budaya',
            ],
        ]);
    }
}
