@extends('client.layout.master')
@section("content")
    <div class="container">
        <div class="row">
            @include('client.pages.gift.menu_personal')
            @section('content_personal')
            @show()
        </div>
    </div>
@endsection