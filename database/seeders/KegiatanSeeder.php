<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KegiatanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kegiatan')->insert([
            [
                'jenis_kegiatan_id' => 1,
                'judul' => 'Ibadah Pemuda',
                'deskripsi' => 'Deskripsi kegiatan pemuda',
                'tanggal_mulai' => '2025-02-22 09:07:45',
                'tanggal_selesai' => '2025-02-22 09:07:45',
                'lokasi' => 'Lokasi 1',
                'kategori_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis_kegiatan_id' => 2,
                'judul' => 'Ibadah Remaja',
                'deskripsi' => 'Deskripsi kegiatan remaja',
                'tanggal_mulai' => '2025-02-22 09:07:45',
                'tanggal_selesai' => '2025-02-22 09:07:45',
                'lokasi' => 'Lokasi 2',
                'kategori_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis_kegiatan_id' => 3,
                'judul' => 'Ibadah Dewasa',
                'deskripsi' => 'Deskripsi kegiatan dewasa',
                'tanggal_mulai' => '2025-02-22 09:07:45',
                'tanggal_selesai' => '2025-02-22 09:07:45',
                'lokasi' => 'Lokasi 3',
                'kategori_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
