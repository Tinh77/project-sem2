<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@if (trim($__env->yieldContent('template_title')))@yield('template_title') | @endif {{ config('app.name', 'Laravel') }}</title>


        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @if(config('laravelusers.enablejQueryCdn'))
            <script src="{{ asset(config('laravelusers.jQueryCdn')) }}"></script>
        @endif
        @if(config('laravelusers.enableBootstrapPopperJsCdn'))
            <script src="{{ asset(config('laravelusers.bootstrapPopperJsCdn')) }}"></script>
        @endif
        <script src="{{ asset('js/app.js') }}" defer></script>

        @yield('template_linked_css')

        {{-- Scripts --}}
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown show">
                                <a class="nav-link dropdown-toggle" href="#" role="button" id="navURLDrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Admin Panel <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navURLDrop">

                                    <a class="dropdown-item" href="{{ route('users') }}">
                                        Users
                                    </a>
                                    <a class="dropdown-item" href="{{ route('categories') }}">
                                        Categories
                                    </a>
                                    <a class="dropdown-item" href="{{ route('gifts') }}">
                                        Gifts
                                    </a>
                                    <a class="dropdown-item" href="{{ route('transactions') }}">
                                        Transactions
                                    </a>
                                    <a class="dropdown-item" href="/activity">
                                        Logs
                                    </a>
                                </div>
                            </li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                                <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                            @else

                                <li class="nav-item dropdown show">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" id="navDrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->username }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navDrop">

                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
        </div>

        {{-- Scripts --}}

        @include('vendor.laravelusers.scripts.toggleText')

        @yield('template_scripts')

    </body>
</html>
