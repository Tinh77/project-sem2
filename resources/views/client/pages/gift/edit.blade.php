@extends('client.layout.master')
@section('page-title', 'EditGift-Page')
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
                    <h4 class="card-title"><strong>Sửa món quà</strong></h4>
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
                    <form action="/client/gift/{{$obj->id}}" method="POST" class="text-center border border-light p-5"
                          enctype="multipart/form-data">
                        @method('PUT')
                        {{csrf_field()}}
                        <table class="table table-borderless">
                            <tr>
                                <td>Chọn danh mục</td>
                                <td>
                                    <select class="browser-default custom-select mb-4" name="category_id">
                                        <option>--Chọn danh mục sản phẩm--</option>
                                        @foreach($list_Category as $item)
                                            <option value="{{$item -> id}}"
                                            {{ ($item->id == $obj->category_id) ? 'selected' : '' }}
                                            >{{$item -> name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Tên sản phẩm</td>
                                <td>
                                    <input type="text" id="defaultContactFormName" class="form-control mb-4"
                                           placeholder="Tên sản phẩm" name="name" value="{{$obj->name}}">
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
                                              placeholder="Mô tả sản phẩm"
                                              name="description">{{$obj->description}}</textarea>
                                        @if($errors->has('description'))
                                            <label
                                                class="text-danger float-right">*{{$errors->first('description')}}</label>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Hình ảnh</td>
                                <td>
                                    <div
                                        style="background-image: url('{{\JD\Cloudder\Facades\Cloudder::show($obj -> images,
                                        array('width'=>300, 'height'=>300,'crop'=>'fit'))}}');background-size: cover;
                                            background-repeat: no-repeat;background-position: center;width: 70px;height: 70px">
                                    </div>
                                    <input type="file" name="photo">
                                    {{--{{Form::file('images')}}--}}
                                </td>
                            </tr>
                            <td>Chọn độ tuổi sản phẩm</td>
                            <td>
                                <select class="browser-default custom-select mb-4" name="age_range">
                                    <option value="0">--Lựa chọn độ tuổi món quà của bạn--</option>
                                    <option value="1" {{ ($obj->age_range == 1) ? 'selected' : '' }}>Report a bug</option>
                                    <option value="2" {{ ($obj->age_range == 2) ? 'selected' : '' }}>Feature request</option>
                                    <option value="3" {{ ($obj->age_range == 3) ? 'selected' : '' }}>Feature request</option>
                                </select>
                            </td>
                            <tr>
                                <td>Số điện thoại</td>
                                <td>
                                    <input type="numberu" class="form-control mb-4"
                                           placeholder="Số điện thoại" name="phone_number"
                                           value="{{$obj->phone_number}}">
                                    @if($errors->has('phone_number'))
                                        <label
                                            class="text-danger float-right">*{{$errors->first('phone_number')}}</label>
                                    @endif

                                </td>
                            </tr>
                            <tr>
                                <td>Giới tính</td>
                                <td>
                                    <select class="browser-default custom-select mb-4" name="gender">
                                        <option value="0">--Lựa chọn giới tính của bạn--</option>
                                        <option value="1" {{ ($obj->gender == 1) ? 'selected' : '' }}>Nam</option>
                                        <option value="2" {{ ($obj->gender == 2) ? 'selected' : '' }}>Nữ</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td>
                                    <input type="text" id="defaultContactFormName" class="form-control mb-4"
                                           placeholder="Tên sản phẩm" name="address" value="{{$obj->address}}">
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
