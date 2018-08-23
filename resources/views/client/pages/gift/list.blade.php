@extends('client.layout.master')
@section('content')
    <div class="container">
        <div class="row">
            @include('client.pages.gift.navbar')
            @section('content1')
            @show()
        </div>
    </div>
@endsection
