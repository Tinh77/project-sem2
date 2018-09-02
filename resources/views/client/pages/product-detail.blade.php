@extends('client.layout.master')
@section('content')
    <!-- Main Container -->

    <div class="content-margin">
        <div class="container mt-5 pt-3 ">
            <!-- Section: product details -->
            <section id="productDetails" class="pb-5">

                <!--News card-->
                <div class="card mt-5 hoverable">
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <div class="row mx-2 mt-5">
                                <!--Carousel Wrapper-->
                                <div id="carousel-thumb"
                                     class="carousel slide carousel-fade carousel-thumbnails mb-5 pb-4"
                                     data-ride="carousel">
                                    <!--Slides-->
                                    <div class="carousel-inner text-center text-md-left" role="listbox">
                                        <div class="carousel-item active">
                                            <img src="{{\JD\Cloudder\Facades\Cloudder::show($obj -> images, array('width'=>500, 'height'=>500,'crop'=>'fit'))}}"
                                                 alt="First slide" class="img-fluid">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg"
                                                 alt="Second slide" class="img-fluid">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/20.jpg"
                                                 alt="Third slide" class="img-fluid">
                                        </div>
                                    </div>
                                    <!--/.Slides-->
                                    <!--Thumbnails-->
                                    <a class="carousel-control-prev" href="#carousel-thumb" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-thumb" role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <!--/.Thumbnails-->
                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>
                        </div>
                        <div class="col-lg-5 mr-3 text-center text-md-left">
                            <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
                                <strong>{{$obj->name}}</strong>
                            </h2>
                            <p class="ml-xl-0 ml-4"><b>Mô tả: </b>{{$obj -> description}}</p>
                            <p class="ml-xl-0 ml-4">
                                <b>Giới Tính: </b>{{$obj -> gender}}</p>
                            <p class="ml-xl-0 ml-4">
                                <b>Độ tuổi: </b>{{$obj -> age_range}}</p>
                            <p class="ml-xl-0 ml-4">
                                <b>Resolution: </b>2048 x 1536</p>


                            <!-- Add to Cart -->
                            <section class="color">
                                <div class="mt-5">
                                    <div class="row mt-3 mb-4">
                                        <div class="col-md-12 text-center text-md-left text-md-right" id="btnShow">
                                            <button class="btn btn-primary btn-rounded" onclick="getInfo()">
                                                Quan tâm!
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- /.Add to Cart -->
                        </div>
                    </div>
                </div>
                <!--News card-->

            </section>
            <!-- Section: product details -->

            <!-- Product Reviews -->
            <section id="reviews" class="pb-5 mt-4">

                <hr>
                <h4 class="h4-responsive dark-grey-text font-weight-bold my-5 text-center">
                    <strong>Product Reviews</strong>
                </h4>
            {{--<hr class="mb-5">--}}

            <!--Main wrapper-->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="comments-list text-center text-md-left">
                            <div class="fb-comments" data-href="https://www.facebook.com/Meaning-Gift-310835612807616/"
                                 data-width="100%" data-numposts="2"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2646.216225729443!2d-89.2391164!3d48.45238070000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4d5921616d61c26b%3A0x15e5407d2071c8dd!2s109+Hogarth+St%2C+Thunder+Bay%2C+ON+P7A+7G8!5e0!3m2!1sen!2sca!4v1424371524427"
                                width="100%" height="450" frameborder="0" style="border:0"></iframe>
                    </div>
                </div>


                <!--/.Main wrapper-->
            </section>
            <!-- /.Product Reviews -->

            <!--Section: Products v.5-->
            <section id="products" class="pb-5 mt-4">

                <hr>
                <h4 class="h4-responsive dark-grey-text font-weight-bold my-5 text-center">
                    <strong>Related Products</strong>
                </h4>
                <hr class="mb-5">

                <p class="text-center w-responsive mx-auto mb-5 dark-grey-text">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Fugit, error amet numquam iure provident voluptate
                    esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>

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

                            <div class="col-md-4 mb-4">

                                <!--Card-->
                                <div class="card card-ecommerce">

                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/14.jpg"
                                             class="img-fluid" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Category & Title-->

                                        <h5 class="card-title mb-1">
                                            <strong>
                                                <a href="" class="dark-grey-text">Sony TV-675i</a>
                                            </strong>
                                        </h5>
                                        <span class="badge badge-danger mb-2">bestseller</span>
                                        <!-- Rating -->
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star grey-text"></i>
                                            </li>
                                        </ul>

                                        <!--Card footer-->
                                        <div class="card-footer pb-0">
                                            <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                                <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                            </div>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block mb-4">

                                <!--Card-->
                                <div class="card card-ecommerce">

                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg"
                                             class="img-fluid" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Category & Title-->

                                        <h5 class="card-title mb-1">
                                            <strong>
                                                <a href="" class="dark-grey-text">Samsung 786i</a>
                                            </strong>
                                        </h5>
                                        <span class="badge badge-info mb-2">new</span>
                                        <!-- Rating -->
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star grey-text"></i>
                                            </li>
                                        </ul>

                                        <!--Card footer-->
                                        <div class="card-footer pb-0">
                                            <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                                <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                            </div>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block mb-4">

                                <!--Card-->
                                <div class="card card-ecommerce">

                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/9.jpg"
                                             class="img-fluid" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Category & Title-->

                                        <h5 class="card-title mb-1">
                                            <strong>
                                                <a href="" class="dark-grey-text">Canon 675-D</a>
                                            </strong>
                                        </h5>
                                        <span class="badge badge-danger mb-2">bestseller</span>
                                        <!-- Rating -->
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                        </ul>

                                        <!--Card footer-->
                                        <div class="card-footer pb-0">
                                            <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                                <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                            </div>
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

                            <div class="col-md-4 mb-4">

                                <!--Card-->
                                <div class="card card-ecommerce">

                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/8.jpg"
                                             class="img-fluid" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Category & Title-->

                                        <h5 class="card-title mb-1">
                                            <strong>
                                                <a href="" class="dark-grey-text">Samsung V54</a>
                                            </strong>
                                        </h5>
                                        <span class="badge grey mb-2">best rated</span>
                                        <!-- Rating -->
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                        </ul>

                                        <!--Card footer-->
                                        <div class="card-footer pb-0">
                                            <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                                <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                            </div>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block mb-4">

                                <!--Card-->
                                <div class="card card-ecommerce">

                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/5.jpg"
                                             class="img-fluid" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Category & Title-->

                                        <h5 class="card-title mb-1">
                                            <strong>
                                                <a href="" class="dark-grey-text">Dell V-964i</a>
                                            </strong>
                                        </h5>
                                        <span class="badge badge-info mb-2">new</span>
                                        <!-- Rating -->
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                        </ul>

                                        <!--Card footer-->
                                        <div class="card-footer pb-0">
                                            <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                                <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                            </div>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block mb-4">

                                <!--Card-->
                                <div class="card card-ecommerce">

                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/1.jpg"
                                             class="img-fluid" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Category & Title-->

                                        <h5 class="card-title mb-1">
                                            <strong>
                                                <a href="" class="dark-grey-text">iPad PRO</a>
                                            </strong>
                                        </h5>
                                        <span class="badge badge-danger mb-2">bestseller</span>
                                        <!-- Rating -->
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star grey-text"></i>
                                            </li>
                                        </ul>

                                        <!--Card footer-->
                                        <div class="card-footer pb-0">
                                            <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                                <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                            </div>
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

                            <div class="col-md-4 mb-4">

                                <!--Card-->
                                <div class="card card-ecommerce">

                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg"
                                             class="img-fluid" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Category & Title-->

                                        <h5 class="card-title mb-1">
                                            <strong>
                                                <a href="" class="dark-grey-text">Asus CT-567</a>
                                            </strong>
                                        </h5>
                                        <span class="badge grey mb-2">best rated</span>
                                        <!-- Rating -->
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                        </ul>

                                        <!--Card footer-->
                                        <div class="card-footer pb-0">
                                            <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                                <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                            </div>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block mb-4">

                                <!--Card-->
                                <div class="card card-ecommerce">

                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/7.jpg"
                                             class="img-fluid" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Category & Title-->

                                        <h5 class="card-title mb-1">
                                            <strong>
                                                <a href="" class="dark-grey-text">Dell 786i</a>
                                            </strong>
                                        </h5>
                                        <span class="badge badge-info mb-2">new</span>
                                        <!-- Rating -->
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star grey-text"></i>
                                            </li>
                                        </ul>

                                        <!--Card footer-->
                                        <div class="card-footer pb-0">
                                            <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                                <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                            </div>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block mb-4">

                                <!--Card-->
                                <div class="card card-ecommerce">

                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/10.jpg"
                                             class="img-fluid" alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Category & Title-->

                                        <h5 class="card-title mb-1">
                                            <strong>
                                                <a href="" class="dark-grey-text">Headphones</a>
                                            </strong>
                                        </h5>
                                        <span class="badge badge-info mb-2">new</span>
                                        <!-- Rating -->
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                        </ul>

                                        <!--Card footer-->
                                        <div class="card-footer pb-0">
                                            <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                                <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                            </div>
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
    </div>
    <!-- /.Main Container -->
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <script>
        function getInfo() {
            $('#btnShow').html('<button class="btn btn-default"><a href="tel:{{$obj->account->account->phone}}"><font color="white">{{$obj->account->account->phone}}</font></a></button><br><button class="btn btn-default">{{$obj->account->account->address}}</button><br><button class="btn btn-danger" onclick="informSubmit({{Auth::user()->id}}, {{$obj->id}})"><font color="white">Tôi đã nhận</font></button>');
        }
        function informSubmit(id, gift_id) {
            $.ajax({
                url: '/client/gift/'+gift_id+'/inform',
                type: 'POST',
                data: {
                    'id': id,
                    'gift_id': gift_id
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: (response) => {
                    if (response.status == 0) {
                        console.log("okay");
                    } else if (response.status == 'fraud') console.log("fraud");
                },
                error: (response) => console.log("fail")
            });
        }
    </script>
@endsection
