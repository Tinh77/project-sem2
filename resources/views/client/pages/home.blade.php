@extends('client.layout.master')
@section('content')
    <div class="home-page padding">
        <div class="container">
            @include('client.partial.slide')
            <h4 class="text-center font-text mt-2 mb-2"><strong>Sản phẩm được tìm kiếm nhiều nhất</strong></h4>
            <div class="row">
                <div class="col-sm-4 mt-3">
                    <div class="card" style="width: 100%;">
                        <img class="img-fluid card-img-top"
                             src="https://static.wixstatic.com/media/45d10e_b2418995fd704f1fa6110261556cd8a4~mv2_d_4961_3508_s_4_2.jpg/v1/fill/w_636,h_384,al_c,q_80,usm_0.66_1.00_0.01/45d10e_b2418995fd704f1fa6110261556cd8a4~mv2_d_4961_3508_s_4_2.webp"
                             alt="Card image cap">
                    </div>
                </div>
                <div class=" col-sm-4 mt-3">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top img-fluid"
                             src="https://static.wixstatic.com/media/45d10e_010e128828524c519bee613e8d9dc167~mv2.jpg/v1/crop/x_570,y_167,w_1057,h_638/fill/w_634,h_384,al_c,q_80,usm_0.66_1.00_0.01/45d10e_010e128828524c519bee613e8d9dc167~mv2.webp"
                             alt="Card image cap">
                    </div>
                </div>
                <div class="col-sm-4 mt-3">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top img-fluid"
                             src="https://static.wixstatic.com/media/45d10e_96c93fbc474c4bd588043a125ac110ac~mv2_d_4961_3508_s_4_2.jpg/v1/crop/x_0,y_47,w_4961,h_2991/fill/w_398,h_240,al_c,q_80,usm_0.66_1.00_0.01/45d10e_96c93fbc474c4bd588043a125ac110ac~mv2_d_4961_3508_s_4_2.webp"
                             alt="Card image cap">
                    </div>
                </div>
            </div>
            <h4 class="text-center font-text mt-5 mb-5"><strong>Những sản phẩm đang tìm chủ mới</strong></h4>
            {{--product--}}
            <form class="form-inline my-2 my-lg-0 justify-content-center font-text">
                <input class="form-control mr-sm-2 w-50" type="search" placeholder="Tìm kiếm sản phẩm mà bạn cần..."
                       aria-label="Search">
                <button type="button" class="btn btn-success btn-sm"><i
                            class="fa fa-search"></i></button>
            </form>

            <div class="row wow fadeIn mt-5">
                @foreach($obj as $item)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card">
                            <div class="view overlay">
                                <a href="/client/gift/{{$item -> id}}">
                                    <div style="background-image: url('{{\JD\Cloudder\Facades\Cloudder::show($item -> images, array('width'=>500, 'height'=>500,'crop'=>'fit'))}}');background-size: cover;background-repeat: no-repeat;background-position: center;width: 255px;height: 200px"></div>
                                    {{--<img class="img-fluid" src="{{$item -> images}}" alt="">--}}
                                </a>

                            </div>
                            <div class="card-body text-center">
                                <a href="" class="grey-text">
                                    <h5 class="card-title font-text"> {{$item -> name}} </h5>
                                </a>


                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <a class="text-primary float-right font-text" href="/client/gift">Xem thêm <i
                        class="fas fa-angle-double-right"></i></a>
            <h4 class="text-center font-text mt-5 mb-5"><strong>Lorem Ipsum is simply dummy text </strong></h4>

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-sm-4 col">
                                <img class="img-fluid"
                                     src="{{asset('client-image/19985205_1007040769398785_7801387006000365568_n.jpg')}}"
                                     alt="">
                            </div>
                            <div class="col-sm-4 col">
                                <img class="img-fluid"
                                     src="{{asset('client-image/19985205_1007040769398785_7801387006000365568_n.jpg')}}"
                                     alt="">
                            </div>
                            <div class="col-sm-4 col">
                                <img class="img-fluid"
                                     src="{{asset('client-image/19985205_1007040769398785_7801387006000365568_n.jpg')}}"
                                     alt="">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-4 col">
                                <img class="img-fluid"
                                     src="{{asset('client-image/19985205_1007040769398785_7801387006000365568_n.jpg')}}"
                                     alt="">
                            </div>
                            <div class="col-sm-4 col">
                                <img class="img-fluid"
                                     src="{{asset('client-image/19985205_1007040769398785_7801387006000365568_n.jpg')}}"
                                     alt="">
                            </div>
                            <div class="col-sm-4 col">
                                <img class="img-fluid"
                                     src="{{asset('client-image/19985205_1007040769398785_7801387006000365568_n.jpg')}}"
                                     alt="">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-4 col">
                                <img class="img-fluid"
                                     src="{{asset('client-image/19985205_1007040769398785_7801387006000365568_n.jpg')}}"
                                     alt="">
                            </div>
                            <div class="col-sm-4 col">
                                <img class="img-fluid"
                                     src="{{asset('client-image/19985205_1007040769398785_7801387006000365568_n.jpg')}}"
                                     alt="">
                            </div>
                            <div class="col-sm-4 col">
                                <img class="img-fluid"
                                     src="{{asset('client-image/19985205_1007040769398785_7801387006000365568_n.jpg')}}"
                                     alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
@endsection
