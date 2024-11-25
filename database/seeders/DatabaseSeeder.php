<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MahasiswaSeeder::class,
            AkademikSeeder::class,
            DekanSeeder::class,
            DosenSeeder::class,
            KaprodiSeeder::class,
            IrsSeeder::class,
            JadwalSeeder::class,
            MatakuliahSeeder::class,
            KhsSeeder::class,
            RuangSeeder::class,
        ]); 
    }
}
