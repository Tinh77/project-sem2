@extends('admin.layout.app')
@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">
            <a href="#">Admin</a>
        </li>
        <li class="breadcrumb-item active">Dashboard</li>

        <li class="breadcrumb-menu d-md-down-none">
            <div class="btn-group" role="group" aria-label="Button group">
                <a class="btn" href="#">
                    <i class="icon-speech"></i>
                </a>
                <a class="btn" href="./">
                    <i class="icon-graph"></i> &nbsp;Dashboard</a>
                <a class="btn" href="#">
                    <i class="icon-settings"></i> &nbsp;Settings</a>
            </div>
        </li>
    </ol>
    <div class="container-fluid">
        <div>
            <div class="animated fadeIn">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-edit"></i> DataTables
                        <div class="card-header-actions">
                            <a href="https://datatables.net" class="card-header-action" target="_blank"></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="DataTables_Table_0_wrapper"
                             class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row">
                                {{--<div class="col-sm-12 col-md-6">--}}
                                    {{--<div class="dataTables_length" id="DataTables_Table_0_length">--}}
                                        {{--<label class=" float-left">Show--}}
                                            {{--<select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"--}}
                                                    {{--class="form-control form-control-sm">--}}
                                                {{--<option value="10">10</option>--}}
                                            {{--</select>--}}
                                            {{--entries--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="col-sm-12 col-md-12">
                                    <div id="DataTables_Table_0_filter" class="dataTables_filter float-right">
                                        <label>Search:
                                            <input type="search" class="form-control form-control-sm float-left" placeholder=""
                                                             aria-controls="DataTables_Table_0">
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-striped table-bordered "
                                           style="border-collapse: collapse !important">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Username: activate to sort column descending"
                                                style="width: 193.667px;">Image
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1"
                                                aria-label="Date registered: activate to sort column ascending"
                                                style="width: 163.667px;">Name
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1"
                                                aria-label="Role: activate to sort column ascending"
                                                style="width: 68.3333px;">Role
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1"
                                                aria-label="Status: activate to sort column ascending"
                                                style="width: 77.6667px;">Status
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                rowspan="1" colspan="1"
                                                aria-label="Actions: activate to sort column ascending"
                                                style="width: 170.667px;">Actions
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">Kristóf Filiberto</td>
                                            <td>2012/01/21</td>
                                            <td>Staff</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="#">
                                                    <i class="fa fa-search-plus "></i>
                                                </a>
                                                <a class="btn btn-info" href="#">
                                                    <i class="fa fa-edit "></i>
                                                </a>
                                                <a class="btn btn-danger" href="#">
                                                    <i class="fa fa-trash-o "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                         aria-live="polite">Showing 21 to 30 of 32 entries
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection