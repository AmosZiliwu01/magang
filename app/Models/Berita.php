<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Berita extends Model
{
    use SoftDeletes;

    protected $table = 'berita';
    protected $fillable = [
        'judul',
        'isi',
        'gambar',
        'kategori_id',
        'user_id',
        'tanggal_publish',
        'created_at',
        'updated_at',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
