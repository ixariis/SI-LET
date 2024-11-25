<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $MahasiswaData = [
            [
                'nama' => 'John Stewart',
                'nim'  => '2406012143109',
                'jurusan' => 'S1 Informatika',
                'email' => 'johngantenk1@gmail.com',
                'status_M' => 'Aktif',
                'IPK' => 3.4,
                'sks' => 21,
                'total_sks' => 78,
                'semester' => 5,
                'IPS' => 3.1, 
            ],
            [
                'nama' => 'Park Jonggun',
                'nim'  => '2404019143198',
                'jurusan' => 'S1 Informatika',
                'email' => 'marlong1@gmail.com',
                'status_M' => 'Aktif',
                'IPK' => 3.6,
                'sks' => 24,
                'total_sks' => 88,
                'semester' => 5,
                'IPS' => 3.6, 
            ],
            [
                'nama' => 'Kim Gimyung',
                'nim'  => '24040122401982',
                'jurusan' => 'S1 Informatika',
                'email' => 'romantisme@gmail.com',
                'status_M' => 'Aktif',
                'IPK' => 2.9,
                'sks' => 20,
                'total_sks' => 87,
                'semester' => 5,
                'IPS' => 2.88, 
            ]
        ];
        foreach ($MahasiswaData as $data) {
            Mahasiswa::create($data);
        }
    }
}
