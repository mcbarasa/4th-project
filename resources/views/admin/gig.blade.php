<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        section{
            margin-top: 3rem;
            margin-left: 15.5rem;
        }
        table{
            width: 100%;
        }
        table, th, td {
            border:0.1px solid black;
        }
        td button{
            color: white;
            background-color: black;
            margin-left: 3rem;
        }
        td{
            margin-left: 3rem;
        }
        td button:hover{
            background-color: red;
        }
        .rt{
            display: flex;
        }
        .rt button{
            margin-top: 1rem;
            margin-left: 45rem;
            height: 1.8rem;
        }
        .rt button a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    @include('admin.up')
    
    @include('admin.sidebar')
    <section>
        <div class="rt">
    <h1>Content >> <span>Available Gigs</span> </h1>
    <button><a href="{{ url('/admin/adm_gig') }}">Add Gig <span>+</span></a></button>
</div>
    <hr/>
<table>
    <tr class="s">
        <th>Title</th>
        <th>Location</th2>
        <th>Description</th2>
        <th>Experience</th2>
        <th>Date</th2>
        <th>Created At</th2>
        <th>Poster</th2>
        <th>Action</th2>
    </tr>
    @foreach ($gigs as $gigs)
    <tr>
        <td>{{ $gigs->title }}</td>
        <td>{{ $gigs->location }}</td>
        <td>{{ $gigs->description }}</td>
        <td>{{ $gigs->experience }}</td>
        <td>{{ $gigs->date}}</td>
        <td>{{ $gigs->created_at}}</td>
        <td> <a href="{{ asset('uploads/gig/' . $gigs->poster_picture) }}"><img src="{{ asset('uploads/gig/' . $gigs->poster_picture) }}" width="150px" height= "100px"  alt="poster_picture 1">
        </a> </td>
        <td>
            <form action="{{ route('gigs.destroy', $gigs->id) }}" method="POST">
                @csrf
                @method('DELETE')
            <button type="submit" class="btn">Delete</button>
        </form>
        </td>

    </tr>
    @endforeach
</table>

    </section>
</body>
</html>