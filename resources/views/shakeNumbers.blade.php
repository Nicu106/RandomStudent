<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Student Chooser - Back Page with Random Circles and Gravity</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #990000; /* Red matte theme */
            color: #ff9e9e; /* White text */
            font-family: 'Arial', sans-serif;
            position: relative; /* Add relative positioning to the body */
            overflow: hidden; /* Hide overflow to prevent scrolling */
        }

        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
            padding: 10px;
            font-size: 16px;
            background-color: #0056b3; /* Dark blue button */
            color: #fff; /* White text */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out; /* Add a smooth transition for the background color */
        }

        .back-button:hover {
            background-color: #003366; /* Darker blue on hover */
        }

        .content {
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff; /* White background for content */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Box shadow for a subtle lift effect */
        }

        .random-circle {
            width: 100px;
            height: 100px;
            background-color: #0056b3; /* Dark blue circle */
            border-radius: 50%; /* Create a circle using border-radius */
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.5em;
        }
    </style>
</head>

<body>
<a href="{{Route('index')}}" class="back-button">Back</a>
<div class="content">
    <h2>Here is the page where you are going to pick student</h2>
</div>

<script>
    function createRandomCircle() {
        var circle = document.createElement('div');
        circle.className = 'random-circle';
        circle.innerHTML = '<span>' + Math.floor(Math.random() * {{$inputValue}}) + '</span>';
        document.body.appendChild(circle);

        // Set initial random position
        circle.style.left = Math.random() * (window.innerWidth - circle.clientWidth) + 'px';
        circle.style.top = Math.random() * (window.innerHeight - circle.clientHeight) + 'px';

        // Apply gravity
        setInterval(function () {
            applyGravity(circle);
        }, 20);
    }

    function applyGravity(circle) {
        // Calculate current top position
        var currentTop = parseFloat(circle.style.top) || 0;

        // Apply gravity by incrementing the top position
        var gravity = 1; // Adjust gravity strength
        circle.style.top = currentTop + gravity + 'px';

        // Check if the circle reached the bottom
        var windowHeight = window.innerHeight;
        var circleHeight = circle.clientHeight;
        var threshold = windowHeight - circleHeight;

        if (currentTop >= threshold) {
            // Block further movement
            circle.style.top = threshold + 'px';
        }
    }

    // Create circles
    for (var i = 0; i < {{$inputValue}}; i++) { // Change 5 to the desired number of circles
        createRandomCircle();
    }
</script>
</body>

</html>
