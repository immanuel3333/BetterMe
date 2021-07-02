<?php

use Illuminate\Database\Seeder;
use App\Jenis_latihan;

class JenisLatihanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jenis_latihan::insert([
            'nama_jenis_latihan'=>'All Body',
        ]);
        Jenis_latihan::insert([ 
            'nama_jenis_latihan'=>'Upper Body',
        ]);

        Jenis_latihan::insert([
            'nama_jenis_latihan'=>'Lower Body',
        ]); 

    }
}
