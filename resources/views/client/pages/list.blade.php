@extends('client.layout.master')
@section('content')

    <div class="container">
    </div>
    <div class="list-page font-text bg-light padding" style="padding-top: 50px">
        <div class="news-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="newsblock-title text-center">Danh mục </h4>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control w-75" type="search" placeholder="Search"
                                   aria-label="Search">
                            <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <h5 class="mt-5">Chọn danh sản phẩm</h5>
                        <table class="table table-borderless border-top">
                            <tbody>
                            @foreach($list_obj as $key => $item)
                                <tr>
                                    <td>
                                        <a href="/client/gift/list/{{$key}}">{{$item}}</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <h5 class="mt-5">Chọn theo độ tuổi</h5>
                        <table class="table table-borderless border-top">
                            <tbody>
                            <tr>
                                <td>
                                    <a href=""> 0 tháng - 6 tháng</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href=""> 6 tháng - 12 tháng</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href=""> 12 tháng - 24 tháng</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href=""> Trên 24 tháng</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-9">
                        @include('client.partial.slideList')
                        <div class="gallery">
                            @foreach($obj as $item)
                                <a href="/client/gift/{{$item->id}}">
                                    <article class="image col-md-3 ">
                                        <div class="bg-slide-list"
                                             style="background-image: url({{$item->images}}) ;background-size: cover;background-position: center;background-repeat: no-repeat;width: 200px;height: 200px"></div>
                                        <p>{{$item->name}}</p>
                                        <a>-Dành cho độ tuổi...<br><i class="fas fa-heart"></i></a>
                                    </article>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

