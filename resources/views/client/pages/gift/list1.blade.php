@extends('client.layout.master')
@section('content')
    @extends('client.layout.masterlist')
    @section('content1')
        <div class="col-md-9 personal">
            <div class="row">
                <div class="col-md-9">
                    <h4 class="card-title">Lịch sử giao dịch sản phẩm.</h4>
                    <div class="row content-personal">
                        <table id="datatables"
                               class="table table-striped table-no-bordered table-hover dataTable dtr-inline"
                               cellspacing="0" width="100%" style="width: 100%;" role="grid"
                               aria-describedby="datatables_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="datatables"
                                    rowspan="1" colspan="1" style="width: 50px;"
                                    aria-sort="ascending"
                                    aria-label="Name: activate to sort column descending">Id
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="datatables"
                                    rowspan="1" colspan="1" style="width: 270px;"
                                    aria-label="Position: activate to sort column ascending">
                                    Tên người cho
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="datatables"
                                    rowspan="1" colspan="1" style="width: 270px;"
                                    aria-label="Office: activate to sort column ascending">Tên người nhận
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="datatables"
                                    rowspan="1" colspan="1" style="width: 350px;"
                                    aria-label="Age: activate to sort column ascending">Ảnh
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="datatables"
                                    rowspan="1" colspan="1" style="width: 170px;"
                                    aria-label="Date: activate to sort column ascending">Trạng thái
                                </th>
                                <th class="disabled-sorting text-right sorting" tabindex="0"
                                    aria-controls="datatables" rowspan="1" colspan="1"
                                    style="width: 135px;"
                                    aria-label="Actions: activate to sort column ascending">Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--@foreach($list_obj as $obj)--}}
                                {{--<tr role="row" class="even">--}}
                                    {{--<td>{{$obj ->id}}</td>--}}
                                    {{--<td>{{$obj ->name}}</td>--}}
                                    {{--<td><div class="card"--}}
                                             {{--style="width: 100px;height: 80px;background-image: url('{{$obj->thumbnail}}'); background-size: cover">--}}
                                        {{--</div></td>--}}
                                    {{--<td>{{$obj ->description}}</td>--}}
                                    {{--<td>{{$obj ->created_at}}</td>--}}
                                    {{--<td class="text-right">--}}
                                        {{--<a href="/admin/category/{{$obj->id}}/edit" class="btn btn-simple btn-warning btn-icon edit"><i--}}
                                                {{--class="material-icons">edit</i></a>--}}
                                        {{--<a href="#/{{$obj->id}}"  id="{{$obj->id}}" class="btn btn-simple btn-danger btn-icon remove btn-delete"><i--}}
                                                {{--class="material-icons">close</i></a>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
                            </tbody>
                        </table>

                    </div>
                </div>
                </div>
            </div>
    @endsection
@endsection
