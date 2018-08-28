@extends('client.layout.master')
@section('content')
    @include('client.partial.intro')
    <main>

        <div class="container">

            <!--Section: Products v.3-->
            <section class="section pb-3 wow fadeIn" data-wow-delay="0.3s">

                <!--Section heading-->
                <h1 class="font-weight-bold text-center h1 my-5">Danh mục sản phẩm đang tìm chủ mới</h1>
                <p class="text-center grey-text mb-5 mx-auto w-responsive">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Fugit, error amet numquam iure provident voluptate esse
                    quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>
                <!--Section description-->
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    @foreach($category as $item)
                        <div class="col-lg col-md-6 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay z-depth-1">
                                    {{--<img src="{{\JD\Cloudder\Facades\Cloudder::show($item -> images, array('width'=>500, 'height'=>500,'crop'=>'fit'))}}"--}}
                                    {{--class="card-img-top" alt="">--}}
                                    <img class="img-thumbnail" src="{{$item -> thumbnail}}" alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body text-center no-padding">
                                    <!--Category & Title-->
                                    <h4 class="card-title">
                                        <strong>
                                            <a href="/client/category-gift/{{$item ->id}}">{{$item ->name}}</a>
                                        </strong>
                                    </h4>

                                    <!--Description-->
                                    <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor.
                                    </p>
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
                <h1 class="font-weight-bold text-center h1 my-5">Những sản phẩm đang tìm chủ mới</h1>
                <!--Section description-->
                <p class="text-center grey-text mb-5 mx-auto w-responsive">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Fugit, error amet numquam iure provident voluptate esse
                    quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

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
                        <div class="carousel-item active">


                            <div class="col-md-4">

                                <!--Card-->
                                <div class="card card-cascade narrower card-ecommerce">

                                    <!--Card image-->
                                    <div class="view view-cascade overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(39).jpg"
                                             class="card-img-top" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body card-body-cascade text-center no-padding">
                                        <!--Category & Title-->
                                        <a href="" class="text-muted">
                                            <h5>Shoes</h5>
                                        </a>
                                        <h4 class="card-title">
                                            <strong>
                                                <a href="">Slim jeans</a>
                                            </strong>
                                        </h4>

                                        <!--Description-->
                                        <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut
                                            rerum necessitatibus saepe eveniet ut et voluptates.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="float-left">69$</span>
                                            <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </span>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>

                            <div class="col-md-4 clearfix d-none d-sm-block">

                                <!--Card-->
                                <div class="card card-cascade narrower card-ecommerce">

                                    <!--Card image-->
                                    <div class="view view-cascade overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(22).jpg"
                                             class="card-img-top" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body card-body-cascade text-center no-padding">
                                        <!--Category & Title-->
                                        <a href="" class="text-muted">
                                            <h5>Jeans</h5>
                                        </a>
                                        <h4 class="card-title">
                                            <strong>
                                                <a href="">Slim jeans</a>
                                            </strong>
                                        </h4>

                                        <!--Description-->
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima
                                            veniam elit. Nam incidunt eius est voluptatibus.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="float-left">99$</span>
                                            <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </span>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>

                            <div class="col-md-4 clearfix d-none d-sm-block">

                                <!--Card-->
                                <div class="card card-cascade narrower card-ecommerce">

                                    <!--Card image-->
                                    <div class="view view-cascade overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Others/img%20(31).jpg"
                                             class="card-img-top" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body card-body-cascade text-center no-padding">
                                        <!--Category & Title-->
                                        <a href="" class="text-muted">
                                            <h5>Shorts</h5>
                                        </a>
                                        <h4 class="card-title">
                                            <strong>
                                                <a href="">Denim shorts</a>
                                            </strong>
                                        </h4>

                                        <!--Description-->
                                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                            amet, consectetur, adipisci velit, sed quia
                                            non.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="float-left">49$</span>
                                            <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </span>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>

                        </div>
                        <!--First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">

                            <div class="col-md-4">

                                <!--Card-->
                                <div class="card card-cascade narrower card-ecommerce">

                                    <!--Card image-->
                                    <div class="view view-cascade overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(30).jpg"
                                             class="card-img-top" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body card-body-cascade text-center no-padding">
                                        <!--Category & Title-->
                                        <a href="" class="text-muted">
                                            <h5>Accessories</h5>
                                        </a>
                                        <h4 class="card-title">
                                            <strong>
                                                <a href="">Summer hat</a>
                                            </strong>
                                        </h4>

                                        <!--Description-->
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima
                                            veniam elit. Nam incidunt eius est voluptatibus.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="float-left">39$</span>
                                            <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </span>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>

                            <div class="col-md-4 clearfix d-none d-sm-block">

                                <!--Card-->
                                <div class="card card-cascade narrower card-ecommerce">

                                    <!--Card image-->
                                    <div class="view view-cascade overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(37).jpg"
                                             class="card-img-top" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body card-body-cascade text-center no-padding">
                                        <!--Category & Title-->
                                        <a href="" class="text-muted">
                                            <h5>Shoes</h5>
                                        </a>
                                        <h4 class="card-title">
                                            <strong>
                                                <a href="">Black heels</a>
                                            </strong>
                                        </h4>

                                        <!--Description-->
                                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                            amet, consectetur, adipisci velit, sed quia
                                            non.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="float-left">79$</span>
                                            <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </span>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>

                            <div class="col-md-4 clearfix d-none d-sm-block">

                                <!--Card-->
                                <div class="card card-cascade narrower card-ecommerce">

                                    <!--Card image-->
                                    <div class="view view-cascade overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(31).jpg"
                                             class="card-img-top" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body card-body-cascade text-center no-padding">
                                        <!--Category & Title-->
                                        <a href="" class="text-muted">
                                            <h5>Outerwear</h5>
                                        </a>
                                        <h4 class="card-title">
                                            <strong>
                                                <a href="">Black jacket</a>
                                            </strong>
                                        </h4>

                                        <!--Description-->
                                        <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut
                                            rerum necessitatibus saepe eveniet ut et voluptates.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="float-left">149$</span>
                                            <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </span>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>

                        </div>
                        <!--Second slide-->

                        <!--Third slide-->
                        <div class="carousel-item">

                            <div class="col-md-4">

                                <!--Card-->
                                <div class="card card-cascade narrower card-ecommerce">

                                    <!--Card image-->
                                    <div class="view view-cascade overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(38).jpg"
                                             class="card-img-top" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body card-body-cascade text-center no-padding">
                                        <!--Category & Title-->
                                        <a href="" class="text-muted">
                                            <h5>Accessories</h5>
                                        </a>
                                        <h4 class="card-title">
                                            <strong>
                                                <a href="">Leather bag</a>
                                            </strong>
                                        </h4>

                                        <!--Description-->
                                        <p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                            amet, consectetur, adipisci velit, sed quia
                                            non.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="float-left">29$</span>
                                            <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </span>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>

                            <div class="col-md-4 clearfix d-none d-sm-block">

                                <!--Card-->
                                <div class="card card-cascade narrower card-ecommerce">

                                    <!--Card image-->
                                    <div class="view view-cascade overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/belt.jpg"
                                             class="card-img-top" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body card-body-cascade text-center no-padding">
                                        <!--Category & Title-->
                                        <a href="" class="text-muted">
                                            <h5>Accessories</h5>
                                        </a>
                                        <h4 class="card-title">
                                            <strong>
                                                <a href="">Leather belt</a>
                                            </strong>
                                        </h4>

                                        <!--Description-->
                                        <p class="card-text">Temporibus autem quibusdam et aut officiis debitis aut
                                            rerum necessitatibus saepe eveniet ut et voluptates.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="float-left">89$</span>
                                            <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </span>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>

                            <div class="col-md-4 clearfix d-none d-sm-block">

                                <!--Card-->
                                <div class="card card-cascade narrower card-ecommerce">

                                    <!--Card image-->
                                    <div class="view view-cascade overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(57).jpg"
                                             class="card-img-top" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body card-body-cascade text-center no-padding">
                                        <!--Category & Title-->
                                        <a href="" class="text-muted">
                                            <h5>Shoes</h5>
                                        </a>
                                        <h4 class="card-title">
                                            <strong>
                                                <a href="">Sneakers</a>
                                            </strong>
                                        </h4>

                                        <!--Description-->
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing minima
                                            veniam elit. Nam incidunt eius est voluptatibus.
                                        </p>

                                        <!--Card footer-->
                                        <div class="card-footer">
                                            <span class="float-left">129$</span>
                                            <span class="float-right">
                        <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                          <i class="fa fa-heart"></i>
                        </a>
                      </span>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>

                        </div>
                        <!--Third slide-->

                    </div>
                    <!--Slides-->

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








{{--@foreach($obj as $item)--}}
{{--<div class="col-lg-3 col-md-6 mb-4">--}}
{{--<div class="card">--}}
{{--<div class="view overlay">--}}
{{--<a href="/client/gift/{{$item -> id}}">--}}
{{--<div style="background-image: url('{{\JD\Cloudder\Facades\Cloudder::show($item -> images, array('width'=>500, 'height'=>500,'crop'=>'fit'))}}');background-size: cover;background-repeat: no-repeat;background-position: center;width: 255px;height: 200px"></div>--}}
{{--<img class="img-fluid"--}}
{{--src="{{\JD\Cloudder\Facades\Cloudder::show($item -> images, array('width'=>500, 'height'=>500,'crop'=>'fit'))}}"--}}
{{--alt="">--}}
{{--</a>--}}

{{--</div>--}}
{{--<div class="card-body text-center">--}}
{{--<a href="" class="grey-text">--}}
{{--<h5 class="card-title font-text"> {{$item -> name}} </h5>--}}
{{--</a>--}}


{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--@endforeach--}}