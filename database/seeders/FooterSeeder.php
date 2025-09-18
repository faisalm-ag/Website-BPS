<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FooterSection;
use App\Models\FooterLink;

class FooterSeeder extends Seeder
{
    public function run(): void
    {
        // Section 1: Alamat
        $alamat = FooterSection::create(['title' => 'Alamat']);
        FooterLink::create([
            'section_id' => $alamat->id,
            'title' => 'BPS Kab. Tasikmalaya',
            'url' => 'https://tasikmalayakab.bps.go.id/'
        ]);

        // Section 2: Kontak
        $kontak = FooterSection::create(['title' => 'Kontak']);
        FooterLink::create([
            'section_id' => $kontak->id,
            'title' => 'Email',
            'url' => 'mailto:bps.tasikmalaya@bps.go.id'
        ]);
        FooterLink::create([
            'section_id' => $kontak->id,
            'title' => 'Telepon',
            'url' => 'tel:+62265331092'
        ]);

        // Section 3: Sosial Media
        $sosmed = FooterSection::create(['title' => 'Sosial Media']);
        FooterLink::create([
            'section_id' => $sosmed->id,
            'title' => 'Facebook',
            'url' => 'https://facebook.com/bpstasikmalaya'
        ]);
        FooterLink::create([
            'section_id' => $sosmed->id,
            'title' => 'Instagram',
            'url' => 'https://instagram.com/bpstasikmalaya'
        ]);
    }
}
