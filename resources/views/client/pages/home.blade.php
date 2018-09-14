@extends('client.layout.master')
@section('content')
    @include('client.partial.intro')
    <main>

        <div class="container">

            <style>
                .form-control-borderless {
                    border: none;
                }

                .form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
                    border: none;
                    outline: none;
                    box-shadow: none;
                }
            </style>
            <br/>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <form class="card card-sm">
                        <div class="card-body row no-gutters align-items-center">
                            <div class="col-auto">
                                <i class="fa fa-search"></i>
                            </div>
                            <!--end of col-->
                            <div class="col">
                                <input id="formSearchName" class="form-control form-control-md form-control-borderless" type="search" placeholder="Nhập để tìm kiếm...">
                            </div>
                            <!--end of col-->
                        </div>
                    </form>
                </div>
                <!--end of col-->
            </div>
            <div class="row justify-content-center" style="display: none;">
                <div class="col-lg-12">
                <ul class="list-group" id="searchResults">
                </ul>
                </div>
            </div>
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
                <h2 class="font-weight-bold text-center h1 my-5">Chia sẻ kinh nghiệm</h2>
                <!--Section description-->
                <p class="text-center grey-text mb-5 mx-auto w-responsive">
                    Luôn tự hào là nguồn thông tin và kiến thức đáng tin cậy dành cho phụ nữ trưởng thành.
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
                                        <strong>Tất cả vì trẻ nhỏ</strong>
                                    </h3>
                                    <p>Nuôi con nhỏ phải thật bình tĩnh, nhất là những ai lần đầu làm mẹ và nuôi con
                                        trong tháng đầu:
                                        đừng lo lắng quá rồi stress thêm; đừng cuống cuồng lên khi con có biểu hiện lạ,
                                        hãy bình tĩnh giải quyết.
                                        Rồi tất cả cũng trôi qua và tốt đẹp cả thôi: bạn sẽ là người mẹ thực sự.</p>
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
                                        <strong>Cho bé ngủ đúng cách</strong>
                                    </h3>
                                    <p> Không cho trẻ bé sơ sinh nằm nệm quá mềm
                                        Theo các bác sĩ, hệ xương và cột sống của em bé còn khá mềm yếu vì thế nếu cho
                                        trẻ nằm ngủ đệm quá mềm sẽ ảnh hưởng đến cột sống của bé.
                                        Lớn lên trẻ dễ bị cong, xiêu vẹo hoặc các dị tật khác về cột sống.</p>
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
                                        <strong>Chụp ảnh cho bé</strong>
                                    </h3>
                                    <p>Khi chụp ảnh nên tắt đèn flash để tránh làm hại mắt bé
                                        Vì mắt trẻ sơ sinh chưa hoàn chỉnh các điểm ảnh nên
                                        đèn flash có thể gây hại cho mắt bé
                                        . Vì thế, nếu bạn muốn chụp lại những khoảnh khắc đáng yêu của con để lưu niệm
                                        thì trước khi chụp nhớ tắt đèn flash nhé.</p>
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
    <script>
        (function ($) {
            $.fn.delayKeyup = function(callback, ms){
                var timer = 0;
                $(this).keyup(function(){
                    clearTimeout (timer);
                    timer = setTimeout(callback, ms);
                });
                return $(this);
            };
        })(jQuery);
        $('#formSearchName').delayKeyup(() => {
            let string = $('#formSearchName').val();
            if (string == '') {
                $('#searchResults').parent().parent().attr('style', 'display: none;');
                $('#searchResults').html();
                return;
            }
            $.ajax({
                url: '/client/gift/search/' + string,
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: (response) => {
                    if (response.length == 0) return;
                    else $('#searchResults').parent().parent().attr('style', 'display: block;');
                    let html = '';
                    for(let i=0; i<response.length; i++) {
                        html += '<li class="list-group-item" style="clear: both;"><div style="float: left;"><img alt="quanganh9x" width="50px" height="50px" src="'+response[i].images+'"/></div><div style="float: right; text-align: right;"><p><a href="/client/gift/'+response[i].id+'">'+response[i].name+'</a></p><p>['+response[i].city+']</p></div></li>';
                    }
                    $('#searchResults').html(html);
                },
                error: (response) => console.log("fail")
            });
        }, 250);
    </script>
@endsection