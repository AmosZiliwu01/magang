<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengurus extends Model
{
    use SoftDeletes;

    protected $table = 'pengurus';
    protected $fillable = [
        'nama',
        'jabatan',
        'deskripsi',
        'gambar',
        'urutan',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
