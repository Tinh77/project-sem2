<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Spin2Win Wheel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>



    <link rel="stylesheet" href="/client-css/style.css">




</head>

<body>


<div class="wheelContainer">
    <svg class="wheelSVG" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" text-rendering="optimizeSpeed">
        <defs>
            <filter id="shadow" x="-100%" y="-100%" width="550%" height="550%">
                <feOffset in="SourceAlpha" dx="0" dy="0" result="offsetOut"></feOffset>
                <feGaussianBlur stdDeviation="9" in="offsetOut" result="drop" />
                <feColorMatrix in="drop" result="color-out" type="matrix"
                               values="0 0 0 0   0
              0 0 0 0   0
              0 0 0 0   0
              0 0 0 .3 0"/>
                <feBlend in="SourceGraphic" in2="color-out" mode="normal" />
            </filter>

        </defs>
        <g class="mainContainer">
            <g class="wheel"/>
        </g>
        <g class="centerCircle" />

        <g class="wheelOutline" />
        <g class="pegContainer" >
            <path  class="peg" fill="#EEEEEE" d="M22.139,0C5.623,0-1.523,15.572,0.269,27.037c3.392,21.707,21.87,42.232,21.87,42.232	s18.478-20.525,21.87-42.232C45.801,15.572,38.623,0,22.139,0z" />
        </g>
        <g class="valueContainer" />

    </svg>
    <div class="toast">
        <p/>
    </div>


</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/utils/Draggable.min.js'></script>
<script src='/client-js/ThrowPropsPlugin.min.js'></script>
<script src='/client-js/Spin2WinWheel.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/TextPlugin.min.js'></script>
<script src="/client-js/index.js"></script>




</body>
</html>
