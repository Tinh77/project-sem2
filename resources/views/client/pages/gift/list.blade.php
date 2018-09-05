@extends('client.layout.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            @include('client.pages.gift.navbar')
            @section('content1')
            @show()
        </div>
    </div>
@endsection
