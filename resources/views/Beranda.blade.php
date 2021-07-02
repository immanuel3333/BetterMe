@include('header')

<section id="target" class="target">
    <div class="container jumbotron mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Target Hari ini</p>
                <p>Tetapkan Target Anda Sekarang</p>
                <a href="{{ url('/home/create')}}" class="btn btn-primary">Tetapkan target </a>
            </div>
        </div>
    </div>
</section>

<section id="latihan" class="latihan bg-light">
    <div class="container">
        @foreach($jenis_latihan as $jl)
            <h2>{{$jl->nama_jenis_latihan }}</h2>
            <div class="card-group">
                <div class="row col-md-12 justify-content-center" style="padding-bottom:50px">  
                    @foreach($jl->latihan as $latihan) 
                                <div class="col-md-4">    
                                    <div class="card" style="height:350px">
                                        <img src="{{ asset($latihan->gambar)}}" class="img-thumbnail width:300px">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$latihan->nama_latihan}}</h5>                           
                                                <a href="{{url('/Exercise')}}/{{$latihan->id}}" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                    </div>
                                </div>
                    @endforeach
                </div>
            </div>
        @endforeach                 
    </div>
</section>



@include('footer')