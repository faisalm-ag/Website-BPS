<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $menus = [
            ['title' => 'Beranda', 'route' => 'home', 'icon' => null, 'parent_id' => null],
            ['title' => 'Konsep Definisi', 'route' => 'konsep', 'icon' => null, 'parent_id' => null],
            ['title' => 'Dasar Hukum', 'route' => 'konsep.dasar', 'parent_id' => 2],
            ['title' => 'Nilai-Nilai Inti BPS', 'route' => 'konsep.nilai', 'parent_id' => 2],
            ['title' => 'Model Implementasi', 'route' => 'konsep.model', 'parent_id' => 2],
            ['title' => 'Login', 'route' => 'login', 'icon' => 'fas fa-user-circle', 'parent_id' => null],
        ];

        DB::table('menus')->insert(array_map(function ($m) {
            return array_merge($m, ['created_at' => now(), 'updated_at' => now()]);
        }, $menus));
    }
}
