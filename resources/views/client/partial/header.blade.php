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
                @if (Route::has('login'))
                    @auth
                        <a class=" text-dark mr-5 item-menu font-text" href="">
                            {{\Illuminate\Support\Facades\Auth::user()->username}}
                        </a>


                        @guest
                            <li class="text-dark mr-5 item-menu font-text">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="text-dark mr-5 item-menu font-text">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="\dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                    @level(4)
                                    {{ __('[Admin]') }}
                                    @else
                                        {{ __('[Member]') }}
                                        @endrole
                                        <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest


                    @else
                        <a class=" text-dark mr-5 item-menu font-text" href="{{ route('login') }}">Đăng nhập</a>
                    @endauth
                @endif

            </nav>
        </div>
    </div>
</header>
