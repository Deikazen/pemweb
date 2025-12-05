<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable = [
        'nama',
        'nim',
        'jurusan',
        'email',
        'alamat',
        'dosen_id',
    ];

    public $timestamps = false;
    public function dosen()
    {
        // Parameter ke-2 ('dosen_id') adalah nama kolom di tabel 'mahasiswa' 
        // yang menyimpan ID dosen. Sesuaikan dengan nama kolom di database kamu.
        return $this->belongsTo(Dosen::class, 'dosen_id');
    }
}
