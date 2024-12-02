<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $DosenData = [
            [
                'nip' => '2502823139',
                'nama' => 'Lee Dogyu',
                'email'=> 'cintasejatimskim@gmail.com',
                'fakultas' => 'Fakultas Ilmu Sosial dan Ilmu Politik',
                'jurusan' => 'Teknik Kimia',
                
            ],
            [
                'nip' => '2502523158',
                'nama' => 'Choi Dongsoo',
                'email'=> 'buntunk@gmail.com',
                'fakultas' => 'Fakultas Hukum',
                'jurusan' => 'Hukum',
                
            ],
            [
                'nip' => '2502523122',
                'nama' => 'Selina Kyle',
                'email'=> 'ketwomen@gmail.com',
                'fakultas' => 'Fakultas Ekonomi dan Bisnis',
                'jurusan' => 'Manajemen',
            ],
        ];
        foreach ($DosenData as $data){
            Dosen::create($data);
        }
    }
}
