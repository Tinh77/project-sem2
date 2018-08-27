@extends('client.layout.master')
@section('content')
    <div class="container" style="margin-top: 30vh">
        <div class="row">
            @include('client.pages.gift.navbar')
            @section('content1')
            @show()
        </div>
    </div>
@endsection
