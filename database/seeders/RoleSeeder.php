<?php

namespace Database\Seeders;

use App\Models\Rolee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['nama_role' => 'mahasiswa', 'parent_id' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama_role' => 'akademik', 'parent_id' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama_role' => 'dosenBiasa', 'parent_id' => null, 'created_at' => now(), 'updated_at' => now()],
            ['nama_role' => 'doswal', 'parent_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['nama_role' => 'dekan', 'parent_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['nama_role' => 'kaprodi', 'parent_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
