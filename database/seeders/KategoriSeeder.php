<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori')->insert([
            [
                'id' => 1,
                'jenis_kategori_id' => 1,
                'nama' => 'Pemuda',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'jenis_kategori_id' => 2,
                'nama' => 'Remaja',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'jenis_kategori_id' => 3,
                'nama' => 'Dewasa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'jenis_kategori_id' => 1,
                'nama' => 'Lansia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'jenis_kategori_id' => 2,
                'nama' => 'Remaja Lansia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'jenis_kategori_id' => 3,
                'nama' => 'Dewasa Lansia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'jenis_kategori_id' => 1,
                'nama' => 'Pemuda Lansia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'jenis_kategori_id' => 2,
                'nama' => 'Remaja Lansia',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
