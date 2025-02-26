<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kegiatan extends Model
{
    use SoftDeletes;

    protected $table = 'kegiatan';

    protected $fillable = [
        'jenis_kegiatan_id',
        'kategori_id',
        'judul',
        'deskripsi',
        'tanggal_mulai',
        'tanggal_selesai',
        'lokasi',
        'created_at',
        'updated_at',
    ];

    public function jenis_kegiatan()
    {
        return $this->belongsTo(JenisKegiatan::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function galeri()
    {
        return $this->hasMany(Galeri::class);
    }
}
