@extends('client.pages.gift.list')
@section('content1')
    <div class="col-md-9 personal">
        <div class="row justify-content-center">
            <div class="personal_header">
                <h1>Thông tin chi tiết trao đổi.</h1>
            </div>

            <div class="col-md-9">
                <table class="table">
                    <thead>
                    <tr>
                        <td>Tên món quà</td>
                        <th>{{$transaction->gift->name}}</th>
                    </tr>
                    <tr>
                        <td>Ảnh món quà</td>
                        <th>
                            <div class="view view-cascade overlay"
                                 style="background-image: url('{{\JD\Cloudder\Facades\Cloudder::show($transaction->gift -> images, array('width'=>500, 'height'=>500))}}'); background-size: cover; width: 100%; height: 272px;">
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <td>Mô tả món quà</td>
                        <th>{{$transaction->gift->description}}</th>
                    </tr>
                    <tr>
                        <th>Tên người cho</th>
                        <th>{{$transaction->owner->account->first_name}} {{$transaction->owner->account->last_name}}</th>
                    </tr>
                    <tr>
                        <th>Tên người muốn xin</th>
                        <th>{{$transaction->buyer->account->first_name}} {{$transaction->buyer->account->last_name}}</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection
