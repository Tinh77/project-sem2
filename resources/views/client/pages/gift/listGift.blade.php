@extends('client.pages.gift.list')
@section('content1')
    <div class="col-md-9 personal">
        <div class="row">
            <div class="col-md-9">
                <h4 class="card-title">Danh sách sản phẩm đã đăng của bạn.</h4>
                <div class="row content-personal">
                    <table id="datatables"
                           class="table table-striped table-no-bordered table-hover dataTable dtr-inline"
                           cellspacing="0" width="100%" style="width: 100%;" role="grid"
                           aria-describedby="datatables_info">
                        <thead>
                        <tr role="row">
                            {{--<th class="sorting_asc" tabindex="0" aria-controls="datatables"--}}
                            {{--rowspan="1" colspan="1" style="width: 50px;"--}}
                            {{--aria-sort="ascending"--}}
                            {{--aria-label="Name: activate to sort column descending">Id--}}
                            {{--</th>--}}
                            <th class="sorting" tabindex="0" aria-controls="datatables"
                                rowspan="1" colspan="1" style="width: 270px;"
                                aria-label="Office: activate to sort column ascending">Tên
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatables"
                                rowspan="1" colspan="1" style="width: 270px;"
                                aria-label="Position: activate to sort column ascending">
                                Ảnh
                            </th>

                            <th class="sorting" tabindex="0" aria-controls="datatables"
                                rowspan="1" colspan="1" style="width: 270px;"
                                aria-label="Position: activate to sort column ascending">
                                Mô tả
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatables"
                                rowspan="1" colspan="1" style="width: 270px;"
                                aria-label="Office: activate to sort column ascending">Trạng thái
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatables"
                                rowspan="1" colspan="1" style="width: 270px;"
                                aria-label="Office: activate to sort column ascending">Xóa
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($obj as $item)
                            <tr>
                                {{--<th scope="row">{{$item->id}}</th>--}}
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
                                    <a href="" data-id="{{$item->id}}"
                                       class="btn btn-simple btn-danger btn-delete">Delete</a>
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
        $(document).on('click', 'btn-delete', function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    // swal("Poof! Your imaginary file has been deleted!", {
                    //     icon: "success",
                    // });
                    $.ajax({
                        'url': '../gift/' + id,
                        'method': 'DELETE',
                        'data': {
                            '_token': $('meta[name="csrf-token"]').attr('content1')
                        },
                        success: function (response) {
                            swal({
                                text: 'Món Quà đã bị xoá.',
                                type: 'success',
                                confirmButtonClass: "btn btn-success",
                                buttonsStyling: false
                            })
                            setTimeout(function () {
                                window.location.reload();
                            }, 2 * 1000);
                        },
                        error: function () {
                            swal({
                                text: 'Có lỗi xảy ra, vui lòng thử lại sau.',
                                type: 'warning',
                                confirmButtonClass: "btn btn-danger",
                                buttonsStyling: false
                            })
                        }
                    });
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
        });
        // $('.btn-delete').click(function () {
        //     var thisButton = $(this);
        //     swal({
        //         text: "Bạn có chắc muốn xoá món quà này không?",
        //         type: 'warning',
        //         showCancelButton: true,
        //         confirmButtonClass: 'btn btn-success',
        //         cancelButtonClass: 'btn btn-danger',
        //         confirmButtonText: 'Đồng ý',
        //         cancelButtonText: 'Huỷ bỏ',
        //         buttonsStyling: false
        //     }).then(function () {
        //         var id = thisButton.attr('id');
        //         $.ajax({
        //             'url': '../gift/' + id,
        //             'method': 'DELETE',
        //             'data': {
        //                 '_token': $('meta[name="csrf-token"]').attr('content1')
        //             },
        //             success: function (response) {
        //                 swal({
        //                     text: 'Món Quà đã bị xoá.',
        //                     type: 'success',
        //                     confirmButtonClass: "btn btn-success",
        //                     buttonsStyling: false
        //                 })
        //                 setTimeout(function () {
        //                     window.location.reload();
        //                 }, 2 * 1000);
        //             },
        //             error: function () {
        //                 swal({
        //                     text: 'Có lỗi xảy ra, vui lòng thử lại sau.',
        //                     type: 'warning',
        //                     confirmButtonClass: "btn btn-danger",
        //                     buttonsStyling: false
        //                 })
        //             }
        //         });
        //     });
        //     return false;
        // })
    </script>
@endsection
