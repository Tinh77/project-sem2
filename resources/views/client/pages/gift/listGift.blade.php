@extends('client.pages.gift.list')
@section('content1')
        <div class="col-md-9">
        <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Món quà của bạn được quan tâm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Món quà bạn quan tâm</a>
                </li>
            </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                                    <a href="/client/gift/{{$item->id}}/edit"
                                       class="btn btn-sm btn-simple btn-warning btn-icon edit"><i
                                                class="fa fa-pencil"></i></a>
                                    <a data-transaction-id="{{ $item->id }}"
                                       class="btn btn-sm btn-danger remove btn-confirm-status"><i
                                                class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
                                    <a href="/client/gift/{{$item->id}}/edit"
                                       class="btn btn-sm btn-warning edit"><i
                                                class="fa fa-pencil"></i></a>
                                    <a data-transaction-id="{{ $item->id }}"
                                       class="btn btn-sm btn-danger remove btn-confirm-status"><i
                                                class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    <div class="clearfix"></div>

    {{--<script>--}}
        {{--function deleteItemConfirm($id) {--}}
            {{--$.ajaxSetup({--}}
                {{--headers: {--}}
                    {{--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
                {{--}--}}
            {{--});--}}
            {{--// var id = $(this).data("id");--}}
            {{--swal({--}}
                {{--text: "Bạn có chắc là muốn xóa lịch sử món quà này?",--}}
                {{--type: 'warning',--}}
                {{--// icon: 'warning',--}}
                {{--showCancelButton: true,--}}
                {{--// buttons: true,--}}

                {{--buttons: ["Hủy", "Xóa"]--}}

                {{--// confirmButtonClass: 'btn btn-success',--}}
                {{--// cancelButtonClass: 'btn btn-danger',--}}
                {{--// confirmButtonText: "Xoá",--}}
                {{--// cancelButtonText: "Hủy",--}}
                {{--// buttonsStyling: false--}}

            {{--}).then(function () {--}}

                {{--$.ajax({--}}
                    {{--url: '/client/gift/' + $id,--}}
                    {{--method: 'DELETE',--}}
                    {{--data: {--}}
                        {{--'_method': 'DELETE',--}}
                        {{--'id': $id--}}
                    {{--},--}}
                    {{--success: function () {--}}
                        {{--swal(--}}
                            {{--'Đã xóa thành công.',--}}
                            {{--'success'--}}
                        {{--)--}}
                        {{--setTimeout(function () {--}}
                            {{--window.location.reload();--}}
                        {{--}, 2 * 1000);--}}

                        {{--// $("#items-page").load(" #items-page");--}}

                    {{--},--}}
                    {{--error: function () {--}}
                        {{--swal(--}}
                            {{--'Deleted.',--}}
                            {{--'error'--}}
                        {{--)--}}
                    {{--}--}}
                {{--});--}}
            {{--});--}}
            {{--return false;--}}
        {{--};--}}
    {{--</script>--}}
@endsection
