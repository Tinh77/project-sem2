<div class="row" id="showGifts">

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