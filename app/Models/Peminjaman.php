<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    //
    protected $fillable = [
        'nama',
        'judul_buku',
        'lama_pinjam',
    ];
}
