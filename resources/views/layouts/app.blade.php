<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <style>
        body{
            background: #333;
        }
        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
            position: fixed;
            display: flex;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 9999;
        }
        nav  a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        .one{
            margin-left: 50%
        }
        .one a{
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        span{
            color: rgb(99, 42, 165);
        }
        #log{
            float: left;
            color: white;
            font-weight: 800;
        }
        a:hover{
            color: cyan !important;
            transition: 1s ease-out 300ms;
        }
        #ot{
            color: red;
        }
    </style>
</head>
<body>
    <div id="app">
       
        <nav>
            <a href="/" id="log">GigConnect</a>
        <div class="one">
            
            {{-- <a href="{{ url('navs/prof') }}">Profile</a> --}}
            <div class="and">
            <a href="/">Home</a>
            <a href="{{ url('navs/art') }}">Artists</a>
            <a href="{{ url('navs/gig') }}">Gigs</a>
            <a href="{{ url('navs/cont') }}">Contact</a>
            @guest
                @if (Route::has('login'))
                         <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
             @endif
    
                 @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
             @endif
                @else
                         <div class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" id="ot" 
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            @endguest
                        </div>
        </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
