<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JadwalIbadah extends Model
{
    use SoftDeletes;

    protected $table = 'jadwal_ibadah';
    protected $fillable = [
        'nama_ibadah',
        'hari',
        'jam_mulai',
        'jam_selesai',
        'lokasi',
        'pengulangan',
        'deskripsi',
        'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
