<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StandarWhoSeeder extends Seeder
{
    public function run()
    {
        DB::table('standar_who_tbus')->insert([

            // LAKI-LAKI
            ['jenis_kelamin'=>'L','umur_bulan'=>0,'minus_3sd'=>44.2,'minus_2sd'=>46.1,'plus_2sd'=>53.7],
            ['jenis_kelamin'=>'L','umur_bulan'=>1,'minus_3sd'=>48.9,'minus_2sd'=>50.8,'plus_2sd'=>58.6],
            ['jenis_kelamin'=>'L','umur_bulan'=>2,'minus_3sd'=>52.4,'minus_2sd'=>54.4,'plus_2sd'=>62.4],
            ['jenis_kelamin'=>'L','umur_bulan'=>3,'minus_3sd'=>55.3,'minus_2sd'=>57.3,'plus_2sd'=>65.5],
            ['jenis_kelamin'=>'L','umur_bulan'=>4,'minus_3sd'=>57.6,'minus_2sd'=>59.7,'plus_2sd'=>68.0],
            ['jenis_kelamin'=>'L','umur_bulan'=>5,'minus_3sd'=>59.6,'minus_2sd'=>61.7,'plus_2sd'=>70.1],
            ['jenis_kelamin'=>'L','umur_bulan'=>6,'minus_3sd'=>61.2,'minus_2sd'=>63.3,'plus_2sd'=>71.9],
            ['jenis_kelamin'=>'L','umur_bulan'=>7,'minus_3sd'=>62.7,'minus_2sd'=>64.8,'plus_2sd'=>73.5],
            ['jenis_kelamin'=>'L','umur_bulan'=>8,'minus_3sd'=>64.0,'minus_2sd'=>66.2,'plus_2sd'=>75.0],
            ['jenis_kelamin'=>'L','umur_bulan'=>9,'minus_3sd'=>65.2,'minus_2sd'=>67.5,'plus_2sd'=>76.5],
            ['jenis_kelamin'=>'L','umur_bulan'=>10,'minus_3sd'=>66.4,'minus_2sd'=>68.7,'plus_2sd'=>77.9],
            ['jenis_kelamin'=>'L','umur_bulan'=>11,'minus_3sd'=>67.6,'minus_2sd'=>69.9,'plus_2sd'=>79.2],
            ['jenis_kelamin'=>'L','umur_bulan'=>12,'minus_3sd'=>68.6,'minus_2sd'=>71.0,'plus_2sd'=>80.5],

            // PEREMPUAN
            ['jenis_kelamin'=>'P','umur_bulan'=>0,'minus_3sd'=>43.6,'minus_2sd'=>45.4,'plus_2sd'=>52.9],
            ['jenis_kelamin'=>'P','umur_bulan'=>1,'minus_3sd'=>47.8,'minus_2sd'=>49.8,'plus_2sd'=>57.6],
            ['jenis_kelamin'=>'P','umur_bulan'=>2,'minus_3sd'=>51.0,'minus_2sd'=>53.0,'plus_2sd'=>60.9],
            ['jenis_kelamin'=>'P','umur_bulan'=>3,'minus_3sd'=>53.5,'minus_2sd'=>55.6,'plus_2sd'=>63.8],
            ['jenis_kelamin'=>'P','umur_bulan'=>4,'minus_3sd'=>55.6,'minus_2sd'=>57.8,'plus_2sd'=>66.2],
            ['jenis_kelamin'=>'P','umur_bulan'=>5,'minus_3sd'=>57.4,'minus_2sd'=>59.6,'plus_2sd'=>68.2],
            ['jenis_kelamin'=>'P','umur_bulan'=>6,'minus_3sd'=>58.9,'minus_2sd'=>61.2,'plus_2sd'=>70.0],
            ['jenis_kelamin'=>'P','umur_bulan'=>7,'minus_3sd'=>60.3,'minus_2sd'=>62.7,'plus_2sd'=>71.6],
            ['jenis_kelamin'=>'P','umur_bulan'=>8,'minus_3sd'=>61.7,'minus_2sd'=>64.0,'plus_2sd'=>73.2],
            ['jenis_kelamin'=>'P','umur_bulan'=>9,'minus_3sd'=>62.9,'minus_2sd'=>65.3,'plus_2sd'=>74.7],
            ['jenis_kelamin'=>'P','umur_bulan'=>10,'minus_3sd'=>64.1,'minus_2sd'=>66.5,'plus_2sd'=>76.1],
            ['jenis_kelamin'=>'P','umur_bulan'=>11,'minus_3sd'=>65.2,'minus_2sd'=>67.7,'plus_2sd'=>77.5],
            ['jenis_kelamin'=>'P','umur_bulan'=>12,'minus_3sd'=>66.3,'minus_2sd'=>68.9,'plus_2sd'=>78.9]

        ]);
    }
}