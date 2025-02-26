<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galeri')->insert([
            [
                'judul' => 'Galeri 1',
                'deskripsi' => 'Deskripsi galeri 1',
                'gambar' => 'https://placehold.co/400x300',
                'kategori_id' => 1,
                'user_id' => 1,
            ],
            [
                'judul' => 'Galeri 2',
                'deskripsi' => 'Deskripsi galeri 2',
                'gambar' => 'https://placehold.co/400x300',
                'kategori_id' => 2,
                'user_id' => 2,
            ],
            [
                'judul' => 'Galeri 3',
                'deskripsi' => 'Deskripsi galeri 3',
                'gambar' => 'https://placehold.co/400x300',
                'kategori_id' => 3,
                'user_id' => 3,
            ],
            [
                'judul' => 'Galeri 4',
                'deskripsi' => 'Deskripsi galeri 4',
                'gambar' => 'https://placehold.co/400x300',
                'kategori_id' => 4,
                'user_id' => 4,
            ],
            [
                'judul' => 'Galeri 5',
                'deskripsi' => 'Deskripsi galeri 5',
                'gambar' => 'https://placehold.co/400x300',
                'kategori_id' => 5,
                'user_id' => 5,
            ],
            [
                'judul' => 'Galeri 6',
                'deskripsi' => 'Deskripsi galeri 6',
                'gambar' => 'https://placehold.co/400x300',
                'kategori_id' => 6,
                'user_id' => 6,
            ],
            [
                'judul' => 'Galeri 7',
                'deskripsi' => 'Deskripsi galeri 7',
                'gambar' => 'https://placehold.co/400x300',
                'kategori_id' => 7,
                'user_id' => 7,
            ],
            [
                'judul' => 'Galeri 8',
                'deskripsi' => 'Deskripsi galeri 8',
                'gambar' => 'https://placehold.co/400x300',
                'kategori_id' => 8,
                'user_id' => 8,
            ],
        ]);
    }
}
