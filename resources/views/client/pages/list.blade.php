@extends('client.layout.master')
@section('stylesheet')
    <style>
        .jactive {
            color: black!important;
            font-weight: bold;
        }
    </style>
@endsection

@section('content')
    <!-- Main Container -->
    <main class="content-margin">
        <div class="container mt-5 pt-3">
            <!--Navbar-->
            <nav class="navbar navbar-expand-lg  primary-color mt-5 mb-5 row">
                <div class="col-sm-4">
                    <a class="font-weight-bold text-dark mr-4" href="#">Categories</a>
                </div>
                <div class="col-sm-6">
                    <form class="search-form" role="search">
                        {{--@if(\Illuminate\Support\Facades\Session::has('message'))--}}
                        {{--<div class="alert{{\Illuminate\Support\Facades\Session::get('message-class')}}">{{\Illuminate\Support\Facades\Session::get('message')}}</div>--}}
                        {{--@endif--}}
                        <div class="form-group md-form my-0 waves-light">

                            {{--<input class="form-control mr-sm-2 w-50" name="key" value="{{$data['key']}}" type="search"--}}
                            {{--placeholder="Tìm kiếm sản phẩm mà bạn cần..."--}}
                            {{--aria-label="Search">--}}
                        </div>
                    </form>
                </div>
            </nav>
            <!--/.Navbar-->
            <div class="row pt-4">
                <!-- Sidebar -->
                <div class="col-lg-3">
                    <div class="">
                        <!-- Grid row -->
                        <div class="row">
                            <div class="col-md-6 col-lg-12 mb-5">
                                <!-- Panel -->
                                <h4 class="dark-grey-text">Danh mục sản phẩm</h4>
                                <div class="divider border-top"></div>
                                <p><a class="dark-grey-text" href="/client/gift">Tất cả</a></p>

                                <div class="jmenu">
                                    @foreach($list_obj as $key => $item)
                                        <p><a class="dark-grey-text text-center {{Request::segment(3) == $key ? 'jactive' : ''}}"
                                              href="/client/category-gift/{{$key}}">{{$item}}</a></p>
                                    @endforeach
                                </div>

                            </div>

                            <!-- Filter by category-->
                            <div class="col-md-6 col-lg-12 mb-5">
                                <h4 class=" dark-grey-text">Phân loại theo tuổi</h4>
                                <div class="divider border-top"></div>
                                <!--Radio <group-->
                                <form method="GET" id="searchForm" action="/client/gift">
                                    <!--/group-->
                                    <div class="form-group ">
                                        <label class="dark-grey-text {{Request::is('gift?group100=0') ? 'jactive' : ''}}">
                                            <input name="group100" value="0" type="radio" id="search_age_range">
                                            Tất cả</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="dark-grey-text {{Request::is('gift?group100=1') ? 'jactive' : ''}}">
                                            <input name="group100" value="1" type="radio" id="search_age_range">
                                            0 tháng - 6 tháng
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="dark-grey-text {{Request::is('gift?group100=2') ? 'jactive' : ''}}">
                                            <input name="group100" value="2" type="radio" id="search_age_range" >
                                            6 tháng - 12 tháng</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="dark-grey-text {{Request::is('gift?group100=3') ? 'jactive' : ''}}">
                                            <input name="group100" value="3" type="radio" id="search_age_range">
                                            trên 12 tháng</label>
                                    </div>
                                </form>
                                <!--Radio group-->
                            </div>
                            <!-- /Filter by category-->
                        </div>
                        <!-- /Grid row -->
                    </div>
                </div>
                <!-- /.Sidebar -->

                <!-- Content -->
                <div class="col-lg-9">
                    <!-- Products Grid -->
                    <section class="section pt-4">
                        <!-- Grid row -->

                        <div class="row">

                        @foreach($obj as $item)
                            <!--Grid column-->

                                <div class="col-lg-4 col-md-12 mb-4">

                                    <!--Card-->
                                    <div class="card card-ecommerce">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <div class="bg-slide-list"
                                                 style="background-image: url('{{\JD\Cloudder\Facades\Cloudder::show($item -> images, array('width'=>500, 'height'=>500,'crop'=>'fit'))}}');background-size: cover;background-repeat: no-repeat;background-position: center;width: 100%;height: 200px"></div>

                                            <a href="/client/gift/{{$item ->id}}">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Category & Title-->

                                            <h5 class="card-title mb-1"><a href="/client/gift/{{$item ->id}}"
                                                                           class="dark-grey-text">{{$item -> name}}</a>
                                            </h5>
                                            <p class="card-text ">{{str_limit($item->description,50)}}</p>
                                            <!-- Rating -->
                                            <!--Card footer-->
                                            <div class="card-footer">
                                                <span class="float-left"><i

                                                            class="fa fa-clock-o"></i>{{ Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}</span>

                                                <span class="float-right">
                                                <a class="card-link" title="chi tiết"
                                                   href="/client/gift/{{$item->id}}">
                                                  <i class="fa fa-eye"></i> chi tiết
                                                </a>
                                              </span>
                                            </div>

                                        </div>
                                        <!--Card content-->

                                    </div>
                                    <!--Card-->

                                </div>
                            @endforeach
                        </div>
                        <div class="row justify-content-center mb-4">
                            {{$obj->appends($_GET) -> links()}}
                        </div>
                        <!--Grid row-->
                    </section>
                    <!-- /.Products Grid -->

                </div>
                <!-- /.Content -->

            </div>

        </div>
        <!-- /.Main Container -->

    </main>
@endsection

@section('script')
    <script>
        $('.jmenu a').on('click', function() {
            $('.jmenu a').removeClass('jactive');
            $(this).addClass('jactive');
        })
    </script>

    <script>
        $('.form-group label').on('click', function() {
            $('.form-group label').removeClass('jactive');
            $(this).addClass('jactive');
        })
    </script>
@endsection
