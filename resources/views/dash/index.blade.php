<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gig Connect Platform</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #333;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        section {
            padding: 20px;
        }

        h2 {
            color: #333;
        }
        .gig-card {
            width: 300px;
            margin: 10px;
            padding: 15px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        .gig-card p{
            color: black;
        }
        button a{
          text-decoration: none;
        }

        .home{
            background-image: url('assets/img/lnd.jpg'); 
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
            background-attachment: fixed;
        }
        /* container and image style */
        .contain {
            display: flex;
            justify-content: space-between;
            width: 80%;
            margin-top: 20px;
            margin-left: 8rem;
            flex-wrap: wrap;
        }
        .cont {
            display: flex;
            justify-content: space-between;
            width: 80%;
            margin-top: 20px;
            margin-left: 8rem;
            flex-wrap: wrap;
        }
        .item {
            text-align: center;
            width: 30%; 
            margin-bottom: 20px;
            width: calc(33.33% - 10px); 
            color: red;
        }

        img {
            width: 100%;
            height: 237px;
            border-radius: 8px;
            margin-bottom: 20px;
            object-fit: cover;
        }

        h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #fff;
        }

        p {
            font-size: 1em;
            color: white;
        }
        h1{
            margin-left: 22rem;
            font-weight: 800;
            color: white;
        }
        .sec{
            display: flex;
            gap: 2rem;
            margin-right: 60rem;
            margin-top: 20rem;
        }
        .sec button{
            font-size: medium;
            font-weight: 500;
            height: 2rem;
            border-radius: 0.2rem;
            background-color: blue;
            justify-content: space-around;
            border: none;
        }
        .sec button a{
            text-decoration: none;
            color: white;
        }
        .com h2{
            margin-left: 35rem;
        }
        .com textarea{
            resize: none;
            margin-left: 25rem;
            border-radius: 4px;
        }
        #snd button{
            margin-left: 1rem;
        }
        #tdy{
            background-color: white !important;
        }
        #snd button:hover{
            background-color: green;
        }

        /* trying */
  .container {
    position: relative;
    max-width: 350px; 
    margin: 0 auto;
  }
  .image {
    opacity: 70%;
    width: 100%;
    height: auto;
    display: block;
  }
  .content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: transparent;
    padding: 20px;
    text-align: center;
  }
    </style>
</head>
<body>
    <div class="home">
        <div class="sec">
        <button><a href="{{ url('/navs/client') }}">Join as Promoter</a></button>
        <button><a href="{{ url('/navs/art_reg') }}">Join as Artist</a></button>
    </div>
    </div>
    <h1><span>Discover</span> and <span>Connect</span> with Music  Pros</h1>
    <div class="contain">
        <div class="container">
            <a href=""><img src="assets/img/sing.jpeg" alt="singers"> </a>
        <div class="content">
            <h2>Singers</h2>
            <p>Find the best vocalists to work with either as back up singers or collaborate with.</p>
        </div>
    </div>

        <div class="container">
            <img class="image" src="assets/img/prod.jpg" alt="Image 2"> 
            <div class="content">
            <h2>Producers</h2>
            <p>Find the perfect producer to collaborate with and make your next hit.</p>
        </div>
        </div>

        <div class="container">
            <img class="image" src="assets/img/play.jpg" alt="Image 3"> 
        <div class="content">
            <h2>Mixing Engineers</h2>
            <p>Get aprofessional mix to turn your recordings into a great song.</p>
        </div>
    </div>

        <div class="container">
            <img class="image" src="assets/img/sow.webp" alt="Image 4"> 
        <div class="content">
            <h2>Song Writers</h2>
            <p>Find writing magicians that can turn your lyrics/ideas into a hit song</p>
        </div>
    </div>
<div class="container">
    <img class="image" src="assets/img/dj.webp" alt="Instrumentalists"> 
<div class="content">
    <h2>DJs</h2>
    <p>Find DJs to work with.</p>
</div>
</div>
<div class="container">
    <img class="image" src="assets/img/sess.jpg" alt="Description of the image">
    <div class="content">
      <h2>Session Musicians</h2>
      <p>This is some content displayed on top of the image.</p>
    </div>
  </div>
<div class="container">
    <img class="image" src="assets/img/mast.jpg" alt="Mastering Engineers"> 
<div class="content">
    <h2>Mastering Engineers</h2>
    <p>Work with the best to polish your work.</p>
</div>
</div>
      <div class="container">
        <a href="assets/img/inst.jpg"><img class="image" src="assets/img/inst.jpg" alt="Description of the image"></a>
        <div class="content">
          <h2>Instrumentalists</h2>
          <p>Looking for instrulists?? Say less!!.</p>
        </div>
      </div>

      <div class="container">
        <img  src="assets/img/bit.jpg" alt="Instrumentalists"> 
    <div class="content">
        <h2>Beat Makers</h2>
        <p>Get original beats with best beatmakers in the game.</p>
    </div>
</div>
    </hr>
        
    </div>
    <section id="snd">
        <form action="{{ url('store_comment') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="com">
            <h2>Comment on the system</h2>
            <textarea name="comment" id="comment" cols="70" rows="5" placeholder="Add an anonymous comment of our system here...." ></textarea>
         <button type="submit" >Send</button>
        </div>
    </form>
    </section>
    
    <section>
        <h2>Join Our Community</h2>
        <p>Connect with musicians, find gigs, get know the promters around you and showcase your talent. Sign up now!</p>
        <button><a href="{{ url('/login') }}">Sign In</a></button>
    </section>
</body>
</html>
