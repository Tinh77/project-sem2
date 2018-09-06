@extends('client.pages.gift.list')
@section('content1')
    <div class="col-md-9 personal">
        <div class="row justify-content-center">
            <div class="personal_header">
                <h1>Chi tiết trao đổi.</h1>
            </div>

            <div class="col-md-9">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Tên người muốn xin</th>
                        <th>....</th>
                    </tr>
                    <tr>
                        <td>Tên món quà</td>
                        <th>....</th>
                    </tr>
                    <tr>
                        <td>Ảnh món quà</td>
                        <th>....</th>
                    </tr>
                    <tr>
                        <td>Mô tả món quà</td>
                        <th>....</th>
                    </tr>
                    <tr>
                        <td>Lời nhắn xin</td>
                        <th>....</th>
                    </tr>
                    <tr>
                        <td> <button type="button" class="btn btn-danger btn-sm">Xác nhận cho</button></td>
                    </tr>

                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
