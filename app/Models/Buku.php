<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'judul_buku',
        'pengarang',
        'penerbit',
        'th_terbit',
        'kategori', // use string kategori
        'cover',
    ];

    // No more kategori() relationship needed
}
