<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Berita::create(
            [
                'judul_berita' => 'Judul Pertama',
                'deskripsi_singkat' => 'Ini deskripsi singkat',
                'isi_berita' => 'Ini isi berita lengkap',
                'foto' => 'default.jpg',
            ],
            [
                'judul_berita' => 'Judul Kedua',
                'deskripsi_singkat' => 'Ini deskripsi singkat',
                'isi_berita' => 'Ini isi berita lengkap',
                'foto' => 'default2.jpg',
            ],
            [
                'judul_berita' => 'Judul Ketiga',
                'deskripsi_singkat' => 'Ini deskripsi singkat',
                'isi_berita' => 'Ini isi berita lengkap',
                'foto' => 'default3.jpg',
            ]
        );
    }
}
