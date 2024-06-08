<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        section{
            margin-top: 5rem;
        }
        /* Basic styling for sidebar */
.sidebar {
    height: 100%;
    width: 250px;
    position: fixed;
    top: 3rem;
    left: 0;
    background-color: #111;
    padding-top: 20px;
}

.sidebar h2 {
    color: white;
    text-align: center;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul li {
    padding: 10px;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    margin-left: 2rem;
}

/* Basic styling for content area */
.content {
    margin-left: 250px;
    padding: 20px;
}
#analytics-content{
    margin-left: 17rem;
}
.sidebar ul li a span{
    color: red;
}
/* dropdown menu for contents style */
.dropdown {
        position: relative;
        display: inline-block;
        margin-left: 2.5rem
    }
    .dropdown-button {
        background-color: #3498db;
        color: white;
        padding: 10px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    /* Dropdown content (hidden by default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        z-index: 1;
    }
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }
    .dropdown-content a:hover {
        background-color: #ddd;
    }
    .dropdown:hover .dropdown-content {
        display: block;
    }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            {{-- <li><a href="/showDashboard">Dashboard</a></li> --}}
            <li><a href="/showDashboard">Analytics</a></li>
            <li><a href="{{ url('/showUsers') }}">Users</a></li>
            {{-- <li><a href="{{ url('/admin/content') }}">Content</a></li> --}}
            <div class="dropdown">
                <button class="dropdown-button">Content</button>
                <div class="dropdown-content">
                    <a href="{{ url('/showAdminGigs') }}">Gigs</a>
                    <a href="{{ url('/showAdminArtists') }}">Artists</a>
                    <a href="{{ url('/showAdminPromoters') }}">Promoters</a>
                </div>
            </div>
            {{-- To receive notifications when a user contacts you --}}
            <li><a href="{{ url('/showcontacts') }}">Notifications <span>99+</span></a></li>
            <li><a href="{{ url('/showComments') }}">More</a></li>
            <li><a href="{{ url('/report') }}">Report</a></li>
        </ul>
    </div>
</body>
</html>