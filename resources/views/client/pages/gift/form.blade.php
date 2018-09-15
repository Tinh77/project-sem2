@extends('client.layout.master')
@section('page-title', 'Trang đăng món quà')
@section("content")
    <div class="container">
        <div class="gitf-form mt-5 font-text">
            <!-- Card -->
            <div class="card card-cascade wider reverse">

                <!-- Card image -->
                <div class="view view-cascade overlay">
                    <div class="card-img-top"
                         style="background-image: url({{asset("img/brand/Sharing-is-Caring-2.jpg")}});background-size: cover;background-repeat: no-repeat;width: auto;height: 65vh"></div>
                    {{--<img class=" " e src="{{asset("img/brand/Sharing-is-Caring-2.jpg")}}"--}}
                    {{--alt="Meaning Gift">--}}
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

                                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#"
                                                                                                         class="close"
                                                                                                         data-dismiss="alert"
                                                                                                         aria-label="close">&times;</a>
                                </p>
                            @endif
                        @endforeach
                    </div>
                    <form action="/client/gift" method="POST" class="text-center border-light p-5">
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
                                            <div class="form-group">
                                                <div class="row ml-1">
                                                    <input type="hidden" name="item_urls" id="item_urls">
                                                    <input type="file" style="display: none" id="fileElem" multiple
                                                           accept="image/*">
                                                    <span style="padding-right: 2px;">Bạn có thể thêm ảnh hoặc video vào sản phẩm. Lựa chọn giữa hai
                        phương án</span>
                                                    <a href="#" title="Click để upload ảnh" id="fileSelect">upload
                                                        ảnh</a>
                                                </div>

                                                <div class="progress-bar" id="progress-bar">
                                                    <div class="progress" id="progress"></div>
                                                </div>
                                                <div id="gallery"/>
                                            </div>
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
    <script>
        let max = 3;
        const cloudName = 'thanhtung';
        const unsignedUploadPreset = 'rfsi4sjd';
        var fileSelect = document.getElementById("fileSelect"),
            fileElem = document.getElementById("fileElem");
        // click vào link upload thì thay thế bằng click vào file upload.
        fileSelect.addEventListener("click", function (e) {
            if (fileElem && max > 0) {
                fileElem.click();
                max--;
            } else alert('Tối đa là 3 ảnh!');
            e.preventDefault(); // prevent navigation to "#"
        }, false);
        fileElem.addEventListener("change", function (e) {
            handleFiles(this.files);
        }, false);

        // *********** Upload file to Cloudinary ******************** //
        function uploadFile(file) {
            var url = `https://api.cloudinary.com/v1_1/${cloudName}/upload`;
            var xhr = new XMLHttpRequest();
            var fd = new FormData();
            xhr.open('POST', url, true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

            // Reset the upload progress bar
            document.getElementById('progress').style.width = 0;

            // Update progress (can be used to show progress indicator)
            xhr.upload.addEventListener("progress", function (e) {
                var progress = Math.round((e.loaded * 100.0) / e.total);
                document.getElementById('progress').style.width = progress + "%";

            });

            xhr.onreadystatechange = function (e) {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // File uploaded successfully
                    var response = JSON.parse(xhr.responseText);
                    // https://res.cloudinary.com/cloudName/image/upload/v1483481128/public_id.jpg
                    var url = response.secure_url;
                    // Create a thumbnail of the uploaded image, with 150px width
                    var tokens = url.split('/');
                    tokens.splice(-2, 0, 'w_150,c_scale');
                    var currentImgs = document.getElementById('gallery').innerHTML;
                    var imgText = '<img src="' + tokens.join('/') + '">';
                    // var img = new Image(); // HTML5 Constructor
                    // img.src = tokens.join('/');
                    // img.alt = response.public_id;
                    currentImgs += imgText;

                    var prefix_image = '@img@';
                    document.getElementById('gallery').innerHTML = currentImgs;
                    var item_urls = document.getElementById('item_urls');
                    item_urls.value += prefix_image + tokens.join('/');
                }
            };

            fd.append('upload_preset', unsignedUploadPreset);
            fd.append('tags', 'browser_upload'); // Optional - add tag for image admin in Cloudinary
            fd.append('file', file);
            xhr.send(fd);
        }

        // *********** Handle selected files ******************** //
        var handleFiles = function (files) {
            if (files.length !== 1) {
                alert("Bạn chọn chỉ được chọ một ảnh!");
                return;
            }
            for (var i = 0; i < 1; i++) {
                uploadFile(files[i]); // call the function to upload the file
            }
        };
    </script>
@endsection

