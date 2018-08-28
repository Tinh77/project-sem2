
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container p-0">
            <a class="navbar-brand" href="/client/home">
                <img src="{{asset('img/brand/logo.png')}}" style="width: 300px" class="img-fluid" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
                    aria-controls="navbarSupportedContent-7"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/client/home">Trang chủ
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/client/gift/create">Đăng tin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/client/profile/{id}"></a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    @if (Route::has('login'))

                        @auth
                            <li class="nav-item dropdown ml-3">
                                <a class="nav-link dropdown-toggle waves-effect waves-light text-white-50 font-weight-bold"
                                   id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="true"><i class="fa fa-user text-black-50"></i>
                                    {{ Auth::user()->username }}
                                    {{--@level(4)--}}
                                    {{--{{ __('[Admin]') }}--}}
                                    {{--@else--}}
                                        {{--{{ __('[Member]') }}--}}
                                        {{--@endrole--}}
                                        {{--<span class="caret"></span>--}}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item waves-effect waves-light" href="">
                                        Trang cá nhân
                                    </a>
                                    <a class="dropdown-item waves-effect waves-light" href="{{ route('logout') }}"
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
                            <a class="text-white" href="{{ route('login') }}"
                               style="padding-top: 6px">Đăng
                                nhập</a>
                        @endauth
                    @endif
                </ul>

            </div>
        </div>
    </nav>




{{--@if (Route::has('login'))--}}

    {{--@auth--}}
        {{--<li class="nav-item">--}}
            {{--<a id="navbarDropdown" class="dropdown-toggle" href="#" role="button"--}}
               {{--data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                {{--{{ Auth::user()->username }}--}}
                {{--@level(4)--}}
                {{--{{ __('[Admin]') }}--}}
                {{--@else--}}
                {{--{{ __('[Member]') }}--}}
                {{--@endrole--}}
                {{--<span class="caret"></span>--}}
            {{--</a>--}}

            {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                {{--<a class="dropdown-item" href="">--}}
                    {{--Trang cá nhân--}}
                {{--</a>--}}
                {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                   {{--onclick="event.preventDefault();--}}
        {{--document.getElementById('logout-form').submit();">--}}
                    {{--Đăng xuất--}}
                {{--</a>--}}
                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST"--}}
                      {{--style="display: none;">--}}
                    {{--@csrf--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</li>--}}
    {{--@else--}}
        {{--<a class=" text-dark mr-5 item-menu font-text" href="{{ route('login') }}"--}}
           {{--style="padding-top: 6px">Đăng--}}
            {{--nhập</a>--}}
    {{--@endauth--}}
{{--@endif--}}





























