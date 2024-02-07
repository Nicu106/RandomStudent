<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Student Chooser - Back Page with Random Circles and Gravity</title>
    <link rel="stylesheet" href="css/shakeNumbers.css">
</head>

<body>
<div class="button-container">
    <a href="{{Route('index')}}" class="back-button">Back</a>
    <a  onclick="refresh()" class="other-button">buan ce mai faci</a>
</div>
<div class="content">
    <h2>Here is the page where you are going to pick </br>students number: {{$inputValue}}</h2>
</div>

<script>
     const listaElevi = ['Gicu', 'Roma', 'Ionut','Madalina','Nicoleta','victor','Dinu','Igor','Patricia','Nicu','Alina','Valeria','Doina'];

    function createRandomCircle() {

            var circle = document.createElement('div');
            circle.id = a;
            circle.className = 'random-circle';
            circle.innerHTML = '<span>' + listaElevi[a] + '</span>';
            document.body.appendChild(circle);

            // pozitie random
            circle.style.left = Math.random() * (window.innerWidth - circle.clientWidth) + 'px';
            circle.style.top = Math.random() * (window.innerHeight - circle.clientHeight) + 'px';

            // setez graviatatea
            setInterval(function () {
                applyGravity(circle);
            }, 10);

    }

    function applyGravity(circle) {

        var currentTop = parseFloat(circle.style.top) || 0;
        var gravity = 1;
        circle.style.top = currentTop + gravity + 'px';
        var windowHeight = window.innerHeight;
        var circleHeight = circle.clientHeight;
        var threshold = windowHeight - circleHeight;
        if (currentTop >= threshold) {

            circle.style.top = threshold + 'px';
        }
    }

    for(var a=1; a <={{$inputValue}}; a++){
        createRandomCircle();
    }
    var randompciked = document.getElementById(Math.floor(Math.random() *{{$inputValue}} ));
    randompciked.className = 'specialCircle';
     let beat = new Audio('https://www.myinstants.com/en/instant/dramatic-chipmunk/?utm_source=copy&utm_medium=share');
     beat.play();

    function refresh(){
        location.reload();
    }
</script>
</body>
</html>
