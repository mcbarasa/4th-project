<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Gig</title>
    <style>
        body {
            background-color: #333;
        }
        section{
            margin-top: 3rem;
            margin-left: 15.5rem;
        }
        section h1{
            color: white;
            margin-left: 2rem;
        }
        .ad{
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
            margin-top: 1rem;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            display: grid;
            margin-top: 2rem;
        }
        #poster_picture {
            margin-bottom: 16px;
        }

        #poster-preview {
            max-width: 100%;
            height: auto;
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    @include('admin.up')
    
    @include('admin.sidebar')

    <section>
        <h1>Add Gig </h1>
    <hr>
    <div class="ad">
    <form action="{{ url('gig_storeAdmin') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Add Gig</h1>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>

        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required>

        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" required>

        <label for="instrument">Instrument:</label>
        <input type="text" id="instrument" name="instrument" required>

        <label for="experience">Experience:</label>
        <input type="text" id="experience" name="experience" required>

        <label for="attire">Attire:</label>
        <input type="text" id="attire" name="attire" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <label for="add_info">Additional Information:</label>
        <input type="text" id="add_info" name="add_info" required>
        
        <label for="poster_picture">Poster picture:</label>
        <input type="file" name="poster_picture">
        

        <button type="submit">Post Gig</button>
    </form>
</div>
</section>
</body>
</html>
