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
        td a img{
            border-radius: 50%;
        }
        td button:hover{
            background-color: red;
        }
    </style>
</head>
<body>
    @include('admin.up')
    
    @include('admin.sidebar')
    <section>
    <h1>Content >> <span>Registered Event Promoters</span> </h1>
    <hr/>
<table>
    <tr class="s">
        <th>Profile</th>
        <th>Name</th>
        <th>Address</th2>
        <th>Phone No</th2>
        <th>Email</th2>
        <th>Organization</th2>
        <th>Created At</th2>
        <th>Action</th2>
    </tr>
    @foreach ($promoters as $promoters)
    <tr>
        <td> <a href="{{ asset('uploads/promoter/' . $promoters->profile_picture) }}"><img src="{{ asset('uploads/promoter/' . $promoters->profile_picture) }}" width="70px" height= "70px"  alt="profile_picture 1">
        <td>{{ $promoters->name }}</td>
        <td>{{ $promoters->address }}</td>
        <td>{{ $promoters->pho_no }}</td>
        <td>{{ $promoters->email }}</td>
        <td>{{ $promoters->organization}}</td>
        <td>{{ $promoters->created_at}}</td>
        <td>
            <form action="{{ route('promoters.destroyPromoter', $promoters->id) }}" method="POST">
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