<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            background-color: #990000; /* Red matte theme */
            color: #000000; /* White text */
            font-family: 'Arial', sans-serif;
        }

        .container {
            text-align: center;
            margin-bottom: 20px;
            color:white !important;
        }

        input, textarea {
            width: 90%; /* Take up full width */
            padding: 10px;
            font-size: 16px;
            margin: 10px 0;
            border: 1px solid #fff; /* White border */
            border-radius: 5px; /* Round the corners */
            outline: none;
            transition: border-color 0.3s ease-in-out; /* Add a smooth transition for the border color */
        }

        input:focus,
        textarea:focus {
            border-color: #0056b3; /* Darker blue border on focus */
        }

        button {
            padding: 10px 15px;
            font-size: 16px;
            background-color: #0056b3; /* Dark blue button */
            color: #fff; /* White text */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out; /* Add a smooth transition for the background color */
        }

        button:hover {
            background-color: #003366; /* Darker blue on hover */
        }

        nav {
            display: flex;
            margin-top: 20px;
        }

        nav a {
            padding: 10px 15px;
            text-decoration: none;
            color: #fff;
            background-color: #0056b3; /* Dark blue button */
            border-radius: 5px;
            margin-right: 10px;
            transition: background-color 0.3s ease-in-out; /* Add a smooth transition for the background color */
        }

        nav a:hover {
            background-color: #003366; /* Darker blue on hover */
        }

        .contact-content {
            text-align: left;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff; /* White background for contact content */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Box shadow for a subtle lift effect */
        }

        @keyframes scaleUp {
            0% {
                transform: scale(0.5);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>
</head>

<body>
<div class="container">
    <h1>RandomStudent</h1>
</div>
<nav>
    <a href="{{ route('index') }}">Home</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('service') }}">Services</a>
    <a href="{{ route('contact') }}">Contact</a>
</nav>
<div class="contact-content">
    <h2>Contact Us</h2>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt ex vel magna feugiat, a luctus
        lectus convallis. Nullam bibendum diam vel leo bibendum ullamcorper.
    </p>
    <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Your Name">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Your Email">

        <label for="message">Message:</label>
        <textarea id="message" name="message" placeholder="Your Message"></textarea>

        <button type="submit">Send Message</button>
    </form>
</div>
</body>

</html>
