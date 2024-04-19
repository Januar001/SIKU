<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pegawai')->insert([
            'nama' => 'Mustofah Januar',
            'alamat' => 'Pondok Sidokare Indah, RT.44 RW.12',
            'status_pegawai_id' => 1,
            'sub_jabatan_id' => 1,
            'pendidikan_id' => 2,
        ]);
        DB::table('pegawai')->insert([
            'nama' => 'Genjie',
            'alamat' => 'Jl. Tokyo 26 Sidoarjo',
            'status_pegawai_id' => 2,
            'sub_jabatan_id' => 3,
            'pendidikan_id' => 3,
        ]);
    }
}
