<style>
    #sidebar ul li.active > a, a[aria-expanded="true"] {
        color: #707070;
        background: #FDEAEC;
    }
</style>
<div class="header font-text">
    <div class="container">
        <div class="logo">
            <a href="/client/home"><img class="mb-0 mt-5 w-50" src="{{URL::asset('img/brand/logo.png')}}"/></a>
        </div>
        <div class="row">
            <div class="col-md-3 nopadding"></div>
            <div class="col-md-6 nopadding">
                <nav class=" navbar-expand-lg" style="font-size: 19px ;padding-bottom: 50px;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                            aria-controls="basicExampleNav"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="basicExampleNav">
                        <ul class="navbar-nav" st>
                            <li class="nav-item mr-4 active">
                                <a class="nav-link " href="/client/home">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item mr-4">
                                <a class="nav-link" href="/client/gift/create">Đăng tin</a>
                            </li>
                            <li class="nav-item mr-4">
                                <a class="nav-link" href="/client/gift">Gift</a>
                            </li>
                            <li class="nav-item mr-4">
                                <a class="nav-link" href="/register">Đăng ký</a>
                            </li>
                            @if (Route::has('login'))

                                @auth
                                    <li class="nav-item">
                                        <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ Auth::user()->username }}
                                            {{--@level(4)--}}
                                            {{--{{ __('[Admin]') }}--}}
                                            {{--@else--}}
                                            {{--{{ __('[Member]') }}--}}
                                            {{--@endrole--}}
                                            <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="">
                                                Trang cá nhân
                                            </a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
                                                Đăng xuất
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                  style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @else
                                    <a class=" text-dark mr-5 item-menu font-text" href="{{ route('login') }}"
                                       style="padding-top: 6px">Đăng
                                        nhập</a>
                                @endauth
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
