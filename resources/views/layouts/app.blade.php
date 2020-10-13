<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,
            shrink-to-fit=no">
            <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="">
        <meta name="author" content="Łukasz Holeczek">
        <meta name="keyword" content="">
        <title>{{ config('app.name', 'Smart Campus IPN') }}</title>

        <link rel="stylesheet" href="{{ asset('icons/css/all.css') }}">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <style>
            .masthead {
                padding-top: 10rem;
                padding-bottom: calc(10rem - 72px);
                background: linear-gradient(to bottom, rgba(147, 201, 228, 0.65) 0%, rgba(3, 70, 125, 0.65) 100%), url("{{ asset('img/cicipn.jpg')}}");
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: scroll;
                background-size: cover;
            }

            @media (min-width: 992px) {
            header.masthead {
                height: 100vh;
                min-height: 40rem;
                padding-top: 72px;
                padding-bottom: 0;
            }
            }

            .navbar-blue {
                background-color: #0F4C81;
            }

            @media (max-width: 992px) {
               .navbar-light{
                   background-color: #fff;
               }    
            }

            .bg-primary-cic {
                background-color:  #0F4C81!important;
            }

            .btn-coreui {
                color: #fff;
                background-color: #0a2a50;
                border-color: #0a2a50;
            }

            .btn-coreui:hover {
            color: #fff;
            background-color: #1a569c;
            border-color: #1a569c;;
            }

            .navbar-toggler {
                color: rgba(0, 0, 0, 0.5);
                border-color: rgba(0, 0, 0, 0.1);
            }
        </style>
        
    </head>
    <body class="c-app flex-row align-items-center masthead">
        
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav" >
            <div class="collapse navbar-collapse" id="">
                <img src="{{ asset('img/logocic.png') }}">
            </div>
            <div class="container">      
            <h3>Smart Campus</h3>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                @guest
                    <li class="nav-item">
                        <a class="btn btn-small btn-coreui" href="{{ url('/') }}">Inicio &nbsp;</a>
                    </li>                  
                    &nbsp; &nbsp; 
                    <li class="nav-item">
                        <a class="btn btn-small btn-coreui" href="{{ route('login') }}">Sign In</a>
                    </li>
                    &nbsp; &nbsp;
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn btn-small btn-coreui" href="{{ route('register') }}">Sign Up</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="btn btn-small btn-coreui text-white nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->email }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                </ul>
            </div>
            </div>
        </nav>

        <div class="container">
            @yield('content')
        </div>

        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Custom scripts for this template -->
        <!--[if IE]><!-->
        <script src="{{ asset('vendors/@coreui/icons/js/svgxuse.min.js') }}"></script>
        <!--<![endif]-->

    </body>
</html>