@extends('client.layout.master')
@section("content_personal")
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
    </tbody>
    </table>
@endsection