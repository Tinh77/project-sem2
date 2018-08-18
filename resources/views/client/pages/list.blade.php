@extends('client.layout.master')
@section('content')
    <div class="list-page">
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
                                <a href="#">Quần áo</a>
                                <a href="#">Giầy dép</a>
                                <a href="#">Đồ chơi</a>
                                <a href="#">Mũ</a>
                                <a href="#">Đồ dùng</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-9">
                        <div class="gallery ">
                            <article class="image col-md-3 ">
                                <img src="http://pic.trangvangvietnam.com/395716889/do%20so%20sinh%20(2).jpg"/>
                                <p>Tên sản phẩm</p>
                                <a>-Dành cho độ tuổi...<br><i class="fas fa-heart"></i></a>
                            </article>

                            <article class="image col-md-3">
                                <img src="http://pic.trangvangvietnam.com/395716889/do%20so%20sinh%20(2).jpg"/>
                                <p>Tên sản phẩm</p>
                                <a>-Dành cho độ tuổi...<br><i class="fas fa-heart"></i></a>
                            </article>

                            <article class="image col-md-3">
                                <img src="http://pic.trangvangvietnam.com/395716889/do%20so%20sinh%20(2).jpg"/>
                                <p>Tên sản phẩm</p>
                                <a>-Dành cho độ tuổi...<br><i class="fas fa-heart"></i></a>
                            </article>
                        </div>

                        <div class="gallery ">
                            <article class="image col-md-3 ">
                                <img src="http://pic.trangvangvietnam.com/395716889/do%20so%20sinh%20(2).jpg"/>
                                <p>Tên sản phẩm</p>
                                <a>-Dành cho độ tuổi...<br><i class="fas fa-heart"></i></a>
                            </article>

                            <article class="image col-md-3">
                                <img src="http://pic.trangvangvietnam.com/395716889/do%20so%20sinh%20(2).jpg"/>
                                <p>Tên sản phẩm</p>
                                <a>-Dành cho độ tuổi...<br><i class="fas fa-heart"></i></a>
                            </article>

                            <article class="image col-md-3">
                                <img src="http://pic.trangvangvietnam.com/395716889/do%20so%20sinh%20(2).jpg"/>
                                <p>Tên sản phẩm</p>
                                <a>-Dành cho độ tuổi...<br><i class="fas fa-heart"></i></a>
                            </article>
                        </div>

                        <div class="gallery ">
                            <article class="image col-md-3 ">
                                <img src="http://pic.trangvangvietnam.com/395716889/do%20so%20sinh%20(2).jpg"/>
                                <p>Tên sản phẩm</p>
                                <a>-Dành cho độ tuổi...<br><i class="fas fa-heart"></i></a>
                            </article>
                            <article class="image col-md-3">
                                <img src="http://pic.trangvangvietnam.com/395716889/do%20so%20sinh%20(2).jpg"/>
                                <p>Tên sản phẩm</p>
                                <a>-Dành cho độ tuổi...<br><i class="fas fa-heart"></i></a>
                            </article>

                            <article class="image col-md-3">
                                <img src="http://pic.trangvangvietnam.com/395716889/do%20so%20sinh%20(2).jpg"/>
                                <p>Tên sản phẩm</p>
                                <a>-Dành cho độ tuổi...<br><i class="fas fa-heart"></i></a>
                            </article>
                        </div>

                        <div class="gallery ">
                            <article class="image col-md-3 ">
                                <img src="http://pic.trangvangvietnam.com/395716889/do%20so%20sinh%20(2).jpg"/>
                                <p>Tên sản phẩm</p>
                                <a>-Dành cho độ tuổi...<br><i class="fas fa-heart"></i></a>
                            </article>

                            <article class="image col-md-3">
                                <img src="http://pic.trangvangvietnam.com/395716889/do%20so%20sinh%20(2).jpg"/>
                                <p>Tên sản phẩm</p>
                                <a>-Dành cho độ tuổi...<br><i class="fas fa-heart"></i></a>
                            </article>

                            <article class="image col-md-3">
                                <img src="http://pic.trangvangvietnam.com/395716889/do%20so%20sinh%20(2).jpg"/>
                                <p>Tên sản phẩm</p>
                                <a>-Dành cho độ tuổi...<br><i class="fas fa-heart"></i></a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

