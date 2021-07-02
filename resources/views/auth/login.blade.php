@extends('layouts.app')

@section('content')


<section id="formlogin" class="formlogin pt-5">
    <div class="container bg-white border pb-4 pt-4">
        <div class="row justify-content-center">
            <div class="col-md-4">
            <img src="{{ asset('image/betterme.png')}}" width="200px">
            <h2>Better Me-Simple Workout</h2>
            <p class="font-weight-light">Aplikasi ini adalah aplikasi yang di design untuk membantu masyarakat yang terkena dampak COVID-19 
            tetap bisa berolahraga meskipun hanya dirumah saja. </p>
            </div>
                    <div class="col-md-6">
                        <form role="form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <fieldset>
                                <h2>Please Sign-in</h2>
                                <hr class="colorgraph">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                    </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 ">
                                                <div class="form-check">
                                    
                                                    @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    
                                    <hr class="colorgraph">
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <button type="submit" class="btn btn-lg btn-success btn-block">
                                                        {{ __('Login') }}
                                                    </button>
                                    </div>

                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                            @if (Route::has('register'))
                                                        <a class="btn btn-lg btn-primary btn-block" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                    @endif
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                
        </div>
    </div>
</section>






@endsection