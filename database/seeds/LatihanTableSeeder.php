<?php

use Illuminate\Database\Seeder;
use App\Latihan;

class LatihanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Latihan::create([
            'jenis_latihan_id'=>1,
            'nama_latihan'=>'Seluruh Badan Pemula',
            'video'=>'https://www.youtube.com/embed/77rr_rNvBhE',
            'min'=>0,
            'max'=>200,
            'gambar'=>'image/AllBody1.jpg',
        ]); 

        Latihan::create([
            'jenis_latihan_id'=>1,
            'nama_latihan'=>'Seluruh Badan Amatir',
            'video'=>'https://www.youtube.com/embed/OL_3y8zDPOs',
            'min'=>201,
            'max'=>400,
            'gambar'=>'image/AllBody2.jpeg',
        ]); 
       
        Latihan::create([
            'jenis_latihan_id'=>1,
            'nama_latihan'=>'Seluruh Badan Professional',
            'video'=>'https://www.youtube.com/embed/WTqrBmCz2R4',
            'min'=>401,
            'max'=>600,
            'gambar'=>'image/AllBody3.jpg',
        ]); 

        Latihan::create([
            'jenis_latihan_id'=>2,
            'nama_latihan'=>'Otot Dada',
            'video'=>'https://www.youtube.com/embed/AuVBuW_FuHY',
            'min'=>0,
            'max'=>200,
            'gambar'=>'image/Dada.jpg',
        ]); 

        Latihan::create([
            'jenis_latihan_id'=>2,
            'nama_latihan'=>'Otot Punggung',
            'video'=>'https://www.youtube.com/embed/JroaX-M8qjA',
            'min'=>201,
            'max'=>400,
            'gambar'=>'image/Punggung.jpg',
        ]); 

        Latihan::create([
            'jenis_latihan_id'=>2,
            'nama_latihan'=>'Otot Perut',
            'video'=>'https://www.youtube.com/embed/s8PKTd_lBH8',
            'min'=>401,
            'max'=>600,
            'gambar'=>'image/Perut.png',
        ]); 


        Latihan::create([
            'jenis_latihan_id'=>3,
            'nama_latihan'=>'Otot Kaki',
            'video'=>'https://www.youtube.com/embed/m5WgAb3CJkc',
            'min'=>0,
            'max'=>200,
            'gambar'=>'image/Kaki.jpg',
        ]); 

        Latihan::create([
            'jenis_latihan_id'=>3,
            'nama_latihan'=>'Otot paha',
            'video'=>'https://www.youtube.com/embed/H_BuN4Pw5pY',
            'min'=>201,
            'max'=>400,
            'gambar'=>'image/Paha.jpg',
        ]); 

        Latihan::create([
            'jenis_latihan_id'=>3,
            'nama_latihan'=>'Otot Bokong',
            'video'=>'https://www.youtube.com/embed/qH0L2ZK2qPY&t=17s',
            'min'=>401,
            'max'=>600,
            'gambar'=>'image/Bokong.jpg',
        ]); 
    }
}
