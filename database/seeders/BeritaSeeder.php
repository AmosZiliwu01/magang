<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        DB::table('berita')->insert([
            [
                'judul' => 'Berita 1',
                'isi' => $faker->paragraph,
                'gambar' => 'https://placehold.co/400x300',
                'kategori_id' => 1,
                'user_id' => 1,
                'tanggal_publish' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Berita 2',
                'isi' => $faker->paragraph,
                'gambar' => 'https://placehold.co/400x300',
                'kategori_id' => 2,
                'user_id' => 2,
                'tanggal_publish' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Berita 3',
                'isi' => $faker->paragraph,
                'gambar' => 'https://placehold.co/400x300',
                'kategori_id' => 3,
                'user_id' => 3,
                'tanggal_publish' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
