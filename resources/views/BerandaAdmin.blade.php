@extends('layouts.template')
@section('content')

<section id="latihan" class="latihan bg-light">
    <div class="container">
            <div class="card-group">
                <div class="row col-md-12 justify-content-center" style="padding-bottom:50px">  
                    @foreach($latihan as $latihan) 
                                <div class="col-md-4">    
                                    <div class="card" style="height:350px">
                                        <img src="{{ asset($latihan->gambar)}}" class="img-thumbnail width:300px">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$latihan->nama_latihan}}</h5>                           
                                            </div>
                                    </div>
                                </div>
                    @endforeach
                </div>
            </div>      
    </div>
</section>
  	<script src="{{asset('js/jquery-3.5.1.min.js')}}" ></script>
@endsection