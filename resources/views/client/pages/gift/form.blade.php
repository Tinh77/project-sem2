@extends('client.layout.master')
@section("content")
    <div class="container">
        <div class="gitf-form mt-5 font-text">
            <div class="card card-cascade wider reverse">
                <div class="view view-cascade overlay">
                    <div class="image-form" style="background-image: url({{asset('img/silde/bg-01.jpg')}})"></div>
                    <a href="#!">
                        {{--<div class="mask rgba-white-slight"></div>--}}
                    </a>
                </div>
                <div class="card-body card-body-cascade text-center">
                    <h4 class="card-title"><strong>Đăng tin</strong></h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            Vui lòng kiểm tra lại các trường bên dưới
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="/client/gift" method="POST" class="text-center border border-light p-5"
                          enctype="multipart/form-data">
                        {{csrf_field()}}
                        <table class="table table-borderless">
                            <tr>
                                <td>Chọn danh mục</td>
                                <td>
                                    <select class="browser-default custom-select mb-4" name="category_id">
                                        <option value="0" selected>--Chọn danh mục sản phẩm--</option>
                                        @foreach($obj as $item)
                                            <option value="{{$item -> id}}">{{$item -> name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Tên sản phẩm</td>
                                <td>
                                    <input type="text" id="defaultContactFormName" class="form-control mb-4"
                                           placeholder="Tên sản phẩm" name="name">
                                    @if($errors->has('name'))
                                        <label class="text-danger float-right">*{{$errors->first('name')}}</label>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Mô tả sản phẩm</td>
                                <td>
                                    <div class="form-group">
                                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"
                                              placeholder="Mô tả sản phẩm" name="description"></textarea>
                                        @if($errors->has('description'))
                                            <label class="text-danger float-right">*{{$errors->first('description')}}</label>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Hình ảnh</td>
                                <td>
                                    <input type="file" name="images">
                                </td>
                            </tr>
                            <td>Chọn độ tuổi sản phẩm</td>
                            <td>
                                <select class="browser-default custom-select mb-4" name="age_range">
                                    <option value="1" selected>--Lựa chọn độ tuổi món quà của bạn--</option>
                                    <option value="2">Report a bug</option>
                                    <option value="3">Feature request</option>
                                    <option value="4">Feature request</option>
                                </select>
                            </td>
                            <tr>
                                <td>Số điện thoại</td>
                                <td>
                                    <input type="numberu" class="form-control mb-4"
                                           placeholder="Số điện thoại" name="phone_number">
                                    @if($errors->has('phone_number'))
                                        <label class="text-danger float-right">*{{$errors->first('phone_number')}}</label>
                                    @endif

                                </td>
                            </tr>
                            <tr>
                                <td>Giới tính</td>
                                <td>
                                    <select class="browser-default custom-select mb-4" name="gender">
                                        <option value="0" selected>--Lựa chọn giới tính của bạn--</option>
                                        <option value="1">Nam</option>
                                        <option value="2">Nữ</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td>
                                    <input type="text" id="defaultContactFormName" class="form-control mb-4"
                                           placeholder="Tên sản phẩm" name="address">
                                    @if($errors->has('address'))
                                        <label class="text-danger float-right">*{{$errors->first('address')}}</label>
                                    @endif
                                </td>
                            </tr>
                        </table>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection