<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'sulaiman',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'sulastri',
            'role' => 'ao',
            'email' => 'sulastri@gmail.com',
            'password' => Hash::make('123456'),
            'created_at' => now(),
        ]);
    }
}
