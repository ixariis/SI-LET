<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Akademik;

class AkademikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $AkademikData = [
            [
                'nama' => 'Yamazaki Shintaro',
                'nip' => '2502821099',
                'fakultas' => 'Fakultas Teknik',
                'email'=> 'peraturan@gmail.com',
            ],
            [
                'nama' => 'Ras Al-Ghul',
                'nip' => '2502221098',
                'fakultas' => 'Fakultas Teknik',
                'email'=> 'hidupabadi@gmail.com',
            ],
            [
                'nama' => 'Slade Wilson',
                'nip' => '2502721078',
                'fakultas' => 'Fakultas Teknik',
                'email'=> 'betterversionofdeadpool@gmail.com',
            ],
            
        ];
        foreach ($AkademikData as $data) {
            Akademik::create($data); // Menyimpan data ke database
        }
    }
}
