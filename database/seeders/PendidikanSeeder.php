<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pendidikan')->insert([
            'nama_pendidikan' => 'Strata Dua (S2)',
            'value' => 5,
        ]);
        DB::table('pendidikan')->insert([
            'nama_pendidikan' => 'Strata Satu (S1)',
            'value' => 4,
        ]);
        DB::table('pendidikan')->insert([
            'nama_pendidikan' => 'SMA / SMK',
            'value' => 3,
        ]);
        DB::table('pendidikan')->insert([
            'nama_pendidikan' => 'SD',
            'value' => 2,
        ]);
        DB::table('pendidikan')->insert([
            'nama_pendidikan' => 'Lainnya',
            'value' => 1,
        ]);
    }
}
