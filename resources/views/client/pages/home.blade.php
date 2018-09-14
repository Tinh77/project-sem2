@extends('client.layout.master')
@section('page-title', 'Trang chủ')
@section('content')
    @include('client.partial.intro')
    <main>

        <div class="container">

            <!--Section: Products v.3-->
            <section class="section pb-3 wow fadeIn" data-wow-delay="0.3s">

                <!--Section heading-->
                <h2 class="font-weight-bold text-center my-5">Danh mục quà tặng</h2>
                <p class="text-center grey-text mb-5 mx-auto w-responsive">Tìm kiếm quà tặng theo danh mục mong
                    muốn.</p>
                <!--Section description-->
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    @foreach($categories as $item)
                        <div class="col-lg col-md col-sm col mb-4">
                            <!--Card-->
                            <div class="card card-ecommerce h-100">
                                <!--Card image-->
                                <div class="view overlay z-depth-1"
                                     style="background-image: url('{{$item -> thumbnail}}'); background-size: cover; width: 100%; height: 220px;">
                                </div>
                                <!--Card content-->
                                <div class="card-body text-center no-padding">
                                    <!--Category & Title-->
                                    <h4 class="card-title">
                                        <a href="/client/category-gift/{{$item ->id}}">{{$item ->name}}</a>
                                    </h4>

                                    <!--Description-->
                                    <p class="card-text">{{$item->description}}</p>
                                    <!--Card footer-->
                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>
                @endforeach
                <!--Grid column-->
                </div>
                <!--Grid row-->

            </section>
            <!--Section: Products v.3-->

            <hr class="mb-5 mt-4">

            <!--Section: Products v.5-->
            <section class="section pb-3 wow fadeIn" data-wow-delay="0.3s">

            {{--<a class="btn btn-success" onclick="toastr.success('Hi! I am success message.');">Success message</a>--}}
            <!--Section heading-->
                <h2 class="font-weight-bold text-center my-5">Quà tặng dành cho bạn</h2>
                <!--Section description-->
                <p class="text-center grey-text mb-5 mx-auto w-responsive">Những sản phẩm mới nhất đang cần tìm chủ mới.
                    Click quan tâm để liên hệ với người cho.</p>

                <!--Carousel Wrapper-->
                <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                    <!--Controls-->
                    <div class="controls-top">
                        <a class="btn-floating primary-color" href="#multi-item-example" data-slide="prev">
                            <i class="fa fa-chevron-left"></i>
                        </a>
                        <a class="btn-floating primary-color" href="#multi-item-example" data-slide="next">
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                    <!--Controls-->

                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li class="primary-color" data-target="#multi-item-example" data-slide-to="0"
                            class="active"></li>
                        <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>
                        <li class="primary-color" data-target="#multi-item-example" data-slide-to="2"></li>
                    </ol>
                    <!--Indicators-->

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active row">
                            @for($i = 0; $i < 3; $i++)
                                <div class="col-md-4">
                                    <!--Card-->
                                    <div class="card card-cascade narrower card-ecommerce">
                                        <!--Card image-->
                                        <a href="/client/gift/{{$obj[$i]->id}}">
                                            <div class="view view-cascade overlay"
                                                 style="background-image: url('{{\JD\Cloudder\Facades\Cloudder::show($obj[$i] -> images, array('width'=>500, 'height'=>500))}}'); background-size: cover; width: 100%; height: 272px;">
                                            </div>
                                        </a>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body card-body-cascade text-center no-padding h-100">
                                            <!--Category & Title-->
                                            {{--<a href="" class="text-muted">--}}
                                            {{--<h5>{{$list_obj[$i]->name}}</h5>--}}
                                            {{--</a>--}}
                                            <h4 class="card-title">
                                                <a href="/client/gift/{{$obj[$i]->id}}">{{$obj[$i]->name}}</a>
                                            </h4>

                                            <!--Description-->
                                            <p class="card-text">{{str_limit($obj[$i]->description,80)}}</p>

                                            <!--Card footer-->
                                            <div class="card-footer">
                                                <span class="float-left"><i
                                                            class="fa fa-clock-o"></i> {{$obj[$i]->created_at->format('Y-m-d')}}</span>
                                                <span class="float-right">
                                                <a class="card-link" title="Quick Look"
                                                   href="/client/gift/{{$obj[$i]->id}}">
                                                  <i class="fa fa-eye"></i> chi tiết
                                                </a>
                                              </span>
                                            </div>

                                        </div>
                                        <!--Card content-->

                                    </div>
                                    <!--Card-->

                                </div>
                            @endfor
                        </div>
                        <!--First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">

                            @for($i = 3; $i < 6; $i++)
                                <div class="col-md-4">
                                    <!--Card-->
                                    <div class="card card-cascade narrower card-ecommerce">
                                        <!--Card image-->
                                        <a href="/client/gift/{{$obj[$i]->id}}">
                                            <div class="view view-cascade overlay"
                                                 style="background-image: url('{{$obj[$i]->images}}'); background-size: cover; width: auto; height: 272px;">
                                            </div>
                                        </a>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body card-body-cascade text-center no-padding h-100">
                                            <!--Category & Title-->
                                            {{--<a href="" class="text-muted">--}}
                                            {{--<h5>{{$list_obj[$i]->name}}</h5>--}}
                                            {{--</a>--}}
                                            <h4 class="card-title">
                                                <a href="/client/gift/{{$obj[$i]->id}}">{{$obj[$i]->name}}</a>
                                            </h4>

                                            <!--Description-->
                                            <p class="card-text">{{str_limit($obj[$i]->description,80)}}</p>

                                            <!--Card footer-->
                                            <div class="card-footer">
                                                <span class="float-left"><i
                                                            class="fa fa-clock-o"></i> {{$obj[$i]->created_at->format('Y-m-d')}}</span>
                                                <span class="float-right">
                                                <a class="card-link" title="Quick Look"
                                                   href="/client/gift/{{$obj[$i]->id}}">
                                                  <i class="fa fa-eye"></i> chi tiết
                                                </a>
                                              </span>
                                            </div>

                                        </div>
                                        <!--Card content-->

                                    </div>
                                    <!--Card-->

                                </div>
                            @endfor
                        </div>
                        <!--Second slide-->

                        <!--Third slide-->
                        <div class="carousel-item">

                            @for($i = 6; $i < 9; $i++)
                                <div class="col-md-4">
                                    <!--Card-->
                                    <div class="card card-cascade narrower card-ecommerce">
                                        <!--Card image-->
                                        <a href="/client/gift/{{$obj[$i]->id}}">
                                            <div class="view view-cascade overlay"
                                                 style="background-image: url('{{$obj[$i]->images}}'); background-size: cover; width: auto; height: 272px;">
                                            </div>
                                        </a>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body card-body-cascade text-center no-padding h-100">
                                            <h4 class="card-title">
                                                <a href="/client/gift/{{$obj[$i]->id}}">{{$obj[$i]->name}}</a>
                                            </h4>

                                            <!--Description-->
                                            <p class="card-text">{{str_limit($obj[$i]->description,80)}}</p>

                                            <!--Card footer-->
                                            <div class="card-footer">
                                                <span class="float-left"><i
                                                            class="fa fa-clock-o"></i> {{$obj[$i]->created_at->format('Y-m-d')}}</span>
                                                <span class="float-right">
                                                <a class="card-link" title="Quick Look"
                                                   href="/client/gift/{{$obj[$i]->id}}">
                                                  <i class="fa fa-eye"></i> chi tiết
                                                </a>
                                              </span>
                                            </div>

                                        </div>
                                        <!--Card content-->

                                    </div>
                                    <!--Card-->

                                </div>
                            @endfor

                        </div>
                        <!--Third slide-->

                    </div>
                    <!--Slides-->
                    <a class="text-blue pull-right mt-5" href="/client/gift">Xem thêm <i
                                class="fa fa-angle-double-right"></i></a>
                </div>
                <!--Carousel Wrapper-->

            </section>
            <!--Section: Products v.5-->

        </div>

        <!-- Streak Section -->
        <div class="streak streak-photo"
             style="background-image:url('{{asset('img/brand/bg-02.jpg')}}')">

            <div class="flex-center white-text">
                <ul class="list-unstyled">
                    <li>
                        <h1 class=" white-text">
                            <strong>500+</strong> happy customers</h1>
                    </li>

                </ul>
            </div>

        </div>
        <!-- /.Streak Section -->

        <div class="container">

            <!--Projects section v.4-->
            <section class="text-center pb-5 wow fadeIn">

                <!--Section heading-->
                <h2 class="font-weight-bold text-center h1 my-5">Cho đi để nhận lại</h2>
                <!--Section description-->
                <p class="text-center grey-text mb-5 mx-auto w-responsive">


                    Tình người chẳng phải tìm kiếm ở nơi nào xa xôi mà hiện hữu ngay trong những hành động rất đời thường và bình dị quanh chúng ta mỗi ngày.
                </p>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12 mb-4">
                        <div class="card card-image"
                             style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGRfG_JaywFCGWHnwLLaIL_1nqLxz8qBw70PM11Bo9tMtlFqkkkw');">
                            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                                <div>
                                    <a href="" class="purple-text">
                                        <h5>
                                            <i class="fa fa-plane pr-2"></i></h5>
                                    </a>
                                    <h3 class="mb-4 mt-4">
                                        <strong>Nghĩa cử</strong>
                                    </h3>
                                    <p>
                                        Những nghĩa cử khiến bạn tin rằng cuộc đời vẫn đẹp và đáng sống lắm</p>
                                    <a class="btn btn-secondary btn-sm" href="/client/post1">
                                        <i class="fa fa-clone left"></i>Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
                        <div class="card card-image"
                             style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxyuARr2MYS3jUHv8ubofoPCYnTCyesccLChdXBipXp2fdFl_2zw');">
                            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                                <div>
                                    <a href="" class="pink-text">
                                        <h5>
                                            <i class="fa fa-eye pr-2"></i></h5>
                                    </a>
                                    <h3 class="mb-4 mt-4">
                                        <strong>Yêu thương</strong>
                                    </h3>
                                    <p>“Yêu thương cho đi để nhận lại” cho đi một để nhận lại gấp trăm ngàn lần yêu thương.
                                        Trao yêu thương sẽ nhận lại yêu thương, cái được nhận lại còn lớn lao gấp bội lần. </p>
                                    <a class="btn btn-pink btn-sm" href="/client/pages/post2">
                                        <i class="fa fa-clone left"></i>Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
                        <div class="card card-image"
                             style="background-image: url('https://yeutre.vn/cdn/medias/uploads/19/19501-chup-anh-cho-con.jpg');">
                            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                                <div>
                                    <a href="" class="green-text">
                                        <h5>
                                            <i class="fa fa-camera pr-2"></i></h5>
                                    </a>
                                    <h3 class="mb-4 mt-4">
                                        <strong>Cái nắm tay</strong>
                                    </h3>
                                    <p>Mỗi bàn tay từ khi sinh ra đều có kẽ hở không phải là khuyết thiếu mà để chờ được lấp đầy
                                        để mười ngón tay đan quyện vào nhau đi qua hành trình của chia sẻ và yêu thương.</p>
                                    <a class="btn btn-success btn-sm" href="/client/post3">
                                        <i class="fa fa-clone left"></i>Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Projects section v.4-->

        </div>

    </main>
@endsection

