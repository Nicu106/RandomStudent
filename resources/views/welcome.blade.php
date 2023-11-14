<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Student Chooser</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #990000; /* Red matte theme */
            color: #c79a9a; /* White text */
            font-family: 'Arial', sans-serif;
        }

        .container {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 24px;
            font-weight: bold;
            color: white; /* White text */
        }

        input,
        textarea {
            width: 200px; /* You can adjust the width as needed */
            padding: 10px;
            font-size: 16px;
            margin: 10px;
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
<div class="logo">RandomStudent</div>
<div class="container">
    <form method="get" action="{{Route('getInput')}}">
        <label for="myInput" style="color:white;">Enter a number:</label>
        <input type="number" id="myInput" name="randomNumber" placeholder="Enter a number">
        <button type="submit">Submit</button>
</div>
<nav>
    <a href="{{Route('index')}}">Home</a>
    <a href="{{Route('about')}}">About</a>
    <a href="{{Route('service')}}">Services</a>
    <a href="{{Route('contact')}}">Contact</a>
</nav>
<div class="contact-content">
    <h2>Home</h2>
    <p>Hi, I am Nicu and this is one of my apps,<br>if you have problems all time in your classroom to pick a student<br>you can use my randomizer app and nobody will argue</p>
{{--    <p> @isset($inputValue)--}}
{{--            Your number is :{{ $inputValue }}--}}
{{--        @else--}}
{{--            Your number is not set.--}}
{{--        @endisset</p>--}}
</div>
</body>

</html>
