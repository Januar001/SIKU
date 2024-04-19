<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatuspegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status_pegawai')->insert([
            'nama_status_pegawai' => 'Pegawai Tetap',
            'value' => 5,
        ]);
        DB::table('status_pegawai')->insert([
            'nama_status_pegawai' => 'Training',
            'value' => 8,
        ]);
    }
}
