@extends('client.layout.master')
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('client.pages.gift.menu_personal')
            </div>
            <div class="col-md-9">
                @yield('content_personal')
            </div>
        </div>
    </div>
@endsection