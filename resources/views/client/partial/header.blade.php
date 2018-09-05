@php
if (!isset($notifications)) $notifications = null;
@endphp
    <nav class="navbar navbar-expand-lg navbar-dark top-nav-collapse">

        <div class="container p-0">
            <a class="navbar-brand" href="/client/home">
                <img src="{{asset('img/brand/Logo_active01.png')}}" style="width: 300px" class="img-fluid" alt="">
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
                        <a class="nav-link" href="/client/gift/create">Bạn cần cho</a>
                    </li>
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="/client/gift/create">Bạn cần xin</a>--}}
                    {{--</li>--}}
                    <li class="nav-item">

                        <a class="nav-link" href="#">Về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ với chúng tôi</a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    @if (Route::has('login'))

                        @auth
                            @if ($notifications)
                            <li class="dropdown nav-item ml-3">
                                <a href="#" role="button" class="nav-link dropdown-toggle waves-effect waves-light text-white-50"
                                   id="navbarDropdownNoti" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false" v-pre><i class="fa fa-bell text-black-50"></i> ({{$notifications->count()}})
                                </a>

                                <ul class="dropdown-menu" style="white-space: normal !important; width: 300px;" aria-labelledby="navbarDropdownNoti">
                                    @foreach($notifications as $notification)
                                    <li><a class="waves-effect waves-light" onclick="confirmSubmit({{Auth::user()->id}}, {{$notification->transaction->gift_id}}, {{ $notification->transaction_id}})">
                                        Item ID: {{ $notification->transaction->gift_id }}. User {{ $notification->transaction->buyer->username }} đã nhận món quà của bạn
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            @endif
                            <li class="dropdown nav-item ml-3">
                                <a href="#" role="button" class="nav-link dropdown-toggle waves-effect waves-light text-white-50 font-weight-bold"
                                   id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false"><i class="fa fa-user text-black-50"></i>
                                    {{ Auth::user()->username }}
                                    {{--@level(4)--}}
                                    {{--{{ __('[Admin]') }}--}}
                                    {{--@else--}}
                                        {{--{{ __('[Member]') }}--}}
                                        {{--@endrole--}}
                                        {{--<span class="caret"></span>--}}
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink-4">
                                    <li><a class="dropdown-item waves-effect waves-light" href="/profile/{{auth()->id()}}">
                                        Trang cá nhân
                                    </a></li>
                                    <li>
                                    <a class="dropdown-item waves-effect waves-light" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
                                        Đăng xuất
                                    </a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
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
<script>
    function confirmSubmit(id, gift_id, transaction_id) {
        $.ajax({
            url: '/client/gift/'+gift_id+'/confirm',
            type: 'POST',
            data: {
                'id': id,
                'gift_id': gift_id,
                'transaction_id': transaction_id
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (response) => {
                if (response.status == 0) {
                    console.log("okay");
                } else if (response.status == 'fraud') console.log("fraud");
            },
            error: (response) => console.log("fail")
        });
    }
</script>






























