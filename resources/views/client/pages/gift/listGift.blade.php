@extends('client.pages.gift.list')
@section('content1')
    <div class="col-md-9 personal">
        <div class="row justify-content-center">
            <h4 class="card-title">Danh sách món quà cho đi.</h4>
            <div class="row content-personal" style="padding-left: 15px;">
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
                            aria-label="Office: activate to sort column ascending">Action
                        </th>
                    </tr>
                    </thead>
                    <tbody id="items-page">
                    @foreach($obj_owner_id as $item)
                        <tr>
                            <th scope="row">{{$item->gift_id}}</th>
                            <td>{{$item->gift_name}}</td>
                            <td>{{ $item->statusString }}</td>
                            <td class="float-left">
                                <div class="btn-group">
                                    <a href="/client/gift/{{$item->id}}/edit"
                                       class="btn btn-sm btn-simple btn-warning btn-icon edit"><i
                                                class="fa fa-pencil"></i></a>
                                    <a data-id="{{$item->id}}" onclick="deleteItemConfirm({{$item->id}});"
                                       class="btn btn-sm btn-simple btn-danger btn-icon remove btn-delete"><i
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
        <div class="row justify-content-center">
            <h4 class="card-title">Danh sách món quà nhận lại.</h4>
            <div class="row content-personal" style="padding-left: 15px;">
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
                            aria-label="Office: activate to sort column ascending">Action
                        </th>
                    </tr>
                    </thead>
                    <tbody id="items-page">
                    @foreach($obj_buyer_id as $item)
                        <tr>
                            <th scope="row">{{$item->gift_id}}</th>
                            <td>{{$item->gift_name}}</td>
                            <td>{{ $item->statusString }}</td>
                            <td class="float-left">
                                <div class="btn-group">
                                    <a href="/client/gift/{{$item->id}}/edit"
                                       class="btn btn-sm btn-warning edit"><i
                                                class="fa fa-pencil"></i></a>
                                    <a data-id="{{$item->id}}" onclick="deleteItemConfirm({{$item->id}});"
                                       class="btn btn-sm btn-danger remove btn-delete"><i
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
    <script>
        function deleteItemConfirm($id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // var id = $(this).data("id");
            swal({
                text: "Bạn có chắc là muốn xóa mó1n quà này?",
                icon: 'warning',
                // buttons: true,
                // buttons: ["Hủy", "Xóa"]
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Xoá",
                cancelButtonText: "Hủy",
                closeOnConfirm: false,
                closeOnCancel: false

            }).then(function () {

                $.ajax({
                    url: '/client/gift/' + $id,
                    method: 'DELETE',
                    data: {
                        '_method': 'DELETE',
                        'id': $id
                    },
                    success: function (response) {
                        swal(
                            'Đã xóa thành công.',
                            'success'
                        )
                        setTimeout(function () {
                            window.location.reload();
                        }, 2 * 1000);

                        // $("#items-page").load(" #items-page");

                    },
                    error: function () {
                        swal(
                            'Deleted.',
                            'error'
                        )
                    }
                });
            });
            return false;
        };
    </script>
@endsection
