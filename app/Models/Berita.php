<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'beritas';

    protected $fillable = [
        'judul_berita',
        'deskripsi_singkat',
        'isi_berita',
        'foto'

    ];
}
