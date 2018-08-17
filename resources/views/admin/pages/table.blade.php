@extends('admin.layout.master-v2')
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
                            <h4 class="card-title">DataTables.net</h4>
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
                                                        rowspan="1" colspan="1" style="width: 207px;"
                                                        aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">Name
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables"
                                                        rowspan="1" colspan="1" style="width: 303px;"
                                                        aria-label="Position: activate to sort column ascending">
                                                        Position
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables"
                                                        rowspan="1" colspan="1" style="width: 156px;"
                                                        aria-label="Office: activate to sort column ascending">Office
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables"
                                                        rowspan="1" colspan="1" style="width: 70px;"
                                                        aria-label="Age: activate to sort column ascending">Age
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables"
                                                        rowspan="1" colspan="1" style="width: 135px;"
                                                        aria-label="Date: activate to sort column ascending">Date
                                                    </th>
                                                    <th class="disabled-sorting text-right sorting" tabindex="0"
                                                        aria-controls="datatables" rowspan="1" colspan="1"
                                                        style="width: 149px;"
                                                        aria-label="Actions: activate to sort column ascending">Actions
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tfoot>
                                                <tr>
                                                    <th rowspan="1" colspan="1">Name</th>
                                                    <th rowspan="1" colspan="1">Position</th>
                                                    <th rowspan="1" colspan="1">Office</th>
                                                    <th rowspan="1" colspan="1">Age</th>
                                                    <th rowspan="1" colspan="1">Start date</th>
                                                    <th class="text-right" rowspan="1" colspan="1">Actions</th>
                                                </tr>
                                                </tfoot>
                                                <tbody>

                                                <tr role="row" class="even">
                                                    <td tabindex="0" class="sorting_1">Colleen Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td class="text-right">
                                                        <a href="#" class="btn btn-simple btn-info btn-icon like"><i
                                                                    class="material-icons">favorite</i></a>
                                                        <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i
                                                                    class="material-icons">dvr</i></a>
                                                        <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i
                                                                    class="material-icons">close</i></a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dataTables_info" id="datatables_info" role="status"
                                                 aria-live="polite">Showing 1 to 10 of 40 entries
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="dataTables_paginate paging_full_numbers"
                                                 id="datatables_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button first disabled" id="datatables_first"><a
                                                                href="#" aria-controls="datatables" data-dt-idx="0"
                                                                tabindex="0">First</a></li>
                                                    <li class="paginate_button previous disabled"
                                                        id="datatables_previous"><a href="#" aria-controls="datatables"
                                                                                    data-dt-idx="1" tabindex="0">Previous</a>
                                                    </li>
                                                    <li class="paginate_button active"><a href="#"
                                                                                          aria-controls="datatables"
                                                                                          data-dt-idx="2"
                                                                                          tabindex="0">1</a></li>
                                                    <li class="paginate_button "><a href="#" aria-controls="datatables"
                                                                                    data-dt-idx="3" tabindex="0">2</a>
                                                    </li>
                                                    <li class="paginate_button "><a href="#" aria-controls="datatables"
                                                                                    data-dt-idx="4" tabindex="0">3</a>
                                                    </li>
                                                    <li class="paginate_button "><a href="#" aria-controls="datatables"
                                                                                    data-dt-idx="5" tabindex="0">4</a>
                                                    </li>
                                                    <li class="paginate_button next" id="datatables_next"><a href="#"
                                                                                                             aria-controls="datatables"
                                                                                                             data-dt-idx="6"
                                                                                                             tabindex="0">Next</a>
                                                    </li>
                                                    <li class="paginate_button last" id="datatables_last"><a href="#"
                                                                                                             aria-controls="datatables"
                                                                                                             data-dt-idx="7"
                                                                                                             tabindex="0">Last</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
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