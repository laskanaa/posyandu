<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StandarWhoSeeder extends Seeder
{
    public function run(): void
    {
        // CONTOH DATA AWAL (0–5 bulan dulu untuk test)
        $dataPBU = [
            // Laki-laki 0–5 bulan (contoh awal)
            ['jenis_kelamin'=>'L','umur_bulan'=>0,'minus_3sd'=>44.2,'minus_2sd'=>46.1,'median'=>49.9,'plus_2sd'=>53.7,'plus_3sd'=>55.6],
            ['jenis_kelamin'=>'L','umur_bulan'=>1,'minus_3sd'=>48.9,'minus_2sd'=>50.8,'median'=>54.7,'plus_2sd'=>58.6,'plus_3sd'=>60.6],
        ];

        DB::table('standar_who_pbu')->insert($dataPBU);

        $dataTBU = [
    [
        'jenis_kelamin' => 'L',
        'umur_bulan' => 0,
        'minus_3sd' => 44.2,
        'minus_2sd' => 46.1,
        'median' => 49.9,
        'plus_2sd' => 53.7,
        'plus_3sd' => 55.6,
    ],
    [
        'jenis_kelamin' => 'L',
        'umur_bulan' => 1,
        'minus_3sd' => 48.9,
        'minus_2sd' => 50.8,
        'median' => 54.7,
        'plus_2sd' => 58.6,
        'plus_3sd' => 60.6,
    ],
];

DB::table('standar_who_tbu')->insert($dataTBU);
    }
}