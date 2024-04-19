<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FaktorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faktor')->insert([
            'jabatan_id' => 1,
            'nama_faktor' => 'Kedisiplinan',
            'value' => 5,
        ]);
        DB::table('faktor')->insert([
            'jabatan_id' => 1,
            'nama_faktor' => 'Kerukunan',
            'value' => 4,
        ]);
    }
}
