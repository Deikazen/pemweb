<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::create([
            'nama' => 'Budi Santoso',
            'nim' => '12345678',
            'email' => 'budi@gmail.com',
            'jurusan' => '15',
            'dosen_id' => $dosen->id,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
