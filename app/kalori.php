<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kalori extends Model
{
    protected $table = 'kaloris';
    protected $fillable = [
        'id','user_id','jumlah_kalori',
    ];

    public function user()
    {
        return $this->hasOne('App\User');
    }
}

