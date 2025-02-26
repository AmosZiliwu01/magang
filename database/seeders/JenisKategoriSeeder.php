<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_kategori')->insert([
            [
                'nama' => 'Ibadah Pemuda',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ibadah Remaja',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ibadah Dewasa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
