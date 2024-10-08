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
            color: #000000; /* White text */
            font-family: 'Arial', sans-serif;
        }

        .container {
            text-align: center;
            margin-bottom: 20px;
        }

        input {
            width: 200px; /* You can adjust the width as needed */
            padding: 10px;
            font-size: 16px;
            margin-right: 10px;
            border: 1px solid #fff; /* White border */
            border-radius: 5px; /* Round the corners */
            outline: none;
            transition: border-color 0.3s ease-in-out; /* Add a smooth transition for the border color */
        }

        input:focus {
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

        .service-content {
            text-align: left;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff; /* White background for service content */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Box shadow for a subtle lift effect */
        }
        .container {
            text-align: center;
            margin-bottom: 20px;
            color:white !important;
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
    <a href="{{Route('index')}}">Home</a>
    <a href="{{Route('about')}}">About</a>
    <a href="{{Route('service')}}">Services</a>
    <a href="{{Route('contact')}}">Contact</a>
</nav>
<div class="service-content">
    <h2>Random Student Chooser App 😵‍💫🫡😎</h2>
    <p>Welcome to our Random Student Chooser App! This handy tool helps you randomly select a student to perform a task or answer a question.</p>
    <p>Simply enter the number of students, click the button, and let the app make the decision for you. It's a fun and fair way to engage your students!</p>
    <p>Ready to add some excitement to your classroom? Give it a try!</p>
    <center><button class="button" href="{{Route('test')}}">Dowland file</button></center>
</div>
</div>
</body>
</html>
