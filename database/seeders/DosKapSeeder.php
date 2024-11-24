<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Dosen;
use App\Models\UserRole;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DosKapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data dosen
        $dosenData = [
            [
                'password' => bcrypt('123'),
                'nip' => '1234567890',
                'nama_lengkap' => 'Dr. Budi Hartono',
                'jenis_kelamin' => 'L',
                
            ],
            [
                'password' => bcrypt('123'),
                'nip' => '09876123',
                'nama_lengkap' => 'Prof. Siti Aminah',
                'jenis_kelamin' => 'P',
                
            ],
            [
                'password' => bcrypt('123'),
                'nip' => '123456',
                'nama_lengkap' => 'Prof. Rusdi',
                'jenis_kelamin' => 'P',
                
            ],
            [
                'password' => bcrypt('123'),
                'nip' => '0987654321',
                'nama_lengkap' => 'Prof. Amba',
                'jenis_kelamin' => 'P',
                
            ],
        ];

        // Membuat dosen dan menghubungkannya dengan user dan role
        foreach ($dosenData as $data) {
            // Membuat user untuk dosen
            // Mengambil dua kata pertama dari nama lengkap
            $nameParts = explode(' ', $data['nama_lengkap']);
            $emailName = strtolower($nameParts[0] . (isset($nameParts[1]) ? $nameParts[1] : ''));
            $email = $emailName . '@lecturer.com';

            $user = User::create([
                'name' => $data['nama_lengkap'],
                'email' => $email,
                'password' => $data['password'],
            ]);
            
            // Menambahkan rolee yang sudah ada berdasarkan rolee_id
            $dosenBiasaRole = Role::where('nama_role', 'dosenBiasa')->first();
            $kaprodiRole = Role::where('nama_role', 'kaprodi')->first();

            // Membuat role untuk user
            UserRole::create([
                'user_id' => $user->id,
                'role_id' => $dosenBiasaRole->id, 
            ]);
            UserRole::create([
                'user_id' => $user->id,
                'role_id' => $kaprodiRole->id, 
            ]);

            // Membuat dosen dan menghubungkannya dengan user
            Dosen::create([
                'user_id' => $user->id,
                'nip' => $data['nip'],
                'nama_lengkap' => $data['nama_lengkap'],
                'jenis_kelamin' => $data['jenis_kelamin'],
            ]);
        }
    }
}
