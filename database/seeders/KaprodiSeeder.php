<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kaprodi;


class KaprodiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $KaprodiData = [
            [
                'nama' => 'Ucup',
                'nip' => '2502825029',
                'fakultas' => 'Fakultas Vokasi',
                'email'=> 'ucupgimang@gmail.com',
            ],
            [
                'nama' => 'Agus Kopling',
                'nip' => '2502525498',
                'fakultas' => 'Fakultas Ilmu Budaya',
                'email'=> 'aselole@gmail.com',
            ],
            [
                'nama' => 'Farhan Kebab',
                'nip' => '2502725658',
                'fakultas' => 'Fakultas Sains dan Matematika',
                'email'=> 'icikiwir@gmail.com',
            ],
        ];
        foreach ($KaprodiData as $data) {
            Kaprodi::create($data);
        }
    }
}
