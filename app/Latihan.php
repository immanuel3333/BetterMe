<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Latihan extends Model
{
    protected $table = 'latihans';
    protected $fillable = [
        'id','jenis_latihan_id','nama_latihan','video','min','max','gambar',
    ];

    public function jenis_latihan()
    {
        return $this->belongsTo('App\Jenis_latihan');
    }
}
