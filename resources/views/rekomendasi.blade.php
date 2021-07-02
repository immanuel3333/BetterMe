@include('header')
 
<div class="container">
    <div class="row col-md-6 justify-content-center"style="padding-top:150px">
        <div class="col md ">
        Jumlah Kalori : 
        </div>
        <div class="col-md">
        @if($kalori != null ) 
        {{ $kalori->jumlah_kalori }}
        </div>
            <a href="{{url('/rekomendasi')}}/{{ $kalori->id }}/edit" class="btn btn-warning btn-sm mr-2">Edit</a>
            <a href="{{url('/rekomendasi')}}/{{ $kalori->id }}/delete" class="btn btn-danger btn-sm">Delete</a>     
        @else  
        <a href="{{url('/home/create')}}" class="btn btn-warning btn-sm mr-2">Edit</a>
        <a href="#" class="btn btn-danger btn-sm">Delete</a>   
        @endif
    </div>

@isset($latihan)
<section id="latihan" class="latihan bg-light">
    <div class="container">
            <div class="card-group">
                <div class="row col-md-12 justify-content-center pb-4">  
                    @foreach($latihan as $latihan) 
                                <div class="col-md-4">    
                                    <div class="card" style="height:350px">
                                        <img src="{{ asset($latihan->gambar)}}"class="img-thumbnail width:300px;">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$latihan->nama_latihan}}</h5>                           
                                                <a href="{{url('/Exercise')}}/{{$latihan->id}}" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                    </div>
                                </div>
                    @endforeach
                </div>
            </div>            
    </div>
</section>
@endisset

</div>


@include('footer')