<!doctype html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:29:18 GMT -->
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}"/>
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>MEANING GIFT</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>

    <!-- Bootstrap core CSS     -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <!--  Material Dashboard CSS    -->
    <link href="{{asset('assets/css/material-dashboard.css')}}" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet"/>
    <!--     Fonts and icons     -->
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/google-roboto-300-700.css')}}" rel="stylesheet"/>
</head>

<body>
<div class="wrapper">
    <div class="sidebar" data-active-color="rose" data-background-color="black"
         data-image="{{asset('assets/img/sidebar-1.jpg')}}">
        <!--
    Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
    Tip 2: you can also add an image using data-image tag
    Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
        <div class="logo">
            <a href="http://www.creative-tim.com/" class="simple-text">
                <img style="width: 100%" src="{{asset('img/brand/logo.png')}}" alt="">
            </a>
        </div>
        <div class="logo logo-mini">
            <a href="http://www.creative-tim.com/" class="simple-text">
                MG
            </a>
        </div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="{{asset('img/avatars/admin.jpg')}}"/>
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        Tania Andrew
                        <b class="caret"></b>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#">My Profile</a>
                            </li>
                            <li>
                                <a href="#">Edit Profile</a>
                            </li>
                            <li>
                                <a href="#">Settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a data-toggle="collapse" href="#pagesExamples">
                        <i class="material-icons">image</i>
                        <p>Product Manager
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="pagesExamples">
                        <ul class="nav">
                            <li>
                                <a href="pages/pricing.html">Create New</a>
                            </li>
                            <li>
                                <a href="pages/timeline.html">List Product</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="#componentsExamples">
                        <i class="material-icons">apps</i>
                        <p>Order Manager
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="componentsExamples">
                        <ul class="nav">
                            <li>
                                <a href="components/buttons.html">Create New</a>
                            </li>
                            <li>
                                <a href="components/grid.html">List Product</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                        <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                        <i class="material-icons visible-on-sidebar-mini">view_list</i>
                    </button>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> Dashboard </a>
                </div>
                <div class="collapse navbar-collapse">
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group form-search is-empty">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="material-input"></span>
                        </div>
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        @section('content')
        @show()
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <a href="http://www.creative-tim.com/">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>
    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="{{asset('assets/js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/jquery-ui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/material.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{asset('assets/js/moment.min.js')}}"></script>
<!--  Charts Plugin -->
<script src="{{asset('assets/js/chartist.min.js')}}"></script>
<!--  Plugin for the Wizard -->
<script src="{{asset('assets/js/jquery.bootstrap-wizard.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/bootstrap-notify.js')}}"></script>
<!--   Sharrre Library    -->
<script src="{{asset('assets/js/jquery.sharrre.js')}}"></script>
<!-- DateTimePicker Plugin -->
<script src="{{asset('assets/js/bootstrap-datetimepicker.js')}}"></script>
<!-- Vector Map plugin -->
<script src="{{asset('assets/js/jquery-jvectormap.js')}}"></script>
<!-- Sliders Plugin -->
<script src="{{asset('assets/js/nouislider.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<!--<script src="{{asset('assets/js/jquery.select-bootstrap.js')}}"></script>-->
<!-- Select Plugin -->
<script src="{{asset('assets/js/jquery.select-bootstrap.js')}}"></script>
<!--  DataTables.net Plugin    -->
<script src="{{asset('assets/js/jquery.datatables.js')}}"></script>
<!-- Sweet Alert 2 plugin -->
<script src="{{asset('assets/js/sweetalert2.js')}}"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{asset('assets/js/jasny-bootstrap.min.js')}}"></script>
<!--  Full Calendar Plugin    -->
<script src="{{asset('assets/js/fullcalendar.min.js')}}"></script>
<!-- TagsInput Plugin -->
<script src="{{asset('assets/js/jquery.tagsinput.js')}}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('assets/js/material-dashboard.js')}}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
</html>