@extends('client.layout.master')
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
                    @foreach($category as $item)
                        <div class="col-lg col-md col-sm col mb-4">
                            <!--Card-->
                            <div class="card card-ecommerce h-100">
                                <!--Card image-->
                                <div class="view overlay z-depth-1"
                                     style="background-image: url('{{$item -> thumbnail}}'); background-size: cover; width: 198px; height: 220px;">
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

            <div class="flex-center white-text pattern-1" style="background-attachment: f">
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
                <h2 class="font-weight-bold text-center h1 my-5">Chia sẻ kinh nghiệm</h2>
                <!--Section description-->
                <p class="text-center grey-text mb-5 mx-auto w-responsive">Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                    laborum.</p>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12 mb-4">
                        <div class="card card-image"
                             style="background-image: url('https://mdbootstrap.com/img/Photos/Others/slide%20(31).jpg');">
                            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                                <div>
                                    <a href="" class="purple-text">
                                        <h5>
                                            <i class="fa fa-plane pr-2"></i>Fashion week</h5>
                                    </a>
                                    <h3 class="mb-4 mt-4">
                                        <strong>Project title</strong>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus quod minima
                                        assumenda qui mollitia
                                        architecto soluta at ipsa itaque nam, aliquam minus odit expedita voluptatibus
                                        fugiat amet, nostrum error
                                        dolorum!.</p>
                                    <a class="btn btn-secondary btn-sm">
                                        <i class="fa fa-clone left"></i> View project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
                        <div class="card card-image"
                             style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(60).jpg');">
                            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                                <div>
                                    <a href="" class="pink-text">
                                        <h5>
                                            <i class="fa fa-camera pr-2"></i>Street style</h5>
                                    </a>
                                    <h3 class="mb-4 mt-4">
                                        <strong>Project title</strong>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat,
                                        laboriosam, voluptatem, optio
                                        vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum
                                        dignissimos.</p>
                                    <a class="btn btn-pink btn-sm">
                                        <i class="fa fa-clone left"></i> View project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
                        <div class="card card-image"
                             style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(58).jpg');">
                            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                                <div>
                                    <a href="" class="green-text">
                                        <h5>
                                            <i class="fa fa-eye pr-2"></i>Summer trends</h5>
                                    </a>
                                    <h3 class="mb-4 mt-4">
                                        <strong>Project title</strong>
                                    </h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat,
                                        laboriosam, voluptatem, optio
                                        vero odio nam sit officia accusamus minus error nisi architecto nulla ipsum
                                        dignissimos.</p>
                                    <a class="btn btn-success btn-sm">
                                        <i class="fa fa-clone left"></i> View project</a>
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