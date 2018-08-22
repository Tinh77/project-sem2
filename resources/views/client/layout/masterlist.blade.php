<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('client-css/list1.css')}}">
</head>
<body>
<div class="container">
    <div class="row">

        <div class="col-md-3 personal-left">
            <div class="text-center personal-image">
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqVmEg51BG1mEUXhvy5enjqTY9X1mle0Zpk48zY7967gEAQscUTQ"
                    alt="Avatar" class="avatar">
            </div>
            <div class="profile__menu">
                <div class="text-center">
                    <strong>Giang Hạnh</strong>
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
                        <strong>
                            <th scope="col"><h3>Dòng thời gian</h3></th>
                        </strong>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Thông tin cá nhân</td>
                    </tr>
                    <tr>
                        <td>Ðánh giá</td>
                    </tr>
                    <tr>
                        <td>Theo dõi</td>
                    </tr>
                    <tr>
                        <td>Tổng số bài dang</td>
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
                            <h3>Mạng xã hội</h3>
                            <div class="profile__socials__link">
                                <a href="https://plus.google.com/101798871598004831050"
                                   class="profile__socials__link__google"><i
                                        class="fab fa-google-plus-g fa-2x"></i><span
                                        class="text-google">Google</span></a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-9 personal">
            @section('content1')
            @show
        </div>
    </div>
</div>
</body>
</html>
