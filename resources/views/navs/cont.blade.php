<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            margin: 0;
        }
        .con{
            margin-top: 5rem;
        }

        h1 {
            color: white;
            text-align: center;
        }

        .contact-container {
            display: flex;
            justify-content: space-between;
        }

        .contact-form {
            flex: 1;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-right: 20px;
            margin-left: 15rem;
            margin-bottom: 1rem;
        }

        .contact-info {
            color: #fff;
            flex: 1;
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
            background-color: black;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-left: 25rem;
        }
        button:hover{
            background-color: green;
        }
        .mas{
            fill-rule: inherit;
        }
        textarea{
            resize: none;
        }
    </style>
</head>
<body>

    @include('partials.navbar')
<div class="con">
    <form action="{{ url('contact_store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <h1>Contact Us</h1>

    <div class="contact-container">

        <!-- Contact Form -->
        <div class="contact-form">
            <h2>Send us a message</h2>

            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" ondrop="return false;" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>

        <!-- Contact Information -->
        <div class="contact-info">
            <h2>Contact Information</h2>

            <p><strong>Email:</strong> gigconnect@gmail.com</p>
            <p><strong>Phone:</strong> +254 734 567 890</p>
            <p><strong>Address:</strong> 123 Main Street, Strange</p>
        </div>
    </div>
</form>
</div>
@include('partials.footer')
    </body>
</html>
