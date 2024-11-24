<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use App\Models\ProgramStudi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProgramStudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Program studi untuk Fakultas Teknik
        ProgramStudi::create([
            'nama_program_studi' => 'Teknik Informatika',
            'fakultas_id' => 1,
        ]);

        ProgramStudi::create([
            'nama_program_studi' => 'Teknik Sipil',
            'fakultas_id' => 1,
        ]);

        // Program studi untuk Fakultas Kedokteran
        ProgramStudi::create([
            'nama_program_studi' => 'Kedokteran Umum',
            'fakultas_id' => 2,
        ]);
    }
}
