<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Yamazaki Shintaro',
                'email' => 'peraturan@gmail.com',
                'role' => 'akademik',
                'password' => bcrypt('omnyagun123')
            ],
            [
                'name' => 'Ras Al-Ghul',
                'email' => 'hidupabadi@gmail.com',
                'role' => 'akademik',
                'password' => bcrypt('abadi123')
            ],
            [
                'name' => 'Slade Wilson',
                'email' => 'betterversionofdeadpool@gmail.com',
                'role' => 'akademik',
                'password' => bcrypt('sakjose123')
            ],
            [
                'name' => 'Park Jonggun',
                'email' => 'marlong1@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('marlong123')
            ],
            [
                'name' => 'John Stewart',
                'email' => 'johngantenk1@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('okeh123')
            ],
            [
                'name' => 'Kim Gimyung',
                'email' => 'romantisme@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('bigdeal123s')
            ],
            [
                'name' => 'Choi Dongsoo',
                'email' => 'buntunk@gmail.com',
                'role' => 'dosen',
                'password' => bcrypt('buntung123')
            ],
            [
                'name' => 'Lee Dogyu',
                'email' => 'cintasejatimskim@gmail.com',
                'role' => 'dosen',
                'password' => bcrypt('kim123')
            ],
            [
                'name' => 'Selina Kyle',
                'email' => 'ketwomen@gmail.com',
                'role' => 'dosen',
                'password' => bcrypt('bojoku123')
            ],
            [
                'name' => 'Yamazaki Shingen',
                'email' => 'bapaknyaGun@gmail.com',
                'role' => 'dekan',
                'password' => bcrypt('bapakgun123')
            ],
            [
                'name' => 'Alfred Pennyworth',
                'email' => 'urloyalguy@gmail.com',
                'role' => 'dekan',
                'password' => bcrypt('eyang123')
            ],
            [
                'name' => 'Kakashi Hatake',
                'email' => 'kangcopas@gmail.com',
                'role' => 'dekan',
                'password' => bcrypt('copas123')
            ],
            [
                'name' => 'Ucup',
                'email' => 'ucupgimang@gmail.com',
                'role' => 'kaprodi',
                'password' => bcrypt('ucup123')
            ],
            [
                'name' => 'Agus Kopling',
                'email' => 'aselole@gmail.com',
                'role' => 'kaprodi',
                'password' => bcrypt('agus123')
            ],
            [
                'name' => 'Farhan Kebab',
                'email' => 'icikiwir@gmail.com',
                'role' => 'kaprodi',
                'password' => bcrypt('kebab123')
            ],
            
        ];
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}