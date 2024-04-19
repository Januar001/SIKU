<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jabatan')->insert([
            'nama_jabatan' => 'PE / KABAG',
            'value' => 4,
        ]);
        DB::table('jabatan')->insert([
            'nama_jabatan' => 'Operasional',
            'value' => 3,
        ]);
        DB::table('jabatan')->insert([
            'nama_jabatan' => 'Umum',
            'value' => 2,
        ]);
        DB::table('jabatan')->insert([
            'nama_jabatan' => 'Account Officer',
            'value' => 3,
        ]);
    }
}
