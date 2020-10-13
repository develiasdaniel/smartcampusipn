@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card-group">
                <div class="card p-4">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <h1>Ingresar</h1>
                            <p class="text-muted">Accede a tu cuenta ahora</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><span
                                        class="input-group-text">
                                        <i class="cil-user"></i>
                                    </span></div>
                                <input id="email" type="email"
                                    class="form-control form-control-lg
                                    @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}"
                                    required autocomplete="email" autofocus
                                    placeholder="{{ __('E-Mail Address') }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-group mb-4">
                                <div class="input-group-prepend"><span
                                        class="input-group-text">
                                        <i class="cil-lock-locked"></i>
                                    </span></div>
                                <input id="password"  type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" 
                                    name="password" required autocomplete="current-password"
                                    placeholder="{{ __('Password') }}">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group mb-4">
                                <div class="input-group-prepend form-check"><span>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    </span>
                                </div>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                       
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-lg btn-block
                                        btn-coreui px-4">{{ __('Login') }}</button>
                                </div>
                            </div>

                            <div class="row">
                                @if(Route::has('password.request'))
                                <div class="col-12 text-right">
                                    <a class="btn btn-lg btn-link px-0"
                                        href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}</a>
                                </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card text-white bg-primary-cic py-5 d-md-down-none"
                    style="width:44%">
                    <div class="card-body text-center">
                        <div>
                            <h2>Registrate al Smart Campus</h2>
                            <h5>Si aún no te has regitrado hazlo ahora</h5>
                            <a class="btn btn-lg btn-outline-light
                                mt-3" href="{{ route('register') }}" >Registrate aquí!</a>
                        </div>
                        <div class="" id="">
                            <br<br><br>
                            <img src="img/logocic.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection