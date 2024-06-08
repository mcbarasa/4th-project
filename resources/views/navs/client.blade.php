<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client/Promoter Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            margin: 0;
            /* height: 94vh; */
        }
        h2{
            font-size: 1.8rem;
            padding-top: 10px;
            padding-left: 10px;
        }
        label {
            margin-left: 14px;
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        .container #name,#organization{
            width: 93%;
            margin-left: 14px;
            margin-bottom: 16px;
            box-sizing: border-box;
            font-size: 1.3rem
        }
        input {
            width: 93%;
            margin-left: 14px;
            margin-bottom: 16px;
            box-sizing: border-box;
            font-size: 1.3rem
        }
        button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            mar
        }
        .container{
            background-color: white;
            margin-bottom: 4rem;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 6rem;
            margin-left: 27rem;
            margin-right: 27rem;
        }
        button{
            margin-left: 24rem;
            margin-bottom: 4px;
            background-color: black;
        }
        button:hover{
            color: aqua;
            background-color: green;
        }
    </style>
</head>
<body>

    @include('partials.navbar')

    <div class="container">
    <form action="{{ url('promoter_store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2>Client/Promoter Registration</h2>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="address">Address:</label>
        <input type="address" id="address" name="address" required>

        <label for="pho_no">Phone Number:</label>
        <input type="pho_no" id="pho_no" name="pho_no" required>

        <label for="organization">Organization/Company:</label>
        <input type="text" id="organization" name="organization" required>

        <label for="profile_picture">Profile picture:</label>
        <input type="file" name="profile_picture">
        
        <button type="submit">Submit</button>
    </form>
</div>

    @include('partials.footer')
</body>
</html>
