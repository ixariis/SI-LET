<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $DosenPData = [
            [
                'nip'=> '2502823139',
                'kodemk' => 'PAIK6102'
            ],
            [
                'nip' => '2502523158',
                'kodemk' => 'PAIK6105',
            ]
        ];
    }
}
