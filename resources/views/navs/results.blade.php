<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body{
            margin: 0;
            padding: 0;
            background-color: #333;
        }
        .container{
            margin-top: 4.8rem; 
        }
        .container h1, h2{
            color: white;
            margin-left: 3rem;
        }
        .container button{
            margin-left: 13rem;
            background: #333;
            height: 1.5rem;
            border-radius: 0.2rem;
        }
        .container button a{
            text-decoration: none;
            color: white;
        }
        .container button:hover{
            background: blue;
        }
        .ts ul{
            display: flex;
        }
        .ss ul{
            display: flex;
        }
        .sss ul{
            display: flex;
        }
        .f{
            width: 30rem;
            height: 27rem;
            gap: 1rem;
            list-style-type: none; 
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
            max-width: 300px;
            margin-bottom: 4rem;
        }
        .p{
            width: 30rem;
            height: 27rem;
            gap: 1rem;
            list-style-type: none; 
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
            max-width: 300px;
            margin-bottom: 4rem;
        }
        .y{
            width: 30rem;
            height: 27rem;
            gap: 1rem;
            list-style-type: none; 
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
            max-width: 300px;
            margin-bottom: 4rem;
        }
        .y li{
            padding: 4px;
        }
        .p li{
            padding: 4px;
        }
        .f li{
            padding: 4px;
        }
        .gy h1 span{
            color: green;
        }
        .gy h2 span{
            color: green;
        }
        .gy{
            width: 100vw;
            overflow: none;
        }
    </style>
</head>
<body>
    @include('partials.navbar')
    <div class="gy">
    <div class="container">
        <?php
        $totalResults = $artists->count() + $promoters->count() + $gigs->count();
        ?>
        <h1>Search Results <span>{{ $totalResults }}</span></h1>

        <h2>Artists <span>{{ $artists->count() }}</span></h2>
        <div class="ts">
        <ul>
            @foreach($artists as $artists)
            <div class="f">
            <img src="{{ asset('uploads/artist/' . $artists->profile_picture) }}" width="300px" height="170px"  alt="profile_picture 1">  
                <li>Name: <span>{{ $artists->name }}</span></li>
                <li>Address: <span>{{ $artists->address }}</span></li>
                <li>Category: <span>{{ $artists->category }}</span></li>
                <li>Genre: <span>{{ $artists->genre }}</span></li>
                <li>Role: <span>{{ $artists->role }}</span></li>
                <button class="sm"><a href="{{ url('/showArtistProfiles') }}">Learn More</a></button>
            </div>
            @endforeach
        </ul>
    </div>

        <h2>Promoters <span>{{ $promoters->count() }}</span></h2>
        <div class="ss">
        <ul>
            @foreach($promoters as $promoters)
            <div class="p">
            <img src="{{ asset('uploads/promoter/' . $promoters->profile_picture) }}" width="300px" height="170px"  alt="profile_picture 1">
                <li>Name: <span>{{ $promoters->name }}</span></li>
                <li>Address: <span>{{ $promoters->address }}</span></li>
                <li>Organization: <span>{{ $promoters->organization }}</span></li>
                <button class="col">><a href="{{ url('/showPromProfiles') }}">Link</a></button>
            </div>
            @endforeach
        </ul>
    </div>

    <div class="gig-list">
        <h2>Gigs <span>{{ $gigs->count() }}</span></h2>
        <div class="sss">
        <ul>
            @foreach($gigs as $gigs)
            <div class="y">
                <div class="gig">
            <img src="{{ asset('uploads/gig/' . $gigs->poster_picture) }}"  width="300px" height="170px"  alt="poster_picture 1">
                <li>Title: <span>{{ $gigs->title }}</span></li>
                <li>Location: <span>{{ $gigs->location }}</span></li>
                <li>Genre: <span>{{ $gigs->genre }}</span></li>
                <li>Instrument:<span>{{ $gigs->instrument }}</span></li>
                <li>Experience: <span>{{ $gigs->experience }}</span></li>
                <li>Description: <span>{{ $gigs->description }}</span></li>
                <li>Time: <span>{{ $gigs->time }}</span></li>
                <li>Attire: <span>{{ $gigs->attire }}</span></li>
                <button><a href="{{ url('/showMore')}}" id="myLink">Learn More  </a></button>
                </div>
            </div>
            @endforeach
        </ul>
    </div>
    </div>
</div>
    </div>
</body>
</html>
