<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="{{asset('client-css/app.css')}}">
    <link rel="stylesheet" href="{{asset('client-css/styles.css')}}">
    {{--<link rel="stylesheet" href="/fonts/font-awesome.min.css">--}}
    <link rel="stylesheet" href="/fonts/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('client-css/Animated-Testimomial-1.css')}}">
    <link rel="stylesheet" href="{{asset('client-css/Animated-Testimomial.css')}}">
    <link rel="stylesheet" href="{{asset('client-css/Animated-Testimomial.css')}}">
    <link rel="stylesheet" href="{{asset('client-css/Footer-Dark.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('client-css/Footer-Dark.css')}}">
    <link rel="stylesheet" href="{{asset('client-css/Simple-Header-y-Navbar-adaptativo-1.css')}}">
    <link rel="stylesheet" href="{{asset('client-css/Simple-Header-y-Navbar-adaptativo.css')}}">
    <link rel="stylesheet" href="{{asset('client-css/Simple-Slider.css')}}">
    <link rel="stylesheet" href="{{asset('client-css/Simple-Slider.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway+Dots">
    <link rel="stylesheet" href="{{asset('client-css/News-article-for-homepage-by-Ikbendiederiknl.css')}}">
    <link rel="stylesheet" href="{{asset('client-css/Pretty-Search-Form.css')}}">
    <link rel="stylesheet" href="{{asset('client-css/sidebar-1.css')}}">
    <link rel="stylesheet" href="{{asset('client-css/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('client-css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('client-css/price.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('client-css/list.css')}}">
    <link rel="stylesheet" href="{{asset('client-css/dropdown.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>

<body>
<div class="bg-white">
    @include('client.partial.header')
    <div class="container">
        @section('content')
        @show
    </div>
    @include('client.partial.footer')
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="{{asset('client-js/app.js')}}"></script>
<script src="{{asset('client-js/js.js')}}"></script>
<script src="{{asset('client-js/Animated-Testimomial.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
<script src="{{asset('client-js/Simple-Slider.js')}}"></script>
<script id="bs-live-reload" data-sseport="55602" data-lastchange="1533970729387"
        src="{{asset('client-js/livereload.js')}}"></script>
<script scr="/client-js/price.js"></script>
<script scr="/client-js/list.js"></script>
<script id="bs-live-reload" data-sseport="55602" data-lastchange="1533973033728" src="/client-js/livereload.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
