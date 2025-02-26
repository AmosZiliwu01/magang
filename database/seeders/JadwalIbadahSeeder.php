<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class JadwalIbadahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        DB::table('jadwal_ibadah')->insert([
            [
                'nama_ibadah' => 'Ibadah Minggu',
                'hari' => 'Minggu',
                'jam_mulai' => '09:00:00',
                'jam_selesai' => '11:00:00',
                'lokasi' => 'Gereja',
                'pengulangan' => 'mingguan',
                'deskripsi' => $faker->text(100),
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_ibadah' => 'Ibadah Senin',
                'hari' => 'Senin',
                'jam_mulai' => '09:00:00',
                'jam_selesai' => '11:00:00',
                'lokasi' => 'Gereja',
                'pengulangan' => 'mingguan',
                'deskripsi' => $faker->text(100),
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_ibadah' => 'Ibadah Selasa',
                'hari' => 'Selasa',
                'jam_mulai' => '09:00:00',
                'jam_selesai' => '11:00:00',
                'lokasi' => 'Gereja',
                'pengulangan' => 'mingguan',
                'deskripsi' => $faker->text(100),
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
