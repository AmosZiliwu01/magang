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
                'gambar' => 'https://placehold.co/400x300',
                'urutan' => 1,
                'user_id' => 1,
            ],
            [
                'nama' => 'Pengurus 2',
                'jabatan' => 'Wakil Ketua',
                'deskripsi' => 'Deskripsi pengurus 2',
                'gambar' => 'https://placehold.co/400x300',
                'urutan' => 2,
                'user_id' => 2,
            ],
            [
                'nama' => 'Pengurus 3',
                'jabatan' => 'Sekretaris',
                'deskripsi' => 'Deskripsi pengurus 3',
                'gambar' => 'https://placehold.co/400x300',
                'urutan' => 3,
                'user_id' => 3,
            ],
        ]);
    }
}
