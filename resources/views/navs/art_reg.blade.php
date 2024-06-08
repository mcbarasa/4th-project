<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            margin: 0;
            height: auto;
        }

         h1 {
            color: black;
            padding-left: 50px;
            padding-top: 8px;
        }
         /* Styles for the form */
        .form-container {
            margin-top: 5rem;
            margin-left: 27rem;
            margin-right: 27rem;
            background-color: white;
            border-radius: 5px;
            margin-bottom: 1rem;
        }
        label {
            display: block;
            margin-bottom: 8px;
            margin-left: 1rem;
        }

        .form-container input {
            width: 93%;
            padding: 8px;
            margin-left: 1rem;
            margin-right: 1rem;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
        .form-container #name
        {
            width: 93%;
            padding: 8px;
            margin-left: 1rem;
            margin-right: 1rem;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: black;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            display: grid;
            margin-left: 20rem;
            margin-top: 0.4rem;
        }
        button:hover{
            background-color: green;
        }
        #profile_picture {
            margin-bottom: 16px;
        }

        #profile-preview {
            max-width: 93%;
            height: auto;
            margin-bottom: 16px;
            margin-left: 1rem;
        }
         .hidden {
            display: none;
        }
        select{
            margin-left: 1rem;
        }
        textarea{
            margin-left: 1rem;
            resize: none;
            width: 33rem;
        }
    </style>
</head>
<body>
    @include('partials.navbar')

    <div class="form-container">
    <form action="{{url('artist_store')}}" 
    method="POST" 
    enctype="multipart/form-data">
    @csrf
        <h1>Registration Form</h1>

        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="pho_no">Phone Number:</label>
        <input type="tel" id="pho_no" name="pho_no" required>

        <label for="address">Address:</label>
        <input type="address" id="address" name="address" required>


        <label for="role">Select your role:</label>
            <select id="role" name="role" onchange="showFields()">
                <option value="" disabled selected hidden>~~<i>select</i>~~</option>
                <option value="musician">Musician</option>
                <option value="instrumentalist">Instrumentalist</option>
                <option value="event-promoter">Event Promoter</option>
            </select>

            <div id="instrumentField" class="hidden">
                <label for="instrument">Instrument:</label>
                <input type="text" id="instrument" name="instrument">
            </div>

            <div id="genreField" class="hidden">
                <br>
            <label for="role">Category:</label>
            <select id="role" name="role" onchange="showFields()">
                <option value="" disabled selected hidden>~~<i>select</i>~~</option>
                <option value="musician">Solo</option>
                <option value="musician">Band/Group</option>
            </select>
            <br>
            <br>
                <label for="genre">Music Genre:</label>
                <input type="text" id="genre" name="genre">
            </div>

            <div id="eventDetailsField" class="hidden">
                <label for="event-details">Event Details:</label>
                <textarea id="event-details" name="event-details" rows="4"></textarea>
            </div>
        <br>
        <br>
        
        <label for="profile_picture">Profile picture:</label>
        <input type="file" name="profile_picture">

        <button type="submit">Register</button>
        <br>
    </form>
</div>
    <script>
        function previewImage() {
            const input = document.getElementById('profile_picture');
            const preview = document.getElementById('profile-preview');
            const file = input.files[0];
            const reader = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
            };

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = '';
            }
        }
        function showFields() {
    var role = document.getElementById("role").value;
    var instrumentField = document.getElementById("instrumentField");
    var genreField = document.getElementById("genreField");
    var eventDetailsField = document.getElementById("eventDetailsField");

    // Hide all fields initially
    instrumentField.classList.add("hidden");
    genreField.classList.add("hidden");
    eventDetailsField.classList.add("hidden");

    // Show relevant field based on selected role
    if (role === "instrumentalist") {
        instrumentField.classList.remove("hidden");
    } else if (role === "musician") {
        genreField.classList.remove("hidden");
    } else if (role === "event-promoter") {
        eventDetailsField.classList.remove("hidden");
    }
}
    </script>
    @include('partials.footer')
</body>
</html>
