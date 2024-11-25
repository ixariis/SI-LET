<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dekan;

class DekanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $DekanData = [
            [
                'nama' => 'Yamazaki Shingen',
                'nip' => '2502822099',
                'fakultas' => 'Fakultas Teknik',
                'email'=> 'bapaknyaGun@gmail.com',
            ],
            [
                'nama' => 'Alfred Pennyworth',
                'nip' => '2502522098',
                'fakultas' => 'Fakultas Ilmu Budaya',
                'email'=> 'urloyalguy@gmail.com',
            ],
            [
                'nama' => 'Kakashi Hatake',
                'nip' => '2502722658',
                'fakultas' => 'Fakultas Sains dan Matematika',
                'email'=> 'kangcopas@gmail.com',
            ],
        ];
        foreach ($DekanData as $data) {
            Dekan::create($data); // Pastikan model ini mengarah ke tabel yang benar
        }
    }
}
