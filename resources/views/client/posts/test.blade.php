<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="card">
    <div class="card-body">
        <h5 class="card-title float-left">Thêm mới sản phẩm</h5>
        <a href="/admin/" class="float-right"><i class="fas fa-list-ul"></i> Danh sách sản phẩm</a>
        <div class="clearfix"></div>
        @if ($errors->any())
            <div class="alert alert-danger">
                Vui lòng sửa các lỗi bên dưới và thử lại.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif
        <form action="{{route('admin.product.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Tên</label>
                <div class="row ml-1">
                    <input type="text" id="name" name="name" class="form-control w-50 mr-2">
                    @if($errors->has('name'))
                        <label class="text-danger">*{{$errors->first('name')}}</label>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="category_id">Danh mục</label>
                <select id="category_id" name="category_id" class="form-control w-25" style="display: block!important;">
                    <option value="0">Chọn danh mục sản phẩm</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                @if($errors->has('description'))
                    <label class="text-danger">*{{$errors->first('description')}}</label>
                @endif
            </div>
            <div class="form-group">
                <label>Danh sách item</label>
                <div class="row ml-1">
                    <input type="hidden" name="item_urls" id="item_urls">
                    <input type="file" style="display: none" id="fileElem" multiple accept="image/*">
                    <span style="padding-right: 2px;">Bạn có thể thêm ảnh hoặc video vào sản phẩm. Lựa chọn giữa hai
                        phương án</span>
                    <a href="#" title="Click để upload ảnh" id="fileSelect">upload ảnh</a>
                    <span style="padding-right: 2px; padding-left: 2px;">hoặc</span>
                    <a href="#" title="Click để paste link ảnh online" id="fileSelect2">thêm link ảnh</a>.
                </div>
                <div id="dynamic_field" style="display: none;">
                    <div id="insertbox">
                        <input type="text" name="insert_link" id="insert_link" placeholder="Điền link ảnh" class="form-control name_list w-50 mr-2">
                        <a name="insert" id="btn_insert" class="btn btn-sm btn-success">Lưu</a>
                    </div>
                </div>
                <div class="progress-bar" id="progress-bar">
                    <div class="progress" id="progress"></div>
                </div>
                <div id="gallery" />
            </div>
            <div class="form-group">
                <input type="submit" value="Lưu thông tin" class="btn btn-primary btn_save">
                <input type="reset" value="Làm lại" class="btn btn-grey">
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        const cloudName = 'minhphoto';
        const unsignedUploadPreset = 'b46irklz';
        var fileSelect = document.getElementById("fileSelect"),
            fileElem = document.getElementById("fileElem"),
            fileSelect2 = document.getElementById("fileSelect2"),
            fileElem2 = document.getElementById("insert_link"),
            btn_insert = document.getElementById("btn_insert");
        // click vào link upload thì thay thế bằng click vào file upload.
        fileSelect.addEventListener("click", function (e) {
            if (fileElem) {
                fileElem.click();
            }
            e.preventDefault(); // prevent navigation to "#"
        }, false);

        fileSelect2.addEventListener("click", function (e) {
            $('#dynamic_field').css('display', 'block');
            // $('#dynamic_field').append(
            //     '<div id="insertbox"><input type="text" name="insert_link" id="insert_link" placeholder="Điền link ảnh" class="form-control name_list w-50 mr-2"><a name="insert" id="btn_insert" class="btn btn-sm btn-success">Lưu</a></div>'
            // );
            e.preventDefault(); // prevent navigation to "#"

        }, false);

        fileElem.addEventListener("change", function (e) {
            handleFiles(this.files);
        }, false);

        btn_insert.addEventListener("click", function (e) {
            if (fileElem2) {
                var getUrl = $('#insert_link').val();
                var currentImgs = document.getElementById('gallery').innerHTML;
                var imgText = '<img src="' + getUrl + '">';
                // var img = new Image(); // HTML5 Constructor
                // img.src = tokens.join('/');
                // img.alt = response.public_id;
                currentImgs += imgText;

                var prefix_image = '@img@';
                document.getElementById('gallery').innerHTML = currentImgs;
                var item_urls = document.getElementById('item_urls');
                item_urls.value += prefix_image + getUrl;

                $('#dynamic_field').css('display', 'none');
            }

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

                console.log(`fileuploadprogress data.loaded: ${e.loaded},
  data.total: ${e.total}`);
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
            for (var i = 0; i < files.length; i++) {
                uploadFile(files[i]); // call the function to upload the file
            }
        };
    </script>
</body>
</html>