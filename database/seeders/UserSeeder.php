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
                'name' => 'Admin1',
                'email' => 'admin1@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Admin2',
                'email' => 'admin2@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pengurus1',
                'email' => 'pengurus1@example.com',
                'password' => Hash::make('password'),
                'role' => 'pengurus',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pengurus2',
                'email' => 'pengurus2@example.com',
                'password' => Hash::make('password'),
                'role' => 'pengurus',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Umat1',
                'email' => 'umat1@example.com',
                'password' => Hash::make('password'),
                'role' => 'umat',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Umat2',
                'email' => 'umat2@example.com',
                'password' => Hash::make('password'),
                'role' => 'umat',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Umat3',
                'email' => 'umat3@example.com',
                'password' => Hash::make('password'),
                'role' => 'umat',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Umat4',
                'email' => 'umat4@example.com',
                'password' => Hash::make('password'),
                'role' => 'umat',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
