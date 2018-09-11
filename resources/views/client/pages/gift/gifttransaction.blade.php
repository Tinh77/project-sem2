@extends('client.pages.gift.list')
@section('page-title', 'GiftTransaction-Page')
@section('content1')
    <div class="col-md-9 personal">
        <div class="row justify-content-center">
            <div class="personal_header">
                <h1>Chi tiết thông tin người xin.</h1>
            </div>

            <div class="col-md-9">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Tên người muốn xin</th>
                        <th>{{$transaction->buyer->account->first_name}}.{{$transaction->buyer->account->last_name}}</th>
                    </tr>
                    <tr>
                        <th>Email người muốn xin</th>
                        <th>{{$transaction->buyer->account->email}}</th>
                    </tr>
                    <tr>
                        <th>Số điện thoại người muốn xin</th>
                        <th>{{$transaction->buyer->account->phone}}</th>
                    </tr>
                    <tr>
                        <th>Address người muốn xin</th>
                        <th>{{$transaction->buyer->account->address}}</th>
                    </tr>
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
                        <td>Lời nhắn xin</td>
                        <th>{{$transaction->message}}</th>
                    </tr>
                    <tr>
                        <td>
                            <button data-user-id="{{ Auth::user()->id }}" data-transaction-id="{{ $transaction->id }}"
                                    type="button" class="float-right btn btn-danger btn-sm btn-cf">Xác nhận cho
                            </button>
                        </td>
                    </tr>

                    </thead>
                </table>
            </div>
        </div>
    </div>

@endsection
