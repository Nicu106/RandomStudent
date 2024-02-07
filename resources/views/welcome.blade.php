<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Student Chooser</title>
    <link rel="stylesheet" href="css/index.css">
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
