<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        DB::table('artikel')->insert([
            [
                'judul' => 'Artikel 1',
                'isi' => $faker->text(100),
                'gambar' => 'https://placehold.co/400x300',
                'kategori_id' => 1,
                'user_id' => 1,
                'tanggal_publish' => now(),
            ],
            [
                'judul' => 'Artikel 2',
                'isi' => $faker->text(100),
                'gambar' => 'https://placehold.co/400x300',
                'kategori_id' => 2,
                'user_id' => 2,
                'tanggal_publish' => now(),
            ],
            [
                'judul' => 'Artikel 3',
                'isi' => $faker->text(100),
                'gambar' => 'https://placehold.co/400x300',
                'kategori_id' => 3,
                'user_id' => 3,
                'tanggal_publish' => now(),
            ],
        ]);
    }
}
