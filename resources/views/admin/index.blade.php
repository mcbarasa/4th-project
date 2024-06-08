<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
        #dashboard-content p{
            font-size: 1.2rem;
        }
        .any{
            display: flex;
            column-gap: 2rem;
        }
        h1{
            margin-top: -1rem;
        }
        .card{
            border-radius: 0.3rem;
            height: 11rem;
            width: 12rem;
            /* background-color: rgb(182, 177, 177); */
            background-color: rgb(109, 109, 243);
            margin-top: 3rem;
        }
        #analytics-data .use{
            margin-top: 1rem;
        }
        label{
            font-size: 1.3rem;
            font-weight: 600;
            margin-left: 1.5rem;
        }
        #analytics-data h1{
            row-gap: 1rem;
            margin-top: 1rem;
            margin-left: 1rem;
        }
        #analytics-data p{
            color: black;
            margin-left: 1rem;
            font-size: 1rem;
        }
        #analytics-data button{
            height: 1.5rem;
            margin-left: 7rem;
            background-color: black;
            border-radius: 0.1rem;
            width: 4rem;
        }
        .use button{
            margin-bottom: 1rem !important;
        }
        #analytics-data button a{
            color: white;
            text-decoration-line: none;
        }
        #analytics-data button:hover{
            background: blue;
        }
        /* Print Report styling */
        .part{
            display: flex;
        }
        .part button{
            margin-top: -1.5rem;
            margin-left: 35rem;
            height: 3rem;
            width: 5rem;
            border-radius: 4px;
        }
        .part button:hover{
            background-color: rgb(67, 236, 67);
        }
        .part button a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    {{-- start of navbar/header --}}
    @include('admin.up')
    {{-- end of navbar/header --}}
    <section>
        @include('admin.sidebar')

    <div class="content">
        <div id="dashboard-content">
            <div class="part">
            <h1>Welcome to the Gig Connect Dashboard!</h1>
            <button><a href="{{ url('/report') }}"><span class="material-symbols-outlined">
                print
                </span></a></button>
        </div>
            <hr>
            <p>This is the admin Dashboard <span>Welcome Admin</span>.</p>
        </div>    
    </div>
    <!-- analytics.html -->
<div id="analytics-content">
    <h1>Analytics</h1>
    <p>This is the sites analitics for the time it has been Up.</p>
    <!-- Placeholder for analytics data -->
    <div class="any">
    <div id="analytics-data">
            <div class="card" >
                <div class="use">
                <label>Total Users: {{ $totalAllUsers }}</label>
                <p><strong>This Month: {{ $thisMonthUsers  }}</strong></p>
                <p> <strong> This year: {{ $thisYearUsers }}</strong></p>
                <button><a href="{{ url('showUsers') }}">View</a></button>
            </div>
        </div>
    </div>
    <div id="analytics-data">
        <div class="prom">
            <div class="card" >
                <label>Promoters</label>
                <h1>Total: {{ $totalPrmoters }}</h1>
                <button><a href="{{ url('showAdminPromoters') }}">View</a></button>
            </div>
        </div>
    </div>
    <div id="analytics-data">
        <div class="gig">
            <div class="card" >
                <label>Gigs</label>
                <h1>Total: {{ $totalGigs  }}</h1>
                <button><a href="{{ url('showAdminGigs') }}">View</a></button>
            </div>
        </div>
    </div>
    <div id="analytics-data">
        <div class="art">
            <div class="card" >
                <label>Artists</label>
                <h1>Total: {{ $totalArtists  }}</h1>
                <button><a href="{{ url('showAdminArtists') }}">View</a></button>
            </div>
        </div>
    </div>
    <div id="analytics-data">
        <div class="art">
            <div class="card" >
                <label>Contacts</label>
                <h1>Total: {{ $totalContacts  }}</h1>
                <button><a href="{{ url('/showcontacts') }}">View</a></button>
            </div>
        </div>
    </div>
</div>
</div>
</section>
</body>
</html>
