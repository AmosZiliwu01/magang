<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Kategori extends Model
{
    use SoftDeletes;

    protected $table = 'kategori';

    protected $fillable = [
        'nama',
        'jenis_kategori_id',
    ];

    public function jenis_kategori()
    {
        return $this->belongsTo(JenisKategori::class);
    }

    public function kegiatan()
    {
        return $this->hasMany(Kegiatan::class);
    }

    public function berita()
    {
        return $this->hasMany(Berita::class);
    }

    public function artikel()
    {
        return $this->hasMany(Artikel::class);
    }
}
