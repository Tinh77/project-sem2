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
                    <form class="text-center border border-light p-5">
                        <table class="table table-borderless">
                            <tr>
                                <td>Chọn danh mục</td>
                                <td>
                                    <select class="browser-default custom-select mb-4">
                                        <option value="" disabled>Choose option</option>
                                        <option value="1" selected>--Chọn danh mục sản phẩm--</option>
                                        <option value="2">Report a bug</option>
                                        <option value="3">Feature request</option>
                                        <option value="4">Feature request</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Tên sản phẩm</td>
                                <td>
                                    <input type="text" id="defaultContactFormName" class="form-control mb-4"
                                           placeholder="Tên sản phẩm">
                                </td>
                            </tr>
                            <tr>
                                <td>Mô tả sản phẩm</td>
                                <td>
                                    <div class="form-group">
                                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"
                                              placeholder="Mô tả sản phẩm"></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Hình ảnh</td>
                                <td>
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>

                                </td>
                            </tr>
                            <td>Chọn độ tuổi sản phẩm</td>
                            <td>
                                <select class="browser-default custom-select mb-4">
                                    <option value="" disabled>Choose option</option>
                                    <option value="1" selected>--Lựa chọn độ tuổi món quà của bạn--</option>
                                    <option value="2">Report a bug</option>
                                    <option value="3">Feature request</option>
                                    <option value="4">Feature request</option>
                                </select>
                            </td>
                            <tr>
                                <td>Số điện thoại</td>
                                <td>
                                    <input type="number" id="defaultContactFormName" class="form-control mb-4"
                                           placeholder="Số điện thoại">
                                </td>
                            </tr>
                            <tr>
                                <td>Giới tính</td>
                                <td>
                                    <div class="form-check float-left">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                               id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-labe" for="exampleRadios1">
                                            Trai
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios"
                                               id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Gái
                                        </label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <button class="btn btn-amber btn-md mt-2" type="submit">Đăng tin</button>
                    </form>


                </div>
            </div>

        </div>
    </div>
@endsection