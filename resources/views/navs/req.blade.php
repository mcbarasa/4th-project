<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gig Requirements</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            margin: 0;
        }

        h1 {
            padding-top: 1rem;
            color: black;
            text-align: center;
        }
        h1 span{
            color: blue;
            font-size: 2rem
        }
        h2 {
            color: black;
            text-align: center;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 15px;
            padding-left: 1rem;
        }

        li strong {
            color: black;
        }
        p{
            margin-left: 1rem;
            color: black;
            font-size: 1.2rem;
        }
        .container{
            border-radius: 1rem;
            margin: 0 30rem 0 30rem;
            background-color: white;
            height: auto;
            height: 84vh;
            margin-top: 6rem;
        }
        span{
            color: blue;
            font-size: 1.2rem
        }
        button{
            margin-left: 20rem;
            color: white;
            background-color: black;
            height: 1.7rem;
            border-radius: 0.2rem;
            margin-top: 2rem;
        }
        button:hover{
            background-color: green;
        }
        /* pop_up css */
        /* start */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.4);
    overflow: auto;
}

.modal-content {
    /* background-color: aquamarine; */
    background-color: white;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    border-radius: 5px;
    width: 80%;
    max-width: 600px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
}

button[type="submit"] {
    background-color: black;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    margin-left: 25rem;
}
button[type="submit"]:hover{
    background-color: green;
}
textarea{
    resize: none;
}
.my{
    float: right;
    margin-left: 20rem !important;
}
        /* end */
    </style>
</head>
<body>
    @include('partials.navbar')

    @foreach($gigs as $gigs)
    <form action="{{ url('gig_store', ['id' => $gigs->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="container">
    <h1>Gig & Requirements <span>{{ $gigs -> id }}</span></h1>
    <p><strong><span>Gig Title:</span> </strong> {{ $gigs -> title }}</p>
    <p><strong><span>Date:</span> </strong>  {{ $gigs -> date }}</p>
    <p><strong><span>Location:</span> </strong>  {{ $gigs -> address }}</p>
    <p><strong><span>Genre:</span> </strong>  {{ $gigs -> genre}}</p>
    <p><strong><span>Description:</span> </strong>  {{ $gigs -> description }}</p>

    <h2>Requirements</h2>

    <ul>
        <li><strong><span>Instrument:</span> </strong> {{ $gigs -> instrument}}</li>
        <li><strong><span>Experience:</span> </strong> {{ $gigs -> experience }}</li>
        <li><strong><span>Attire:</span> </strong> {{ $gigs -> attire }}</li>
        <li><strong><span>Additional Information:</span> </strong> {{ $gigs -> add_info }}</li>
    </ul>
    <!-- Applying -->
    <button id="openModalBtn">Apply for Gig</button>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Apply for Gig</h2>
            <form id="applicationForm">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Submit Application</button>
            </form>
        </div>
    </div>
    
</div>
</form>
@endforeach

<script>
    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("openModalBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Handle form submission
document.getElementById("applicationForm").addEventListener("submit", function(event) {
  event.preventDefault();
  // Add your form submission logic here
  alert("Application submitted successfully!");
  modal.style.display = "none";
});
</script>
@include('partials.footer')
</body>
</html>
