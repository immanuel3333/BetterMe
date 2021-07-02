@extends('header')

<section id="langkah" class="langkah" style="padding-top:100px">
    <div class="row">
        <div class="col md">
        <h1 class="text-center">{{$latihan->nama_latihan}}</h1>
        </div>
    </div>
    <div class="row col-md-6 mx-auto d-block">
        
        <iframe width="860" height="520" src="{{ asset($latihan->video)}}"
        franeborder="0" allowfullscreen></iframe>
       <!-- 
        <video controls width="840px" class="pt-2 mb-4">
            <source src="{{ asset($latihan->video)}}" type="video/mp4">
        </video>
        -->
    </div>
</section>
@extends('footer')
