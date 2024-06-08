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
        h1 span{
            color: black;
            font-size: 1rem;
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
    </style>
</head>
<body>
    @include('admin.up')
    
    @include('admin.sidebar')
    <section>
    <h1>Notifications<span> >> From site users</span></h1> 
    <hr/>
    <table>
        <tr class="s">
            <th>Date&Time</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Meassge</th>
            <th>Action</th>
        </tr>
        @foreach ($contacts as $contacts)
        <tr>
            <td>{{ $contacts->created_at }}</td>
            <td>{{ $contacts->email }}</td>
            <td>{{ $contacts->subject }}</td>
            <td>{{ $contacts->message }}</td>
            <td>
                <form action="{{ route('contacts.destroyContact', $contacts->id) }}" method="POST">
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