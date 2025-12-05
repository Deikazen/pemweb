<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dosen::create([
            'nama' => 'Dr. Anisa Putri',
            'nidn' => '11837',
            'email' => 'anisa@gmail.com',
            'alamat' => 'JL. Merdeka No. 10, Jakarta'
        ]);
    }
}
