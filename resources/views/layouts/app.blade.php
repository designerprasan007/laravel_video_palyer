<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PPPlayer') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/home/prasanna/Documents/asset/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/home/prasanna/Documents/asset/css/style.css" />
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/home/prasanna/Documents/asset/css/video/login.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md  navbar-light  bg-dark shadow-sm pl-5 ">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    {{ config('app.name', 'PPPlayer') }}
                </a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

               
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto text-white">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }} <i class="far fa-hand-point-right text-white"></i></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-5">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle btn btn-secondary text-white px-3" href="#" id="navbarDropdown" type="button" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Menu</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/trending">Trending</a>
                <a class="dropdown-item" href="/popular">Popular</a>
                <a class="dropdown-item" href="/newvideo">New Videos</a>
            </div>
            </li>
            <li class="nav-item dropdown mx-2">
                <a class="nav-link dropdown-toggle btn btn-secondary text-white px-3" href="#" id="navbarDropdown" type="button" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Filter
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/music">Music</a>
                <a class="dropdown-item" href="/movies">Movies</a>
                <a class="dropdown-item" href="/animated">Animated</a>
                <a class="dropdown-item" href="/short">Short</a>
                <a class="dropdown-item" href="/sports">Sport</a>
                </div>
            </li>
            </ul>
            <form class="form-inline mx-auto">
                <div class="input-group" >
                    <input type="search" class="form-control">
                    <div class="input-group-prepend">
                    <button class="btn btn-outline-success my-2 my-sm-0 border-0" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
                </form> 
        <ul class="navbar-nav pr-5">
        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="far fa-user fa-2x"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/signup">Signup</a>
                    <a class="dropdown-item" href="/login">Log-in</a>
                    <a class="dropdown-item" href="/setting">Setting</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{__('logout') }}</a>               
                    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display:none;">@csrf</form>

                </div>
                </li>
        </div>  
    </nav>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

