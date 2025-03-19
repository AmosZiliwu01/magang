<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengurusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengurus')->insert([
            [
                'nama' => 'Pengurus 1',
                'jabatan' => 'Ketua',
                'deskripsi' => 'Deskripsi pengurus 1',
                'gambar' => 'test.png',
                'urutan' => '1',
                'user_id' => 1,
            ],
            [
                'nama' => 'Pengurus 2',
                'jabatan' => 'Wakil Ketua',
                'deskripsi' => 'Deskripsi pengurus 2',
                'gambar' => 'test.png',
                'urutan' => '2',
                'user_id' => 2,
            ],
            [
                'nama' => 'Pengurus 3',
                'jabatan' => 'Sekretaris',
                'deskripsi' => 'Deskripsi pengurus 3',
                'gambar' => 'test.png',
                'urutan' => '3',
                'user_id' => 3,
            ],
            [
                'nama' => 'Pengurus 4',
                'jabatan' => 'Bendahara',
                'deskripsi' => 'Deskripsi pengurus 4',
                'gambar' => 'test.png',
                'urutan' => '4',
                'user_id' => 4,
            ],
            [
                'nama' => 'Pengurus 5',
                'jabatan' => 'Korlap',
                'deskripsi' => 'Deskripsi pengurus 5',
                'gambar' => 'test.png',
                'urutan' => '5',
                'user_id' => 5,
            ],
            [
                'nama' => 'Pengurus 6',
                'jabatan' => 'Seksi Kegiatan',
                'deskripsi' => 'Deskripsi pengurus 6',
                'gambar' => 'test.png',
                'urutan' => '6',
                'user_id' => 6,
            ],
            [
                'nama' => 'Pengurus 7',
                'jabatan' => 'Seksi Humas',
                'deskripsi' => 'Deskripsi pengurus 7',
                'gambar' => 'test.png',
                'urutan' => '7',
                'user_id' => 7,
            ],
            [
                'nama' => 'Pengurus 8',
                'jabatan' => 'Seksi Kesehatan',
                'deskripsi' => 'Deskripsi pengurus 8',
                'gambar' => 'test.png',
                'urutan' => '8',
                'user_id' => 8,
            ],
        ]);
    }
}
