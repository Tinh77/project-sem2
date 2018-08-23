@extends('client.pages.gift.list')
@section('content1')
    <div class="col-md-9 personal">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <h4 class="card-title">Danh sách món quà đã đăng của bạn.</h4>
                <div class="row content-personal">
                    <table id="datatables"
                           class="table table-striped table-no-bordered table-hover dataTable dtr-inline"
                           cellspacing="0" width="100%" style="width: 100%;" role="grid"
                           aria-describedby="datatables_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="datatables"
                            rowspan="1" colspan="1" style="width: 80px;"
                            aria-sort="ascending"
                            aria-label="Name: activate to sort column descending">Id
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatables"
                                rowspan="1" colspan="1" style="width: 370px;"
                                aria-label="Office: activate to sort column ascending">Tên món quà
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatables"
                                rowspan="1" colspan="1" style="width: 570px;"
                                aria-label="Position: activate to sort column ascending">
                                Ảnh món quà
                            </th>

                            <th class="sorting" tabindex="0" aria-controls="datatables"
                                rowspan="1" colspan="1" style="width: 470px;"
                                aria-label="Position: activate to sort column ascending">
                                Mô tả món quà
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatables"
                                rowspan="1" colspan="1" style="width: 200px;"
                                aria-label="Office: activate to sort column ascending">Trạng thái
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatables"
                                rowspan="1" colspan="1" style="width: 100px;"
                                aria-label="Office: activate to sort column ascending">Xóa
                            </th>
                        </tr>
                        </thead>
                        <tbody id="items-page">
                        @foreach($obj as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->name}}</td>
                                <td>
                                    <div style="background-image: url({{$item->images}}) ;background-size:
                                        cover;background-position: center;background-repeat: no-repeat;width: 70px;height:
                                        70px">
                                    </div>
                                </td>
                                <td>{{$item->description}}</td>
                                <td>
                                {{$item->status}}
                                <!--                                --><?php
                                    //                                echo config('define.list_status')[$item->status]
                                    //                                ?>
                                </td>
                                <td>
                                    <button data-id="{{$item->id}}" onclick="deleteItemConfirm({{$item->id}});"
                                       class="btn btn-simple btn-danger btn-icon remove btn-delete">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
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
                buttons: ["Hủy", "Xóa"]
            }).then(function() {

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
                        }, 2*1000);

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