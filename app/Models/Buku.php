<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{    
    use HasFactory;
    protected $table = 'buku';
    protected $fillable = [
        'judul_buku',
        'nama_pengarang',
        'nama_penerbit',
        'id_kategori'
    ];
}

