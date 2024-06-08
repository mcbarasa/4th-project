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
        td button:hover{
            background-color: red;
        }
    </style>
</head>
<body>
    @include('admin.up')
    
    @include('admin.sidebar')
    <section>
    <h1>Users</h1>
    <hr/>
<table>
    <tr class="s">
        <th>User ID</th>
        <th>Name</th2>
        <th>Email</th2>
        <th>Date&Time</th2>
        <th>Action</th2>
    </tr>
    @foreach ($users as $users)
    <tr>
        <td>{{ $users->id }}</td>
        <td>{{ $users->name }}</td>
        <td>{{ $users->email }}</td>
        <td>{{ $users->created_at}}</td>
        <td>
            <button type="submit" class="btn">Delete</button>
        </td>

    </tr>
    @endforeach
</table>

    </section>
</body>
</html>