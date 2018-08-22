<header>
    <div class="header">
        <div>
            <div class="logo">
                <a href="/client/home"><img class="mb-0 mt-5 w-50" src="{{URL::asset('img/brand/logo.png')}}"/></a>
            </div>
            <nav class="scroll-menu text-center mb-3 ml-3">
                <a class=" text-dark mr-5 item-menu font-text" href="/client/home">Trang chủ</a>
                <a class=" text-dark mr-5 item-menu font-text" href="#">Trang chủ</a>
                <a class=" text-dark mr-5 item-menu font-text" href="#">Trang chủ</a>
                <a class=" text-dark mr-5 item-menu font-text" href="#">Trang chủ</a>
                @auth
                    <a href="{{ '/client/home' }}">Home</a>
                @else
                    <a class=" text-dark mr-5 item-menu font-text" href="{{ route('login') }}">Đăng nhập</a>
                @endauth
            </nav>
        </div>

    </div>
</header>
