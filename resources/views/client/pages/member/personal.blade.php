@extends('client.layout.master')
@section("content")
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="container-fluid personal">
        <div class="row">
            <div class="col-md-3 personal-left">
                <div class="text-center personal-image">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqVmEg51BG1mEUXhvy5enjqTY9X1mle0Zpk48zY7967gEAQscUTQ" alt="Avatar" class="avatar">
                </div>
                <div class="profile__menu">
                    <div class="text-center">
                        <strong>Thiên tước</strong>
                        <div class="icon-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                    </div>
                    <div class="profile__socials">
                        <button class="flow" type="submit">
                            <i class="far fa-heart"></i> Theo dõi
                        </button>
                    </div>
                </div>
                <div class="profile__stats">
                    <table class="table">
                        <thead>
                        <tr>
                            <strong><th scope="col"><h3>Dòng thời gian</h3></th></strong>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Thông tin cá nhân</td>
                        </tr>
                        <tr>
                            <td>Đánh giá</td>
                        </tr>
                        <tr>
                            <td>Theo dõi</td>
                        </tr>
                        <tr>
                            <td>Tổng số bài đăng </td>
                        </tr>
                        <tr>
                            <td>Giao dịch thành công</td>
                        </tr>
                        <tr>
                            <td>
                                <h3>Thông tin sơ lược</h3>
                                <p class="text-email"><i class="fas fa-envelope-open email"></i> quatangynghia@gmail.com</p>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <h3>Mạng Xã Hội</h3>
                                <div class="profile__socials__link">
                                    <a href="https://plus.google.com/101798871598004831050"  class="profile__socials__link__google"><i class="fab fa-google-plus-g fa-2x"></i><span class="text-google">Google</span></a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-9 personal-center">
                <div class="row">
                    <div class="col-md-9">
                        <p class="theme">Dòng thời gian</p>
                        <div class="row content-personal">
                            <div class="col-md-1">
                                <i class="fab fa-wordpress-simple fa-2x"></i>
                            </div>
                            <div class="col-md-11">
                                <strong>Có đầm công chúa</strong>
                                <p>
                                    Đầm công chúa cho bé 2 tuổi, chất lượng còn 90%. Bé nhà mình lớn nhanh quá nên tặng cho bé nào cần.
                                </p>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>
                                            <div>
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThY257vBsGXf_kefiXMdWnKmHxGlit54YM3FqNZU2UQGFDN3kx" alt="" class="img-detail">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThY257vBsGXf_kefiXMdWnKmHxGlit54YM3FqNZU2UQGFDN3kx" alt="" class="img-detail">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThY257vBsGXf_kefiXMdWnKmHxGlit54YM3FqNZU2UQGFDN3kx" alt="" class="img-detail">
                                            </div>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <i class="far fa-comment-alt"></i>  0 bình luận
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="fb-comments"
                                                 data-href="https://developers.facebook.com/docs/plugins/comments#configurator"
                                                 data-width="550px"
                                                 data-numposts="1">
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 personal-right">
                        <p class="theme">Danh sách bài đăng</p>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Đã được kiểm duyệt</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
@endsection