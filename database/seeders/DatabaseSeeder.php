<?php

namespace Database\Seeders;

use App\Models\ProgramStudi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Panggil seeder lain jika diperlukan
        $this->call(RoleSeeder::class);
        $this->call(FakultasSeeder::class);
        $this->call(ProgramStudiSeeder::class);
        $this->call(MahasiswaSeeder::class);
        $this->call(DosKapSeeder::class);
        $this->call(AkademikSeeder::class);
    }
}
