<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrangTua extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'alamat'
    ];
    public function user()
{
    return $this->belongsTo(User::class);
}

public function balitas()
{
    return $this->hasMany(Balita::class);
}
}