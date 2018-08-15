@extends('client.layout.master')
@section('content')
    <div class="news-block">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h1 class="newsblock-title">List Product</h1>
                    <nav class="navbar navbar-light bg-light">
                        <form class="form-inline">
                            <div class="input-group ml-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                                       aria-describedby="basic-addon1">
                            </div>
                        </form>
                    </nav>
                    <p class="newsblock-link"><i class="la la-headphones"></i>Tìm kiếm theo độ tuổi</p>
                    <div class="slidecontainer">
                        <input type="range" min="1" max="100" value="10" class="slider" id="myRange">
                    </div>

                    <div class="dropdown">
                        <button class="dropbtn">Lọc theo sản phẩm</button>
                        <div class="dropdown-content">
                            @foreach($categories as $category)
                                <a href="#">All</a>
                                <a href="#">{{$category->category->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    @foreach($list_obj as $item)
                        <article class="image col-md-3 ">
                            <img src="{{$item->image}}"/>
                            <p>{{$item->name}}</p>
                            <a>{{$item->age_range}}<br><i class="fas fa-heart"></i></a>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

