@extends('client.layout.master')
@section("content")
    <div class="container">
        <div class="gitf-form mt-5 font-text">
            <!-- Card -->
            <div class="card card-cascade wider reverse">

                <!-- Card image -->
                <div class="view view-cascade overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
                         alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">

                    <h4 class="card-title"><strong>Thông tin sản phẩm muốn cho</strong></h4>
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
                    <div class="flash-message">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if(Session::has('alert-' . $msg))

                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                            @endif
                        @endforeach
                    </div>
                    <form action="/client/gift" method="POST" class="text-center border-light p-5"
                          enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm">
                                <table>
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
                                            <input type="file" name="images" class="form-control">
                                        </td>
                                    </tr>
                                    <td>Chọn độ tuổi sản phẩm</td>
                                    <td>
                                        <select class="browser-default custom-select mb-4 mt-4" name="age_range">
                                            <option value="0" selected>--Mọi lứa tuổi--</option>
                                            <option value="1">Dưới 6 tháng</option>
                                            <option value="2">6 - 12 tháng</option>
                                            <option value="3">12 - 24 tháng</option>
                                            <option value="4">Trên 24 tháng</option>
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
                                                <option value="0" selected>--Tất cả--</option>
                                                <option value="1">Nam</option>
                                                <option value="2">Nữ</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ</td>
                                        <td>
                                    <textarea type="text" id="defaultContactFormName" class="form-control mb-4"
                                              placeholder="Địa điểm nơi có thể giao dịch sản phẩm"
                                              name="address"></textarea>
                                            @if($errors->has('address'))
                                                <label class="text-danger float-right">*{{$errors->first('address')}}</label>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Thành phố</td>
                                        <td>
                                            <select name="city" id="" class="browser-default custom-select mb-4">
                                                <option value="0">--Toàn quốc--</option>
                                                <option value="1">Hà Nội</option>
                                                <option value="2">Đà Nẵng</option>
                                                <option value="3">Nha Trang</option>
                                                <option value="4">TP Hồ Chí Minh</option>
                                                <option value="5">An Giang</option>
                                                <option value="6">Bà Rịa - Vũng Tàu</option>
                                                <option value="7">Bắc Giang</option>
                                                <option value="8">Bắc Kạn</option>
                                                <option value="9">Bạc Liêu</option>
                                                <option value="10">Bắc Ninh</option>
                                                <option value="11">Bến Tre</option>
                                                <option value="12">Bình Định</option>
                                                <option value="13">Bình Dương</option>
                                                <option value="14">Bình Phước</option>
                                                <option value="15">Bình Thuận</option>
                                                <option value="16">Cà Mau</option>
                                                <option value="17">Cần Thơ</option>
                                                <option value="18">Cao Bằng</option>
                                                <option value="19">Đắk Lắk</option>
                                                <option value="20">Đắk Nông</option>
                                                <option value="21">Điện Biên</option>
                                                <option value="22">Đồng Nai</option>
                                                <option value="23">Đồng Tháp</option>
                                                <option value="24">Gia Lai</option>
                                                <option value="25">Hà Giang</option>
                                                <option value="26">Hà Nam</option>
                                                <option value="27">Hà Tĩnh</option>
                                                <option value="28">Hải Dương</option>
                                                <option value="29">Hải Phòng</option>
                                                <option value="30">Hậu Giang</option>
                                                <option value="31">Hòa Bình</option>
                                                <option value="32">Hưng Yên</option>
                                                <option value="33">Khánh Hòa</option>
                                                <option value="34">Kiên Giang</option>
                                                <option value="35">Kon Tum</option>
                                                <option value="36">Lai Châu</option>
                                                <option value="37">Lâm Đồng</option>
                                                <option value="38">Lạng Sơn</option>
                                                <option value="39">Lào Cai</option>
                                                <option value="40">Long An</option>
                                                <option value="41">Nam Định</option>
                                                <option value="42">Nghệ An</option>
                                                <option value="43">Ninh Bình</option>
                                                <option value="44">Ninh Thuận</option>
                                                <option value="45">Phú Thọ</option>
                                                <option value="46">Phú Yên</option>
                                                <option value="47">Quảng Bình</option>
                                                <option value="48">Quảng Nam</option>
                                                <option value="49">Quảng Ngãi</option>
                                                <option value="50">Quảng Ninh</option>
                                                <option value="51">Quảng Trị</option>
                                                <option value="52">Sóc Trăng</option>
                                                <option value="53">Sơn La</option>
                                                <option value="54">Tây Ninh</option>
                                                <option value="55">Thái Bình</option>
                                                <option value="56">Thái Nguyên</option>
                                                <option value="57">Thanh Hóa</option>
                                                <option value="58">Thừa Thiên Huế</option>
                                                <option value="59">Tiền Giang</option>
                                                <option value="60">Trà Vinh</option>
                                                <option value="61">Tuyên Quang</option>
                                                <option value="62">Vĩnh Long</option>
                                                <option value="63">Vĩnh Phúc</option>
                                                <option value="64">Yên Bái</option>
                                            </select>
                                            @if($errors->has('city'))
                                                <label class="text-danger float-right">*{{$errors->first('city')}}</label>
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <button type="submit" onclick="myFunction()" class="btn btn-info">Lưu thông tin</button>
                        <button type="reset" class="btn btn-grey">Làm lại</button>

                    </form>


                </div>
            </div>
            <!-- Card -->
        </div>
    </div>

@endsection






