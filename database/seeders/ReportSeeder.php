<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('report')->insert([
            'user_id' => 2,
            'latitude' => '-7.415432',
            'longitude' => '112.718708',
            'photo' => 'photo.jpg',
            'action' => 'Kunjungan',
            'keterangan' => 'mengunjungi nasabah KUA Buduran',
            'created_at' => now(),
        ]);
        DB::table('report')->insert([
            'user_id' => 2,
            'latitude' => '-7.4199567',
            'longitude' => '112.7216982',
            'photo' => 'photo.jpg',
            'action' => 'Kunjungan',
            'keterangan' => 'mengunjungi nasabah',
            'created_at' => Carbon::now()->addHour(2),
        ]);
        DB::table('report')->insert([
            'user_id' => 2,
            'latitude' => '-7.424115',
            'longitude' => '112.717301',
            'photo' => 'photo.jpg',
            'action' => 'Kunjungan',
            'keterangan' => 'mengunjungi nasabah',
            'created_at' => Carbon::now()->addHour(4),
        ]);
        DB::table('report')->insert([
            'user_id' => 2,
            'latitude' => '-7.419671',
            'longitude' => '112.697336',
            'photo' => 'photo.jpg',
            'action' => 'Kunjungan',
            'keterangan' => 'mengunjungi nasabah',
            'created_at' => Carbon::now()->addHour(4),
        ]);
    }
}
