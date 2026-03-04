<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Balita extends Model
{
protected $fillable = [
    'nama',
    'nik',
    'tempat_lahir',
    'tanggal_lahir',
    'nama_ibu',
    'jenis_kelamin',
    'kondisi',
    'user_id'
];

public function penimbangans()
{
    return $this->hasMany(Penimbangan::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}
}