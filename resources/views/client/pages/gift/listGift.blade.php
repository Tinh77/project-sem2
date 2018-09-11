@extends('client.pages.gift.list')
@section('content1')
    <div class="col-md-9">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                   aria-selected="true">Món quà của bạn được quan tâm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                   aria-controls="profile" aria-selected="false">Món quà bạn quan tâm</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                @if($obj_owner_id->count()>0)
                    <table id="datatables"
                           class="table table-striped table-no-bordered table-hover dataTable dtr-inline"
                           cellspacing="0" width="100%" style="width: 100%;" role="grid"
                           aria-describedby="datatables_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="datatables"
                                rowspan="1" colspan="1" style="width: 130px;"
                                aria-sort="ascending"
                                aria-label="Name: activate to sort column descending">Id món quà
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatables"
                                rowspan="1" colspan="1" style="width: 300px;"
                                aria-label="Office: activate to sort column ascending">Tên món quà
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatables"
                                rowspan="1" colspan="1" style="width: 200px;"
                                aria-label="Office: activate to sort column ascending">Trạng thái
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatables"
                                rowspan="1" colspan="1" style="width: 200px;"
                                aria-label="Office: activate to sort column ascending">
                            </th>
                        </tr>
                        </thead>
                        <tbody id="items-page">
                        @foreach($obj_owner_id as $item)
                            <tr>
                                <th scope="row">{{$item->gift->id}}</th>
                                <td>{{$item->gift->name}}</td>
                                <td>{{ $item->statusString }}</td>
                                <td class="float-left">
                                    <div class="btn-group">
                                        <a href="/client/transaction/details/{{$item->id}}"
                                           class="btn btn-sm btn-simple btn-warning btn-icon edit"><i
                                                    class="fa fa-pencil"></i></a>
                                        <a data-transaction-id="{{ $item->id }}"
                                           class="btn btn-sm btn-success remove btn-confirm-status"><i
                                                    class="fa fa-check"></i>
                                        </a>
                                        <a href="javascript:void(0)" data-transaction-id="{{ $item->id }}"
                                           class="btn btn-sm btn-simple btn-danger btn-refresh-status"><i
                                                    class="fa fa-refresh"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Hiện tại chưa ai quan tâm đến món quà của bạn</h5>
                            <p class="card-text">Nhận vào nút bên dưới để đăng món quà của bạn</p>
                            <a href="/client/gift/create" class="btn btn-primary">Bạn cần cho</a>
                        </div>
                    </div>
                @endif
            </div>
            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                @if($obj_buyer_id->count()>0)
                <table id="datatables"
                       class="table table-striped table-no-bordered table-hover dataTable dtr-inline"
                       cellspacing="0" width="100%" style="width: 100%;" role="grid"
                       aria-describedby="datatables_info">
                    <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="datatables"
                            rowspan="1" colspan="1" style="width: 130px;"
                            aria-sort="ascending"
                            aria-label="Name: activate to sort column descending">Id món quà
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="datatables"
                            rowspan="1" colspan="1" style="width: 300px;"
                            aria-label="Office: activate to sort column ascending">Tên món quà
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="datatables"
                            rowspan="1" colspan="1" style="width: 200px;"
                            aria-label="Office: activate to sort column ascending">Trạng thái
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="datatables"
                            rowspan="1" colspan="1" style="width: 200px;"
                            aria-label="Office: activate to sort column ascending">
                        </th>
                    </tr>
                    </thead>
                    <tbody id="items-page">
                    @foreach($obj_buyer_id as $item)
                        <tr>
                            <th scope="row">{{$item->gift_id}}</th>
                            <td>{{$item->gift->name}}</td>
                            <td>{{ $item->statusString }}</td>
                            <td class="float-left">
                                <div class="btn-group">
                                    <a href="/client/transaction/details/{{$item->id}}"
                                       class="btn btn-sm btn-warning edit" title="thông tin chi tiết giao dịch"><i class="fa fa-info-circle" ></i></a>
                                    <a data-transaction-id="{{ $item->id }}"
                                       class="btn btn-sm btn-success remove btn-confirm-status"><i
                                                class="fa fa-check"></i>
                                    </a>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Hiện tại bạn chưa quan tâm đến sản phẩm nào</h5>
                            <p class="card-text">Đến trang danh sách các món quà để có thể quan tâm nhiều hơn</p>
                            <a href="/client/gift" class="btn btn-primary">Danh sách các món quà</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
@endsection