@extends('client.pages.gift.list')
@section('content1')
    <div class="col-md-9 personal">
        <div class="row justify-content-center">
            <h4 class="card-title">Danh sách món quà đã đăng của bạn.</h4>
            <div class="row content-personal">

                <table id="datatables"
                       class="table table-striped table-no-bordered table-hover dataTable dtr-inline"
                       cellspacing="0" width="100%" style="width: 100%;" role="grid"
                       aria-describedby="datatables_info">
                    @if($obj->count() >0)
                    <thead>
                    <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="datatables"
                            rowspan="1" colspan="1" style="width: 80px;"
                            aria-sort="ascending"
                            aria-label="Name: activate to sort column descending">Id
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="datatables"
                            rowspan="1" colspan="1" style="width: 400px;"
                            aria-label="Office: activate to sort column ascending">Tên món quà
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="datatables"
                            rowspan="1" colspan="1" style="width: 400px"
                            aria-label="Position: activate to sort column ascending">
                            Ảnh món quà
                        </th>

                        <th class="sorting" tabindex="0" aria-controls="datatables"
                            rowspan="1" colspan="1" style="width: 470px;"
                            aria-label="Position: activate to sort column ascending">
                            Mô tả món quà
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="datatables"
                            rowspan="1" colspan="1" style="width: 300px;"
                            aria-label="Office: activate to sort column ascending">Trạng thái
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="datatables"
                            rowspan="1" colspan="1" style="width: 300px;"
                            aria-label="Office: activate to sort column ascending">Thao tác
                        </th>

                    </tr>
                    </thead>
                    <tbody id="items-page">
                        @foreach($obj as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->name}}</td>
                                <td>
                                    <div
                                            style="background-image: url('{{\JD\Cloudder\Facades\Cloudder::show($item -> images,
                                        array('width'=>500, 'height'=>500,'crop'=>'fit'))}}');background-size: cover;
                                                    background-repeat: no-repeat;background-position: center;width: 70px;height: 70px">
                                    </div>
                                </td>
                                <td>{{str_limit($item->description,30)}}</td>
                                <td>
                                {{$item->status}}
                                </td>
                                <td>
                                    <a href="/client/gift/{{$item->id}}/edit"
                                       class="btn-icon edit"><i class="fa fa-edit" title="sửa bài đăng"></i></a>
                                    <a href="/client/gift/{{$item->id}}"
                                       class="btn-icon remove btn-delete btn-sm" title="xem chi tiết"><i class="fa fa-info"></i>
                                    </a>
                                    <a data-id="{{$item->id}}" onclick="deleteItemConfirm({{$item->id}});"
                                       class="btn-icon remove btn-delete" title="xóa bài đăng"><i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        @else
                            <div class="card text-center">
                                <div class="card-body">
                                    <h5 class="card-title">Bạn chưa đăng sản phẩm nào</h5>
                                </div>
                            </div>
                        @endif
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
                text: "Bạn có chắc là muốn xóa món quà này?",
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