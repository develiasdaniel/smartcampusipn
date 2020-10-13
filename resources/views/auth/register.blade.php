@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf 
                        <div class="card-body p-4">
                            <h1>{{ __('Register') }}</h1>
                            <p class="text-muted">Crea tu cuenta personal</p>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><span
                                            class="input-group-text">
                                            <i class="cil-user"></i>
                                            </span>
                                </div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Name') }}"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><span
                                            class="input-group-text">
                                            <i class="cil-user"></i>
                                            </span>
                                </div>
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" 
                                    placeholder="{{ __('Surname') }}" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><span
                                        class="input-group-text">
                                        <i class="cil-envelope-open"></i>
                                    </span>
                                </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                  placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend"><span
                                        class="input-group-text">
                                        <i class="cil-lock-locked"></i>
                                    </span>
                                </div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                  placeholder="{{ __('Password') }}" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group mb-4">
                                <div class="input-group-prepend"><span
                                        class="input-group-text">
                                        <i class="cil-lock-locked"></i>
                                    </span>
                                </div>
                                <input id="password-confirm" type="password" class="form-control" placeholder="{{ __('Confirm Password') }}"
                                    name="password_confirmation" required autocomplete="new-password">                          
                            </div>

                            <button class="btn btn-block btn-coreui btn-lg" type="submit">{{ __('Register') }}                                
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection