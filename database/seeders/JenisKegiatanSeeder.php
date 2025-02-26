<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_kegiatan')->insert([
            [
                'nama' => 'Pemuda',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Remaja',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dewasa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
