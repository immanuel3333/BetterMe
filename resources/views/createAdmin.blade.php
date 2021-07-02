@extends('layouts.template')
@section('content')

 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Data') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{url('/create2')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="nama_latihan" class="col-md-4 col-form-label text-md-right">{{ __('Nama Latihan :') }}</label>
                            <div class="col-md-6">
                                <input id="nama_latihan" type="text" class="form-control @error('nama_latihan') is-invalid @enderror" name="nama_latihan" value="{{ old('nama_latihan') }}"  placeholder="Masukkan Nama  Latihan" required autocomplete="nama_latihan" autofocus>
                                @error('nama_latihan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jenis_latihan" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Latihan :') }}</label>
                            <div class="col-md-6">
                                <select class="custom-select" name="jenis_latihan">
                                <option selected>Pilih salah satu</option>
                                <option value="1">All Body</option>
                                <option value="2">Upper Body</option>
                                <option value="3">Lower Body</option>
                                </select>
                                @error('jenis_latihan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                     
                        <div class="form-group row">
                            <label for="kalori_minimal" class="col-md-4 col-form-label text-md-right">{{ __('Kalori Minimal :') }}</label>
                            <div class="col-md-6">
                                <input id="jumlah_kalori" type="text" class="form-control @error('kalori_minimal') is-invalid @enderror" name="kalori_minimal" value="{{ old('kalori_minimal') }}"  placeholder="Masukkan Kalori Minimal" required autocomplete="kalori_minimal" autofocus>
                                @error('kalori_minimal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jumlah_kalori" class="col-md-4 col-form-label text-md-right">{{ __('Kalori Maksimal :') }}</label>
                            <div class="col-md-6">
                                <input id="kalori_maksimal" type="text" class="form-control @error('kalori_maksimal') is-invalid @enderror" name="kalori_maksimal" value="{{ old('kalori_maksimal') }}"  placeholder="Masukkan Kalori Maksimal" required autocomplete="kalori_maksimal" autofocus>
                                @error('kalori_maksimal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="video" class="col-md-4 col-form-label text-md-right">{{ __('Masukkan Video :') }}</label>
                            <div class="form-group">
                                <input type="text" class="form-control-file" name="video" id="video" required autocomplete="video" autofocus>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="gambar" class="col-md-4 col-form-label text-md-right">{{ __('Masukkan Gambar :') }}</label>
                            <div class="form-group">
                                <input type="file" class="form-control-file" name="image" id="gambar" required autocomplete="gambar" autofocus>
                            </div>
                        </div>

                        
                            <div class="row justify-content-center">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                               <button type="submit" class="btn btn-primary" >Tambah Data</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/jquery-3.5.1.min.js')}}" ></script>
@endsection