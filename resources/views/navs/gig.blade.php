<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Gigs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            margin: 0;
        }
        .new{
            margin-top: 3.6rem;
            margin-bottom: 1rem;
        }
        .gig{
            margin-top: 1rem;
            height: auto;
            width: auto;
            overflow-x: hidden;
            overflow-y: hidden;
        }
        .gig img{
            width: 500px;
            height: 170px;

        }
        .gig-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-left: 1rem;
        }
        h1 {
            color: white;
            margin-left: 7rem;
        }
        .dr{
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
        .dr li{
            width: 30rem;
            height: 12rem;
        }

        li h2 {
            color: #333;
        }

        li p {
            color: #000000;
            font-weight: 600;
        } 
        .btn-r{
            float: right;
            margin-top: -3rem;
            margin-right: 15rem;
            height: 2.1rem;
        }
        .btn {
            float: right;
            margin-top: -3rem;
            margin-right: 8rem;
            height: 2.1rem;
        }
        button a{
            text-decoration: none;
            color: black;
           font-weight:600;
        }
        .dr button{
            margin-left: 11rem;
        }
        span{
            color: blue;
        }
        /* pop up style */
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            z-index: 9999;
            display: none;
        }
        /* Styling for the overlay */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
            display: none;
        }
    </style>
</head>
<body>
    
    @include('partials.navbar')
    
<div class="new">
<form action="{{ url('gig_store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="gig">
        <h1>Available Gigs</h1>
        <button class="btn-r"><a href="{{ url('showPromoters') }}">Promoters</a></button>
        <button class="btn"><a href="{{ url('navs/add_gig') }}"> <span>+</span> Add Gig</a></button>
        <div class="gig-list">
        @foreach ($gigs as $gigs)
        <div class="dr">
            <div class="gig">
            <img src="{{ asset('uploads/gig/' . $gigs->poster_picture) }}"   alt="poster_picture 1">

        <li>
            <h2>Title: <span>{{ $gigs -> title }}</span></h2>
            <p>Date: <span>{{ $gigs -> date }}</span></p>
            <p>Address: <span>{{$gigs -> location }}</span></p>
            <p>Genre: <span>{{$gigs -> genre }}</span></p>
            <p>Description: <span>{{$gigs -> description }}</span></p>
        </li>
            </div>
            <button><a href="{{ url('/showMore')}}" id="myLink">Learn More <span>{{ $gigs -> id }}</span> </a></button>

    </div>
    @endforeach
        </div>
    </div>
    <script>
const myLink = document.getElementById('myLink');
myLink.addEventListener('click', function(event) {
    event.preventDefault();
});
const myList = document.getElementById('myList');
const listItems = Array.from(myList.children).reverse();
myList.innerHTML = '';
listItems.forEach(item => {
    myList.appendChild(item);
});
    </script>
    </form>
</div>
@include('partials.footer')
</body>
</html>
