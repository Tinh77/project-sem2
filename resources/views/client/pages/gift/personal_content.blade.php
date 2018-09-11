@extends('client.pages.gift.list')
@section('page-title', 'Personal-Page')
@section("content1")
    <div class="col-md-9 personal">
        <div class="row justify-content-center">
            <div class="personal_header">
                <h1>Thông tin của bạn </h1>
            </div>
            <div class="col-md-9">
             <table class="table">
                <thead>
                <tr>
                    <th>Tên</th>
                    <th>{{$obj->full_name}} {{$obj->last_name}}</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Tuổi</td>
                    <td>{{$obj->age}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{$obj->email}}</td>
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td>{{$obj->phone}}</td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td>{{$obj->address}}</td>
                </tr>
                <tr>
                    <td>Giới tính</td>
                    <td>{{$obj->gender}}</td>
                </tr>
                <tr>
                    <td>Giới thiệu</td>
                    <td>{{$obj->intro}}</td>
                </tr>
                <tr>
                    <td>Ngày tạo tài khoản</td>
                    <td>{{$obj->created_at}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
