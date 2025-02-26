<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JenisKategori extends Model
{
    use SoftDeletes;

    protected $table = 'jenis_kategori';
    protected $fillable = [
        'nama',
    ];

    public function kategori()
    {
        return $this->hasMany(Kategori::class);
    }
}
