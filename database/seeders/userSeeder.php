<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        [
            'name'      => 'Zyan Mujaddid Alkanza',
            'email'     => 'zyan.mujaddid@gmail.com',
            'address'   => 'Puri Kencana'
        ],
        [
            'name'      => 'Azhari Nur Fauzi',
            'email'     => 'azhari.fauzi@gmail.com',
            'address'   => 'Pondok Timur Indah 2'
        ],
        [
            'name'      => 'Vickry Satria',
            'email'     => 'vickry.satria@gmail.com',
            'address'   => 'Pondok Timur Indah 2'
        ],
        [
            'name'      => 'Theo Laksono',
            'email'     => 'theo.laksono@gmail.com',
            'address'   => 'Pondok Timur Indah 2'
        ],
        [
            'name'      => 'Dani Kurniawan',
            'email'     => 'dani.kurniawan@gmail.com',
            'address'   => 'Pondok Timur Indah 2'
        ]
    ]);
    }
}
