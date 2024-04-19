<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubjabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_jabatan')->insert([
            'jabatan_id' => 1,
            'nama_sub_jabatan' => 'Audit Internal',
            'value' => 3,
        ]);
        DB::table('sub_jabatan')->insert([
            'jabatan_id' => 1,
            'nama_sub_jabatan' => 'PE Kepatuhan',
            'value' => 3,
        ]);
        DB::table('sub_jabatan')->insert([
            'jabatan_id' => 1,
            'nama_sub_jabatan' => 'Kabag Kredit',
            'value' => 3,
        ]);
        DB::table('sub_jabatan')->insert([
            'jabatan_id' => 1,
            'nama_sub_jabatan' => 'Kabag Operasional',
            'value' => 3,
        ]);
        DB::table('sub_jabatan')->insert([
            'jabatan_id' => 2,
            'nama_sub_jabatan' => 'Accounting',
            'value' => 3,
        ]);
        DB::table('sub_jabatan')->insert([
            'jabatan_id' => 2,
            'nama_sub_jabatan' => 'Teller',
            'value' => 3,
        ]);
        DB::table('sub_jabatan')->insert([
            'jabatan_id' => 2,
            'nama_sub_jabatan' => 'Admin Dana',
            'value' => 3,
        ]);
        DB::table('sub_jabatan')->insert([
            'jabatan_id' => 2,
            'nama_sub_jabatan' => 'Admin Kredit',
            'value' => 3,
        ]);
        DB::table('sub_jabatan')->insert([
            'jabatan_id' => 2,
            'nama_sub_jabatan' => 'Remidial',
            'value' => 3,
        ]);
        DB::table('sub_jabatan')->insert([
            'jabatan_id' => 2,
            'nama_sub_jabatan' => 'IT',
            'value' => 3,
        ]);
        DB::table('sub_jabatan')->insert([
            'jabatan_id' => 3,
            'nama_sub_jabatan' => 'Security',
            'value' => 3,
        ]);
        DB::table('sub_jabatan')->insert([
            'jabatan_id' => 3,
            'nama_sub_jabatan' => 'Driver',
            'value' => 3,
        ]);
        DB::table('sub_jabatan')->insert([
            'jabatan_id' => 3,
            'nama_sub_jabatan' => 'Bagian Umum',
            'value' => 3,
        ]);
        DB::table('sub_jabatan')->insert([
            'jabatan_id' => 4,
            'nama_sub_jabatan' => 'Account Officer',
            'value' => 3,
        ]);
    }
}
