@extends('client.layout.master')
@section('content')
    <div class="card padding">
        <div class="card-body">
            <h5 class="card-title">Lịch sử giao dịch</h5>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name Gift</th>
                    <th scope="col">Buyer</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($obj as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>
                            <div style="background-image: url({{$item->gift_images}}) ;background-size:
                                    cover;background-position: center;background-repeat: no-repeat;width: 70px;height:
                                    70px">
                            </div>
                        </td>
                        <td>{{$item->gift_name}}</td>
                        <td>{{$item->account_first_name}}</td>
                        <td>
                           <?php
                            echo config('define.list_status')[$item->status]
                            ?>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection