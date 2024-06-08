<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
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
            transition: top 0.3s;
        }
        nav  a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        .one{
            margin-left: 70%;
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
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="#" id="log">GigConnect</a>
        <div class="one">
            <div class="and">
            @guest
                @if (Route::has('login'))
                         <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
             @endif
    
                 @if (Route::has('register'))
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </div>
        </div>
        </nav>
    
    </header>
</body>
</html>