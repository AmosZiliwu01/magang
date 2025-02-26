<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Umat',
                'email' => 'umat@example.com',
                'password' => Hash::make('password'),
                'role' => 'umat',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pengurus',
                'email' => 'pengurus@example.com',
                'password' => Hash::make('password'),
                'role' => 'pengurus',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pengunjung',
                'email' => 'pengunjung@example.com',
                'password' => Hash::make('password'),
                'role' => 'umat',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pengunjung',
                'email' => 'pengunjung2@example.com',
                'password' => Hash::make('password'),
                'role' => 'umat',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pengunjung',
                'email' => 'pengunjung3@example.com',
                'password' => Hash::make('password'),
                'role' => 'umat',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pengunjung',
                'email' => 'pengunjung4@example.com',
                'password' => Hash::make('password'),
                'role' => 'umat',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pengunjung',
                'email' => 'pengunjung5@example.com',
                'password' => Hash::make('password'),
                'role' => 'umat',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pengunjung',
                'email' => 'pengunjung6@example.com',
                'password' => Hash::make('password'),
                'role' => 'umat',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'umat',
                'email' => 'pengunjung7@example.com',
                'password' => Hash::make('password'),
                'role' => 'umat',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
