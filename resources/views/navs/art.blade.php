<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Artists</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #333;
    margin: 0;
    height: auto;
}
.new{
    /* height: 84vh; */
    margin-top: 5rem;
    margin-bottom: 1rem;
}
h1 {
    margin-left: -50rem;
    color: white;
    text-align: center;
    margin-top: 4rem;
}

.artist-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.artist {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin: 10px;
    width: calc(25% - 10px); /* Adjust width as needed */
    margin-bottom: 20px; /* Adjust margin as needed */
}

.artist img {
    width: 100%;
    border-radius: 5px;
    margin-bottom: 10px;
}

.artist h2 {
    color: #333;
    margin-bottom: 5px;
}

.artist p {
    margin: 5px 0;
    color: black;
    font-weight: 550;
}
.btn {
    margin-top: -8rem;
    margin-left: 70rem;
    background-color: white;
    border: none;
    height: 1.5rem;
}
.btn a{
    color: black;
    font-weight: 550;
}
button a{
    text-decoration: none;
}
.col{
    margin-left: 1rem;
}
.sm{
    margin-left: 5rem
}
.cs{
    display: flex;
}
.cs button{
    background-color: black;
    border-radius: 0.2rem;
    height: 1.5rem;
}
.cs a{
    color: white;
    font-size: 0.8rem;
}
span{
    color: blue;
}
</style>
<body>

    @include('partials.navbar')

<div class="new">
    <h1>Registered Artists</h1>
    <form action="{{ url('artist_store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <button class="btn"><a href="{{ url('navs/art_reg') }}">+Register</a></button>
    <div class="artist-list">
        @foreach ($artists as $artists)
        <div class="artist">
            <img src="{{ asset('uploads/artist/' . $artists->profile_picture) }}" width="500px" height="170px"  alt="profile_picture 1">

            <h2>Name:<span> {{ $artists -> name }}</span></h2>
            <br>
            <p>Role:<span>{{ $artists -> role }}</span></p>
            <br>
            <p>Email:<span> {{ $artists -> email }}</span></p>
            <br>
            <div class="cs">
            <button class="col"><a href="{{ url('/showProfiles') }}">Collaborate</a></button> 
            <br>
            <button class="sm"><a href="{{ url('/showArtistProfiles') }}">Learn More</a></button>
        </div> 
        </div>
        @endforeach 
    </div>
</form>
</div>
@include('partials.footer')
</body>
</html>
