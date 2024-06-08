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
    <h1>More<span> >> User Feedback</span></h1> 
    <hr/>
    <table>
        <tr class="s">
            <th>ID</th>
            <th>Comment</th>
            <th>Created_At</th>           
            <th>Action</th>
        </tr>
        @foreach ($comments as $comments)
        <tr>
            <td>{{ $comments->id}}</td>
            <td>{{ $comments->comment }}</td>
            <td>{{ $comments->created_at }}</td>
            <td>
                <form action="{{ route('comments.destroyComments', $comments->id) }}" method="POST">
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