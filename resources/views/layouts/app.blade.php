<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="library, books, writers">
    <meta name="description" content="In this library you can find many new and old books.">
    <meta name="author" content="">
    <title>{{ config('app.name', 'Kbwebsite') }}</title>

    <!-- Favicon -->
    <link href="" rel="shortcut icon">
    <!-- Bootstrap -->
    <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('bower_components/fontawesome/css/all.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body class="body-wrapper">

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light navigation">
                    <a class="navbar-brand d-flex" href="{{ url('/') }}">
                        <div><img src="/svg/shelflogo.svg" style="height: 40px;" class="pr-3"></div>
                        <div class="pl-3">VirtualShelf</div>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto main-nav ">

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/about') }}">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn-sm btn-primary" style="position: absolute; top:32px; " href="{{ url('/p/create') }}">Add a post</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto mt-10">
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link login-button" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link login-button" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position:relative; padding-left:50px">
                                        <img src="/avatars/{{Auth::user()->profile_photo_path}}" style="width:30px; height:30px; position:absolute; border-radius:50%; left:10px; top:5px">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ url('/profile') }}">
                                            {{ __('My profile') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ url('/settings') }}">
                                            {{ __('Profile settings') }}
                                        </a>
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
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h1>@yield('title')</h1>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @yield('content')
            </div>
        </div>
    </div>
</section>

<footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Copyright -->
                <div class="copyright">
                    <p>Copyright © <script>
                            var CurrentYear = new Date().getFullYear()
                            document.write(CurrentYear)
                        </script>. All Rights Reserved, theme by <a class="text-primary" href="https://themefisher.com" target="_blank">themefisher.com</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="top-to">
        <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
</footer>

<!-- JavaScripts -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('bower_components/fontawesome/js/all.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
{{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">--}}
</body>

</html>
