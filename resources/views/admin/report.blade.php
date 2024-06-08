<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    {{-- Print icon styling --}}
    <style>
        .material-symbols-outlined {
          font-variation-settings:
          'FILL' 0,
          'wght' 400,
          'GRAD' 0,
          'opsz' 24
        }
        </style>
    <style>
        section{
            margin-top: 3rem;
            margin-left: 15.5rem;
        }
        /* Print Report styling */
        .rint{
            display: flex;
        }
        .gc h1{
            margin-left: 2rem;
        }
        .rint button{
            margin-top: 0.25rem;
            margin-left: 45rem;
            height: 3rem;
            width: 5rem;
            border-radius: 4px;
            cursor: pointer;
        }
        .rint button:hover{
            background-color: rgb(67, 236, 67);
        }
        .rint button a{
            text-decoration: none;
        }
        /* table user css */
        table{
            width: 90%;
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
        .thv{
            margin-bottom: 3rem;
            margin-left: 2rem;
        }
        .dt{
            display: flex;
            column-gap: 2rem;
            margin-left: 2rem;
        }
    </style>
</head>
<body>
    @include('admin.up')
    
    @include('admin.sidebar')
    <section>
        <div class="rint">
    <h1>Print >> <span>System Report</span></h1>
    <button onclick="window.print()" ><span class="material-symbols-outlined">
        print
        </span></button>
        {{-- <button onclick="window.print()">Print Report</button> --}}
        
</div>
    <hr/>
    <div class="gc">
    <h1><span>Gig Connect </span> Report</h1>
</div>
    <div class="dt">

        <h3>Users: <span>{{ $usersCount }}</span></h3>

        <h3>Gigs: <span>{{ $gigsCount }}</span></h3>

        <h3>Promoters: <span>{{ $promotersCount }}</span></h3>

        <h3>Artists: <span>{{ $artistsCount }}</span></h3>

    </div>
    <div class="thv">
        <div class="us">
        <h2><span> Users </span></h2>
        <table>
            <tr class="s">
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date&Time</th>
            </tr>
            @foreach ($users as $users)
            <tr>
                <td>{{ $users->id }}</td>
                <td>{{ $users->name }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->created_at}}</td>
        
            </tr>
            @endforeach
        </table>
    </div>

        <div class="rom">
        <h2> <span>Promoters</span> </h2>
        <table>
            <tr class="s">
                <th>Id</th>
                <th>Profile</th>
                <th>Name</th>
                <th>Address</th2>
                <th>Phone No</th2>
                <th>Email</th2>
                <th>Organization</th2>
                <th>Created At</th2>
            </tr>
            @foreach ($promoters as $promoters)
            <tr>
                <td>{{ $promoters -> id }}</td>
                <td> <a href="{{ asset('uploads/promoter/' . $promoters->profile_picture) }}"><img src="{{ asset('uploads/promoter/' . $promoters->profile_picture) }}" width="70px" height= "70px"  alt="profile_picture 1">
                <td>{{ $promoters->name }}</td>
                <td>{{ $promoters->address }}</td>
                <td>{{ $promoters->pho_no }}</td>
                <td>{{ $promoters->email }}</td>
                <td>{{ $promoters->organization}}</td>
                <td>{{ $promoters->created_at}}</td>
        
            </tr>
            @endforeach
        </table>
    </div>

        <div class="gg">
        <h2><span> Gigs</span></h2>
        <table>
            <tr class="s">
                <th>Id</th2>
                <th>Title</th>
                <th>Location</th2>
                <th>Description</th2>
                <th>Experience</th2>
                <th>Date</th2>
                <th>Created At</th2>
                <th>Poster</th2>
            </tr>
            @foreach ($gigs as $gigs)
            <tr>
                <td>{{ $gigs-> id }}</td>
                <td>{{ $gigs->title }}</td>
                <td>{{ $gigs->location }}</td>
                <td>{{ $gigs->description }}</td>
                <td>{{ $gigs->experience }}</td>
                <td>{{ $gigs->date}}</td>
                <td>{{ $gigs->created_at}}</td>
                <td> <a href="{{ asset('uploads/gig/' . $gigs->poster_picture) }}"><img src="{{ asset('uploads/gig/' . $gigs->poster_picture) }}" width="150px" height= "100px"  alt="poster_picture 1">
                </a> </td>
            @endforeach
        </table>

    </div>

        <div class="tis">
        <h2><span>Artists</span> </h2>
        <table>
            <tr class="s">
                <th>Id</th>
                <th>Profile</th>
                <th>Name</th>
                <th>Address</th2>
                <th>Role</th2>
                <th>Phone No</th2>
                <th>Email</th2>
                <th>Created At</th2>
            </tr>
            @foreach ($artists as $artists)
            <tr>
                <td>{{ $artists->id }}</td>
                <td> <a href="{{ asset('uploads/artist/' . $artists->profile_picture) }}"><img src="{{ asset('uploads/artist/' . $artists->profile_picture) }}" width="50" height= "50px"  alt="profile_picture 1">
                <td>{{ $artists->name }}</td>
                <td>{{ $artists->address }}</td>
                <td>{{ $artists->role }}</td>
                <td>{{ $artists->pho_no }}</td>
                <td>{{ $artists->email}}</td>
                <td>{{ $artists->created_at}}</td>        
            </tr>
            @endforeach
        </table>
    </div>

    <div class="act">
        <h2><span>Contacts</span> </h2>
        <table>
            <tr class="s">
                <th>Id</th>
                <th>Date&Time</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Meassge</th>
            </tr>
            @foreach ($contacts as $contacts)
            <tr>
                <td>{{ $contacts-> id }}</td>
                <td>{{ $contacts->created_at }}</td>
                <td>{{ $contacts->email }}</td>
                <td>{{ $contacts->subject }}</td>
                <td>{{ $contacts->message }}</td>        
            </tr>
            @endforeach
        </table>
    </div>
    </div>

    </section>
</body>
</html>