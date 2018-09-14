<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>@yield('page-title')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- Jquery -->
    <script type="text/javascript" src="{{asset('MDB/js/jquery-3.3.1.min.js')}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('MDB/js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <link href="{{asset('MDB/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('MDB/css/mdb.min.css')}}" rel="stylesheet">
    <!-- Style.css -->
    <link href="{{asset('MDB/css/style.min.css')}}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('client-css/personal.css')}}">
    <link rel="stylesheet" href="{{asset('client-css/navbar.css')}}">
    @yield('stylesheet')

</head>

<body>
{{--<div class="bg-white">--}}
{{--@include('client.partial.header')--}}

{{--@yield('content')--}}
{{--@show--}}

{{--@yield('content_personal')--}}

{{--@include('client.partial.footer')--}}
{{--</div>--}}
<!--Main Navigation-->
@include('client.partial.header')
<!--Main Navigation-->
<!--Main Layout-->
@yield('content')
<!--Main Layout-->
<!--Footer-->
@include('client.partial.footer')
<script type="text/javascript" src="{{asset('client-js/client.js')}}"></script>
<script src="{{asset('MDB/js/jquery-3.3.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script src="{{asset('MDB/js/popper.min.js')}}"></script>
<script src="{{asset('MDB/js/bootstrap.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
{{--<script type="text/javascript" src="{{asset('js/app.js')}}"></script>--}}
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('MDB/js/mdb.min.js')}}"></script>
<!-- My js core JavaScript -->
<script type="text/javascript" src="{{asset('MDB/js/myJs.js')}}"></script>
<script type="text/javascript" src="{{asset('client-js/client.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    new WOW().init();
</script>
<script src="{{asset('MDB/js/modules/toastr.js')}}"></script>
@include('client.partial.message')
@if(session('success'))

    <script>
        toastr.options = {
            "closeButon": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": 300,
            "hideDuration": 1000,
            "timeOut": 30000,
            "extendedTimeOut": 5000,
            "showEasing": "swing",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr["success"]("{{ session('success')}} ");
    </script>
@endif
</body>

</html>
