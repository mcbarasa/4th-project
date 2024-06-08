<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <title>My Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #333;
            height: auto;
        }
        .st{
            margin-top: 5rem;
            margin-bottom: 1rem;
        }
        .profile-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 20px;
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        p {
            text-align: center;
            color: #666;
            margin-bottom: 20px;
        }

        .details {
            margin-left: 1.7rem;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .profile-container h1{
            color: black;
        }
        .profile-container p{
            color: green;
            font-weight: 500;
        }
        .details h2{
            color: black;
        }
        .details div {
            text-align: center;
        }
        /* feedback and rating style */
        .profile {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgb(206, 200, 200);
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-left: -1rem;
            margin-right: -1rem;
            margin-bottom: -1rem;
        }

        h1, h2 {
            color: #333;
}

.star {
    cursor: pointer;
    font-size: 24px;
}

textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
}

button {
    background-color: blueviolet;
    color: black;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    display: block;
    margin-top: 10px;
    font-weight: 800;
}
textarea{
    resize: none;
}
.profile h1 span{
    color: green;
}
.pg{
            display: flex;
            background-color: white;
        }
        .pg p{
            margin-left: 1rem;
        }
        .pg p {
            color: black;
        }
        .sl{
            margin-left: 2rem;
        }
    </style>
</head>
<body>

    @include('partials.navbar')

    <div class="st">
<form 
action="" {{ url('promoter_store') }}
method="POST" 
enctype="multipart/form-data"
>
@csrf
    <div class="profile-container">
        <div class="profile-picture">
            <!-- fetch image from DB -->
            <img src="/assets/img/prof.jpeg" alt="Your Profile Picture"> 
        </div>
        <h1>Name</h1>
        <p>{{ $users->name }}</p>

        <div class="details">
            <div>
                <h2>Location</h2>
                <p>{{ $promoters -> address }}</p>
            </div>
            <div>
                <h2>Email</h2>
                <p>{{ $users -> email }}</p>
            </div>
            <div>
                <h2>Phone Number</h2>
                <p>{{ $promoters -> pho_no }}</p>
            </div>
            <div>
                <h2>Organization</h2>
                <p>{{ $promoters -> organization}}</p>
            </div>
        </div>
        <div class="profile">
            <h1>Ratings and Feedback</h1>
                <div class="rp">
                @foreach ($ratings as $ratings)
            <div class="pg">
            <p><span class="material-symbols-outlined">
                person
                </span>{{$users->email}}</p>
            <div class="sl">
            <p>{{ $ratings -> rating }}</p>
            <p> {{ $ratings -> feedback }}</p>
        </div>
        
        </div>
        <hr>
        @endforeach
    </div>
        </div>
    </div>
    </form>
</div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
        const stars = document.querySelectorAll(".star");
        const feedbackInput = document.getElementById("feedbackInput");
        const feedbackList = document.getElementById("feedbackList");
        const submitFeedbackBtn = document.getElementById("submitFeedback");
    
        // Event listeners for stars
        stars.forEach(star => {
            star.addEventListener("click", function() {
                const rating = parseInt(star.getAttribute("data-value"));
                // Example: Change star colors based on rating
                stars.forEach((s, index) => {
                    if (index < rating) {
                        s.style.color = "gold";
                    } else {
                        s.style.color = "#ccc";
                    }
                });
            });
        });
    
        // Event listener for submitting feedback
        submitFeedbackBtn.addEventListener("click", function() {
            const feedbackText = feedbackInput.value.trim();
            if (feedbackText !== "") {
                // Create feedback element
                const feedbackElement = document.createElement("div");
                feedbackElement.classList.add("feedback");
                feedbackElement.textContent = feedbackText;
                // Add feedback to the feedback list
                feedbackList.appendChild(feedbackElement);
                // Clear feedback input
                feedbackInput.value = "";
            }
        });
    });
    
    </script>
    @include('partials.footer')
</body>
</html>
