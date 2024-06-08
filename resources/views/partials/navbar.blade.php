<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            margin-left: 5%
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
/* the styling for search field */
.search-container {
  position: relative;
  width: 220px; 
  margin-left: 35rem;
}
input[type="text"] {
  width: 100%;
  padding: 7px 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
.search-container button[type="submit"] {
  position: absolute;
  top: 0;
  right: 0;
  padding: 8.3px 10px;
  border: none;
  background-color: #007bff; 
  color: #fff;
  border-radius: 0 4px 4px 0;
  cursor: pointer;
}

.search-container button[type="submit"]:hover {
  background-color: #0056b3;
}
    </style>
</head>
<body>
    <header>
    <nav>
        <a href="/" id="log">GigConnect</a>
         {{-- search button --}}
         <form action="{{ url('/search') }}" method="GET">
         <div class="search-container">
            <input type="text" name="query"  placeholder="Search...">
            <button type="submit"><i class="fa fa-search"></i></button>
          </div>
        </form>
          {{-- end of search button --}}

    <div class="one">
        <div class="and">
        <a href="/">Home</a>
        <a href="{{ url('/showArtists') }}">Artists</a>
        <a href="{{ url('showGigs') }}">Gigs</a>
        <a href="{{ url('navs/cont') }}">Contact</a>
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
                                    <a href="{{ url('/showProfiles') }}" class="text-decoration-none text-reset">
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
