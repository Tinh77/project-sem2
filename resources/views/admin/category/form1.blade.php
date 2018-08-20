@extends('admin.layout.master-v2')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form method="POST" action="admin/demo" class="form-horizontal">
                            {{csrf_field()}}
                            <div class="card-header card-header-text" data-background-color="rose">
                                <h4 class="card-title">Thêm danh mục</h4>
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <label class="col-sm-2 label-on-left">Tên</label>
                                    <div class="col-sm-10">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label"></label>
                                            <input type="text" class="form-control" value="" name="name">
                                            <span class="help-block">Vui lòng nhập tên.</span>
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Mô tả sản phẩm.</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" value="" name="description">
                                        <span class="material-input"></span></div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 label-on-left">Ảnh đại diện</label>
                                <div class="col-sm-10">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"></label>
                                        <input type="text" class="form-control" value="" name="thumbnail">
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-10">
                                    <button type="submit" value="Submit" class="btn btn-fill btn-success">Lưu
                                        <div class="ripple-container"></div>
                                    </button>
                                    <button type="reset" value="Reset" class="btn btn-fill btn-rose">Làm lại
                                        <div class="ripple-container"></div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
