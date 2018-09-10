<div class="col-md-3 personal-left">
    <div class="text-center personal-image mb-5">
        <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqVmEg51BG1mEUXhvy5enjqTY9X1mle0Zpk48zY7967gEAQscUTQ"
                alt="Avatar" class="avatar">
    </div>
    <div class="profile__menu">
        <div class="text-center">
            <h3>{{ Auth::user()->username }}</h3>
            <div class="icon-icon">
                <i class="fa fa-map-marker-alt"></i>
            </div>
        </div>
        <div class="profile__socials">
            <button class="flow" type="submit">
                <i class="fa fa-heart"></i> Theo dõi
            </button>
        </div>
    </div>
    <div class="profile__stats">
        <table class="table">
            <thead>

            </thead>
            <tbody>
            <tr>
                <td>
                    <p><a href="/listposted">Dòng thời thời gian</a></p>
                </td>
            </tr>
            <tr>
                <a href=""></a>
            </tr>
            <tr>
                <td><a href="/profile/{{auth()->id()}}">Thông tin cá nhân</a></td>
            </tr>
            <tr>
                <td>
                    <a href="/client/transaction">Món quà đã đăng</a></td>
            </tr>
            <tr>
                <td>Tổng số bài dang</td>
            </tr>
            <tr>
                <td>Giao dịch thành công</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
