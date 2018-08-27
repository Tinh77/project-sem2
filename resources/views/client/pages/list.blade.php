@extends('client.layout.master')
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
                                <h3 class="font-weight-bold dark-grey-text">Danh mục sản phẩm</h3>
                                <div class="divider border-top"></div>
                                @foreach($list_obj as $key => $item)
                                    <p><a class="dark-grey-text" href="/client/category-gift/{{$key}}">{{$item}}</a></p>
                                @endforeach

                            </div>

                            <!-- Filter by category-->
                            <div class="col-md-6 col-lg-12 mb-5">
                                <h3 class="font-weight-bold dark-grey-text">Phân loại theo tuổi</h3>
                                <div class="divider border-top"></div>

                                <!--Radio group-->
                                <div class="form-group ">
                                    <input name="group100" type="radio" id="radio100">
                                    <label for="radio100" class="dark-grey-text">Tất cả</label>
                                </div>

                                <div class="form-group">
                                    <input name="group100" type="radio" id="radio101" checked>
                                    <label for="radio101" class="dark-grey-text">0 tháng - 6 tháng</label>
                                </div>

                                <div class="form-group">
                                    <input name="group100" type="radio" id="radio102">
                                    <label for="radio102" class="dark-grey-text">6 tháng - 12 tháng</label>
                                </div>

                                <div class="form-group">
                                    <input name="group100" type="radio" id="radio103">
                                    <label for="radio103" class="dark-grey-text">trên 12 tháng</label>
                                </div>
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
                                            <div class="bg-slide-list" --}}
                                                 style="background-image: url('{{\JD\Cloudder\Facades\Cloudder::show($item -> images, array('width'=>500, 'height'=>500,'crop'=>'fit'))}}');background-size: cover;background-repeat: no-repeat;background-position: center;width: 100%;height: 200px"></div>
                                            <a>
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Category & Title-->

                                            <h5 class="card-title mb-1"><strong><a href=""
                                                                                   class="dark-grey-text">{{$item -> name}}</a></strong>
                                            </h5>
                                        {{--<span class="badge badge-danger mb-2">bestseller</span>--}}
                                        <!-- Rating -->
                                            <!--Card footer-->
                                            <div class="card-footer row pb-0">
                                                {{--<span class="float-left"><img class="img-fluid w-25" src="https://i.pinimg.com/originals/53/37/49/5337490ca1097befda8a3a81e0b77af4.jpg" alt="">--}}
                                                {{--</span>--}}
                                                {{--<span class="float-right">--}}
                                                {{--<a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">--}}
                                                {{--<i class="fa fa-heart"></i>--}}
                                                {{--</a>--}}
                                                {{--</span>--}}
                                                <div class="col-sm-6" style="padding: 0;margin: 0;!important;">
                                                    <img class="avatar" style="width: 50px;height: 50px"
                                                         src="https://i.pinimg.com/originals/53/37/49/5337490ca1097befda8a3a81e0b77af4.jpg"
                                                         alt="">
                                                </div>
                                                <div class="col-sm-6"
                                                     style="padding: 0;margin: 0;!important;padding-top: 15px">
                                                    <p>Thanh tung</p>
                                                </div>
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









{{--@foreach($list_obj as $key => $item)--}}
{{--<tr>--}}
{{--<td>--}}
{{--<a href="/client/category-gift/{{$key}}">{{$item}}</a>--}}
{{--</td>--}}
{{--</tr>--}}
{{--@endforeach--}}


{{--@foreach($obj as $item)--}}
{{--<a href="/client/gift/{{$item->id}}">--}}
{{--<article class="image col-md-3 ">--}}
{{--<div class="bg-slide-list"--}}
{{--style="background-image: url('{{\JD\Cloudder\Facades\Cloudder::show($item -> images, array('width'=>500, 'height'=>500,'crop'=>'fit'))}}');background-size: cover;background-repeat: no-repeat;background-position: center;width: 200px;height: 200px"></div>--}}
{{--<p>{{$item->name}}</p>--}}
{{--<a>-Dành cho độ tuổi...<br><i class="fas fa-heart"></i></a>--}}
{{--</article>--}}
{{--</a>--}}
{{--@endforeach--}}