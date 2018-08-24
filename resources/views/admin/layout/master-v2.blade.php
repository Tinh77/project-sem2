<!doctype html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:29:18 GMT -->
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="/assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{ $page_title }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap core CSS     -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="/assets/css/material-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="/assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->

    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/google-roboto-300-700.css')}}" rel="stylesheet"/>

</head>

<body>
<div class="wrapper">
    <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="/assets/img/sidebar-1.jpg">
        <!--
    Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
    Tip 2: you can also add an image using data-image tag
    Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
        <div class="logo">
            <a href="/admin" class="simple-text">
                MEANINGGIFT
            </a>
        </div>
        <div class="logo logo-mini">
            <a href="" class="simple-text">
                MG
            </a>
        </div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="/img/avatars/admin.jpg" />
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        Admin
                        <b class="caret"></b>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#">Thông tin cá nhân</a>
                            </li>
                            <li>
                                <a href="#">Sửa</a>
                            </li>
                            <li>
                                <a href="#">Cài đặt</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li>
                    <a href="dashboard.html">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="{{ $current_menu == 'category_manager' ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#componentsExamples">
                        <i class="material-icons">apps</i>
                        <p>Danh mục sản phẩm
                            <b class="caret"></b>
                        </p>
                    </a>
                    @if($current_menu == 'category_manager')
                        <div class="collapse in" id="componentsExamples">
                            <ul class="nav">
                                @if($current_menu == 'category_manager' && $current_sub_menu == 'edit')
                                    <li class="active">
                                        <a href="{{ url()->current() }}">Sửa thông tin</a>
                                    </li>
                                @endif
                                <li class="{{ ($current_menu == 'category_manager' && $current_sub_menu == 'create_new') ? 'active' : ''}}">
                                    <a href="/admin/category/create">Thêm mới</a>
                                </li>
                                <li class="{{ ($current_menu == 'category_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/admin/category">Danh sách</a>
                                </li>
                            </ul>
                        </div>
                    @else
                        <div class="collapse" id="componentsExamples">
                            <ul class="nav">
                                @if($current_menu == 'category_manager' && $current_sub_menu == 'edit')
                                    <li class="active">
                                        <a href="{{ url()->current() }}">Sửa thông tin</a>
                                    </li>
                                @endif
                                <li class="{{ ($current_menu == 'category_manager' && $current_sub_menu == 'create_new') ? 'active' : ''}}">
                                    <a href="/admin/category/create">Thêm mới</a>
                                </li>
                                <li class="{{ ($current_menu == 'category_manager' && $current_sub_menu == 'list_item') ? 'active' : ''}}">
                                    <a href="/admin/category">Danh sách</a>
                                </li>
                            </ul>
                        </div>
                    @endif
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
                            <input type="text" class="form-control" placeholder="Search...">
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
        <div class="content">
            <div class="container-fluid">
                @section('content')
                @show()
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Trang chủ
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Công ty
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Bài viết
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
<script src="/assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/js/material.min.js" type="text/javascript"></script>
<script src="/assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="/assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="/assets/js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="/assets/js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="/assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="/assets/js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="/assets/js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="/assets/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="/assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="/assets/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<!--<script src="/assets/js/jquery.select-bootstrap.js"></script>-->
<!-- Select Plugin -->
<script src="/assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="/assets/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="/assets/js/sweetalert2.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="/assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="/assets/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="/assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="/assets/js/material-dashboard.js"></script>
<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:32:16 GMT -->
</html>