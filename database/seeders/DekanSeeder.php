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
                'e-mail'=> 'bapaknyaGun@gmail.com',
            ],
            [
                'nama' => 'Alfred Pennyworth',
                'nip' => '2502522098',
                'fakultas' => 'Fakultas Ilmu Budaya',
                'e-mail'=> 'urloyalguy@gmail.com',
            ],
            [
                'nama' => 'Kakashi Hatake',
                'nip' => '2502722658',
                'fakultas' => 'Fakultas Sains dan Matematika',
                'e-mail'=> 'kangcopas@gmail.com',
            ],
        ];
        foreach ($DekanData as $data) {
            Dekan::create($data); // Pastikan model ini mengarah ke tabel yang benar
        }
    }
}
