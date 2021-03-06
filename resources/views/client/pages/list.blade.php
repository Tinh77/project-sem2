@extends('client.layout.master')
@section('page-title', 'Trang danh sách món quà')
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
    <style>
        [type="radio"]:checked, [type="radio"]:not(:checked){
            position: static;
            opacity: 1;
        }
    </style>
    <main class="content-margin">
        <div class="container mt-5 pt-3">
            <!--Navbar-->
            <nav class="navbar navbar-expand-lg  primary-color mt-5 mb-5 row">
                <div class="col-sm-4">
                    <a class="font-weight-bold text-dark mr-4" href="#">Categories</a>
                </div>

            </nav>
            <!--/.Navbar-->
            <div class="row pt-4">
                <!-- Sidebar -->
                <div class="col-lg-3">
                    <div class="">
                        <!-- Grid row -->
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <h4 class=" dark-grey-text">Phân loại theo danh mục</h4>
                                <div class="divider border-top"></div>
                                <form action="#">
                                    @foreach ($list_obj as $key => $item)
                                    <div class="form-group">
                                        <label class="dark-grey-text">
                                            <input name="category_id" value="{{$key}}" type="radio">
                                            {{$item}}
                                        </label>
                                    </div>
                                    @endforeach
                                </form>
                            </div>

                            <!-- Filter by age-->
                            <div class="col-md-6 col-lg-12">
                                <h4 class=" dark-grey-text">Phân loại theo tuổi</h4>
                                <div class="divider border-top"></div>
                                <form action="#">
                                    <div class="form-group">
                                        <label class="dark-grey-text">
                                            <input name="age_range" value="1" type="radio">
                                            0 tháng - 6 tháng</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="dark-grey-text">
                                            <input name="age_range" value="2" type="radio">
                                            6 tháng - 12 tháng</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="dark-grey-text">
                                            <input name="age_range" value="3" type="radio">
                                            > 12 tháng</label>
                                    </div>
                                </form>
                            </div>
                            <!-- /Filter by age-->
                            <!-- Filter by gender -->
                            <div class="col-md-6 col-lg-12">
                                <h4 class=" dark-grey-text">Phân loại theo giới tính</h4>
                                <div class="divider border-top"></div>
                                <form action="#">
                                    <div class="form-group ">
                                        <label class="dark-grey-text">
                                            <input name="gender" value="0" type="radio">
                                            Nữ</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="dark-grey-text">
                                            <input name="gender" value="1" type="radio">
                                            Nam</label>
                                    </div>
                                </form>
                            </div>
                            <!-- /Filter by gender -->
                            <!-- Filter by gender -->
                            <div class="col-md-6 col-lg-12">
                                <h4 class=" dark-grey-text">Phân loại theo vùng</h4>
                                <div class="divider border-top"></div>
                                <form action="#">
                                    <div class="form-group ">
                                        <label class="dark-grey-text">
                                            <input name="city" value="0" type="radio">
                                            Tất cả</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="dark-grey-text">
                                            <input name="city" value="1" type="radio">
                                            Hà Nội</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="dark-grey-text">
                                            <input name="city" value="2" type="radio">
                                            Huế</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="dark-grey-text">
                                            <input name="city" value="3" type="radio">
                                            Hồ Chí Minh</label>
                                    </div>
                                </form>
                            </div>
                            <!-- /Filter by gender -->
                        </div>
                        <!-- /Grid row -->
                    </div>
                </div>
                <!-- /.Sidebar -->

                <!-- Content -->
                <div class="col-lg-9">
                    <!-- Products Grid -->
                    <section class="section pt-4" id="showGifts">
                        <!-- Grid row -->

                        <div class="row">

                        @foreach($obj as $item)
                            <!--Grid column-->


                                <div class="col-lg-4 col-md-12 mb-4">

                                    <!--Card-->
                                    <div class="card card-ecommerce">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            @if ($item->images)
                                            <div class="bg-slide-list"
                                                 style="background-image: url('{{\JD\Cloudder\Facades\Cloudder::show($item->images[0]->link, array('width'=>500, 'height'=>500,'crop'=>'fit'))}}');background-size: cover;background-repeat: no-repeat;background-position: center;width: 100%;height: 200px"></div>
                                            @endif
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
                            {{--{{$obj-> links()}}--}}
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
    <script>
        $(document).ready(() => {
            let args = {};
            $('input[type=radio]').change(function () {
                construct(this.name, this.value);
            });
            function construct(name, value) {
                args[name] = value;
                $.ajax({
                    url: '/client/gift/search',
                    type: 'POST',
                    data: {
                        'search': JSON.stringify(args)
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: (response) => {
                        $('#showGifts').html(response);
                    },
                    error: (response) => {
                        toast.error("Thất bại");
                    }
                });
            }
        });

    </script>
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
