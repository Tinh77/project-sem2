@extends('client.layout.master')
@section('content')
    <!-- Main Container -->
        <div class="container">
            <!-- Section: product details -->
            <section id="productDetails" class="pb-5">

                <!--News card-->
                <div class="card mt-5 hoverable">
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <div id="carousel-thumb"
                                 class="carousel slide carousel-fade carousel-thumbnails mb-5 pb-4"
                                 data-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner text-center text-md-left" role="listbox">
                                    <div class="carousel-item active text-center">
                                        <img src="{{\JD\Cloudder\Facades\Cloudder::show($obj -> images, array('width'=>500, 'height'=>500,'crop'=>'fit'))}}"
                                             alt="First slide" class="img-fluid">
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
                        </div>
                        <div class="col-lg-5 mr-3 text-center text-md-left">
                            <h2 class="h2-responsive product-name font-weight-bold">
                                {{$obj->name}}
                            </h2>
                            <p class="ml-xl-0 ml-4"><b>Ngày đăng: </b>{{$obj -> created_at -> format('d-m-Y H:i:s')}}</p>
                            <p class="ml-xl-0 ml-4"><b>Mô tả: </b>{{$obj -> description}}</p>
                            <p class="ml-xl-0 ml-4">
                                <b>Giới tính: </b>{{$obj -> genderString}}</p>
                            <p class="ml-xl-0 ml-4">
                                <b>Độ tuổi: </b>{{$obj -> ageString}}</p>
                            <p class="ml-xl-0 ml-4">
                                <b>Địa điểm: </b>{{$obj->address}} (<a href="#goole-map-infor">bản đồ</a>)</p>
                            <p class="ml-xl-0 ml-4">
                                <b>Thành phố: </b>{{$obj->cityName}}</p>
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
            <section>
                <hr>
                <div class="row">
                    <div class="col-sm-12" id="goole-map-infor">
                        <iframe
                                width="100%" height="450"
                                frameborder="0" style="border:0"
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDnro9-Oa4Ku3yKBkHFl_fVU7zVsOZ2Tvw
    &q={{$obj->address}}" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </section>

            <!-- Product Reviews -->
            <section id="reviews" class="pb-5 mt-4">
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="comments-list text-center text-md-left">
                            <div class="fb-comments" data-href="https://www.facebook.com/Meaning-Gift-310835612807616/"
                                 data-width="100%" data-numposts="2"></div>
                        </div>
                    </div>
                </div>


                <!--/.Main wrapper-->
            </section>
            <!-- /.Product Reviews -->

            <!--Section: Products v.5-->
            <section>

                <hr>
                <h2 class="h2-responsive dark-grey-text my-5 text-center">Có thể bạn quan tâm</h2>
                <p class="text-center w-responsive mx-auto mb-5 dark-grey-text">Những sản phẩm thuộc cùng thể loại hoặc ở gần bạn...</p>
                <!--Carousel Wrapper-->
                <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active row">
                            @foreach($list_relate as $item)
                                <div class="col-md-4">
                                    <!--Card-->
                                    <div class="card card-cascade narrower card-ecommerce">
                                        <!--Card image-->
                                        <a href="/client/gift/{{$item->id}}">
                                            <div class="view view-cascade overlay" style="background-image: url('{{$item->images}}'); background-size: cover; width: auto; height: 272px;">
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
                                                <a href="/client/gift/{{$item->id}}">{{$item->name}}</a>
                                            </h4>

                                            <!--Description-->
                                            <p class="card-text">{{$item->description}}
                                            </p>

                                            <!--Card footer-->
                                            <div class="card-footer">
                                                <span class="float-left"><i class="fa fa-clock-o"></i> {{$item->created_at->format('Y-m-d')}}</span>
                                                <span class="float-right">
                                                <a class="card-link" title="Quick Look" href="/client/gift/{{$item->id}}">
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

                    </div>
                    <!--Slides-->

                </div>

            </section>
            <!--Section: Products v.5-->

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
                    } else if (response.status == 'fraud') {
                        console.log("fraud");
                    } else{
                        console.log(response.status);
                    }
                },
                error: (response) => console.log("fail")
            });
        }
    </script>
@endsection
