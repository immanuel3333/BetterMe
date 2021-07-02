<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis_latihan extends Model
{
    protected $table = 'jenis_latihans';
    protected $fillable = [
        'id', 'nama_jenis_latihan',
    ];

    public function latihan()
    {
        return $this->hasMany('App\Latihan');
    }
}
