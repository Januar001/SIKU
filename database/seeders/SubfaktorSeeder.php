<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubfaktorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_faktor')->insert([
            'faktor_id' => 1,
            'nama_sub_faktor' => 'Sangat Disiplin',
            'value' => 8,
        ]);
        DB::table('sub_faktor')->insert([
            'faktor_id' => 1,
            'nama_sub_faktor' => 'Lumayan Disiplin',
            'value' => 5,
        ]);
        DB::table('sub_faktor')->insert([
            'faktor_id' => 1,
            'nama_sub_faktor' => 'Agak kurang Disiplin',
            'value' => 3,
        ]);
        DB::table('sub_faktor')->insert([
            'faktor_id' => 1,
            'nama_sub_faktor' => 'Sangat kurang Disiplin',
            'value' => 1,
        ]);
    }
}
