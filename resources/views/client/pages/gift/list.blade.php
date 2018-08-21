@extends('client.layout.master')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-icon" data-background-color="purple">
                            <i class="material-icons">assignment</i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">Lịch sử giao dịch.</h4>
                            <div class="toolbar">
                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                            </div>
                            <div class="material-datatables">
                                <div id="datatables_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_length" id="datatables_length"><label
                                                    class="form-group">Show <select name="datatables_length"
                                                                                    aria-controls="datatables"
                                                                                    class="form-control input-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="-1">All</option>
                                                    </select> entries</label></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div id="datatables_filter" class="dataTables_filter"><label
                                                    class="form-group"><input type="search"
                                                                              class="form-control input-sm"
                                                                              placeholder="Search records"
                                                                              aria-controls="datatables"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
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
                                                        rowspan="1" colspan="1" style="width: 200px;"
                                                        aria-label="Position: activate to sort column ascending">
                                                        owner_id
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables"
                                                        rowspan="1" colspan="1" style="width: 170px;"
                                                        aria-label="Office: activate to sort column ascending">buyer_id
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables"
                                                        rowspan="1" colspan="1" style="width: 350px;"
                                                        aria-label="Age: activate to sort column ascending">gift_id
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables"
                                                        rowspan="1" colspan="1" style="width: 70px;"
                                                        aria-label="Date: activate to sort column ascending">status
                                                    </th>
                                                    <th class="disabled-sorting text-right sorting" tabindex="0"
                                                        aria-controls="datatables" rowspan="1" colspan="1"
                                                        style="width: 135px;"
                                                        aria-label="Actions: activate to sort column ascending">Actions
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tfoot>
                                                <tr>
                                                    <th rowspan="1" colspan="1">Id</th>
                                                    <th rowspan="1" colspan="1">owner_id</th>
                                                    <th rowspan="1" colspan="1">buyer_id</th>
                                                    <th rowspan="1" colspan="1">gift_id</th>
                                                    <th rowspan="1" colspan="1">status</th>
                                                    <th class="text-right" rowspan="1" colspan="1">Actions</th>
                                                </tr>
                                                </tfoot>
                                                <tbody>
                                                @foreach($list_obj as $item)
                                                    <tr role="row" class="even">
                                                        <td>{{$item ->id}}</td>
                                                        <td>{{$item ->name}}</td>
                                                        <td>
                                                            <div class="card"
                                                                 style="width: 100px;height: 80px;background-image: url('{{$obj->thumbnail}}'); background-size: cover">
                                                            </div>
                                                        </td>
                                                        <td>{{$item ->description}}</td>
                                                        <td>{{$item ->created_at}}</td>
                                                        <td class="text-right">
                                                            <a href="/admin/category/{{$item->id}}/edit"
                                                               class="btn btn-simple btn-warning btn-icon edit"><i
                                                                    class="material-icons">edit</i></a>
                                                            <a href="#/{{$item->id}}" id="{{$item->id}}"
                                                               class="btn btn-simple btn-danger btn-icon remove btn-delete"><i
                                                                    class="material-icons">close</i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row text-center">
                                        {{$list_obj->appends($_GET)->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end content-->
                    </div>
                    <!--  end card  -->
                </div>
                <!-- end col-md-12 -->
            </div>
            <!-- end row -->
        </div>
    </div>
@endsection
