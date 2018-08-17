@extends('client.layout.master')
@section('content')
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSV_4dpDPOXeLM0gbu_uuvCErVkLRzNZWfeSdOz72XU45xspdFr" alt="">
                            </div>
                            <div class="tab-pane" id="pic-2"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRx_Y3fukPJq4oMHJ_o7phVvzHeMflTbmBGsOxAN3w4Y-KSV8wI" alt="">
                            </div>
                            <div class="tab-pane" id="pic-3"><img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_5.jpg" alt="">
                            </div>
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs"><div class="logo_menuchinh" style="float:left; padding-top:5px; padding-left:10px; color:#fff; margin-left:auto; margin-right:auto; text-align:center; line-height:40px; font-size:16px;font-weight:bold;font-family:Arial"></div>
                            <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSV_4dpDPOXeLM0gbu_uuvCErVkLRzNZWfeSdOz72XU45xspdFr" alt=""></a>
                            </li>
                            <li><a data-target="#pic-2" data-toggle="tab"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRx_Y3fukPJq4oMHJ_o7phVvzHeMflTbmBGsOxAN3w4Y-KSV8wI" alt=""></a>
                            </li>
                            <li><a data-target="#pic-3" data-toggle="tab"><img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_5.jpg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="details col-md-6">
                        <h3 class="product-title">Thời trang cho bé nhiều màu sắc ngộ nghĩnh</h3>
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                            </div> <span class="review-no">123 đánh giá</span>
                        </div>
                        <p class="product-description">Chúc con yêu của bạn có thêm những bộ đồ thời trang cho bé trai theo phong cách đa màu sắc cực xinh xắn và đáng yêu!</p>
                        <p class="vote"><strong>91%</strong> of người mua hài lòng với sản phẩm này <strong>(87 bình chọn)</strong>
                        </p>
                        <div class="action">
                            <a href="http://hocwebgiare.com/" target="_blank">
                                <button class="add-to-cart btn btn-default" type="button">QUAN TÂM</button>
                            </a>
                            <a href="https://babypage.com/" target="_blank"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row contact">
            <div class="col-md-5 comment-face">
                <div class="fb-comments"
                     data-href="https://developers.facebook.com/docs/plugins/comments#configurator"
                     data-width="400px"
                     data-numposts="1">
                </div>
            </div>
            <div class="col-md-7 w-100 google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2646.216225729443!2d-89.2391164!3d48.45238070000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4d5921616d61c26b%3A0x15e5407d2071c8dd!2s109+Hogarth+St%2C+Thunder+Bay%2C+ON+P7A+7G8!5e0!3m2!1sen!2sca!4v1424371524427"
                        width="100%" height="450" frameborder="0" style="border:0"></iframe>
            </div>
        </div>
    </div>
@endsection

