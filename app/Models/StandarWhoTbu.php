<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StandarWhoTbu extends Model
{
    protected $table = 'standar_who_tbu';

    protected $fillable = [
        'jenis_kelamin',
        'umur_bulan',
        'minus_3sd',
        'minus_2sd',
        'median',
        'plus_2sd',
        'plus_3sd'
    ];

    public $timestamps = false;
}