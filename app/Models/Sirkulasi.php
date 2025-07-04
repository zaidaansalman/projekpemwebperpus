<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sirkulasi extends Model
{
    use HasFactory;
    protected $table = 'sirkulasis';
    protected $fillable = [
        'buku_id',
        'anggota_id',
        'tgl_pinjam',
        'jatuh_tempo',
        'tgl_kembali',
        'denda'
    ];

    public function buku()
    {
        return $this->belongsTo(\App\Models\Buku::class, 'buku_id');
    }
    public function anggota()
    {
        return $this->belongsTo(\App\Models\Anggota::class, 'anggota_id');
    }
}
