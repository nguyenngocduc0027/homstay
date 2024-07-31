@extends('admin.index')
@section('contentadmindashboard')
    <style>
        .preview {
            display: inline-block;
            margin: 10px;
        }

        .preview img {
            width: 100px;
            height: 100px;
            margin-right: 10px;
        }
    </style>
    <div class="pagetitle">
        <h1>Thêm mới nhà trọ</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Custom Styled Validation -->
                        <form class="row g-3 needs-validation" novalidate="">
                            <h5 class="card-title">Thông tin chung</h5>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Tên nhà trọ</label>
                                <input type="text" class="form-control" id="validationCustom01" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Nhập dữ liệu!
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom02" class="form-label">Diện tích</label>
                                <input type="number" class="form-control" id="validationCustom02" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Nhập dữ liệu!
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom03" class="form-label">Giá thuê</label>
                                <input type="number" class="form-control" id="validationCustom03" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Nhập dữ liệu!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label">Địa chỉ</label>
                                <input type="text" class="form-control" id="validationCustom04" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Nhập dữ liệu!
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom05" class="form-label">Ngày bắt đầu</label>
                                <input type="date" class="form-control" id="validationCustom05" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Nhập dữ liệu!
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom06" class="form-label">Ngày kết thúc</label>
                                <input type="date" class="form-control" id="validationCustom06" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Nhập dữ liệu!
                                </div>
                            </div>
                            <div class="col-md-1">
                                <label for="validationCustom07" class="form-label">Số tầng</label>
                                <input type="number" class="form-control" id="validationCustom07" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Nhập dữ liệu!
                                </div>
                            </div>
                            <div class="col-md-1">
                                <label for="validationCustom08" class="form-label">Số phòng</label>
                                <input type="number" class="form-control" id="validationCustom08" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Nhập dữ liệu!
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom09" class="form-label">Mã hóa đơn điện</label>
                                <input type="text" class="form-control" id="validationCustom09" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Nhập dữ liệu!
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom10" class="form-label">Mã hóa đơn nước</label>
                                <input type="text" class="form-control" id="validationCustom10" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Nhập dữ liệu!
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="formFile" class="form-label">File hợp đồng</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>

                            <h5 class="card-title">Kiểm tra thiết bị </h5>
                            <div class="col-md-1">
                                <label for="validationCustom11" class="form-label">Giường</label>
                                <input type="number" class="form-control" id="validationCustom11">
                            </div>
                            <div class="col-md-1">
                                <label for="validationCustom12" class="form-label">Tủ quần áo</label>
                                <input type="number" class="form-control" id="validationCustom12">
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom13" class="form-label">Nóng lạnh</label>
                                <input type="number" class="form-control" id="validationCustom13">
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom15" class="form-label">Tủ lạnh</label>
                                <input type="number" class="form-control" id="validationCustom15">
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom16" class="form-label">Bếp từ</label>
                                <input type="number" class="form-control" id="validationCustom16">
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom17" class="form-label">Máy giặt</label>
                                <input type="number" class="form-control" id="validationCustom17">
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom14" class="form-label">Điều hòa</label>
                                <input type="number" class="form-control" id="validationCustom14">
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom19" class="form-label">Ảnh nhà trọ</label>
                                <input type="file" class="form-control" id="file-input" multiple>
                                <div id="preview-container"></div>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom18" class="form-label">Ghi chú</label>
                                <!-- TinyMCE Editor -->
                                <textarea class="tinymce-editor"></textarea><!-- End TinyMCE Editor -->
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Thêm Mới</button>
                            </div>
                        </form>
                        <!-- End Custom Styled Validation -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            $("#file-input").on("change", function() {
                var files = $(this)[0].files;
                $("#preview-container").empty();
                if (files.length > 0) {
                    for (var i = 0; i < files.length; i++) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $("<div class='preview'><img src='" + e.target.result +
                                "'><button class='delete'>Delete</button></div>").appendTo(
                                "#preview-container");
                        };
                        reader.readAsDataURL(files[i]);
                    }
                }
            });
            $("#preview-container").on("click", ".delete", function() {
                $(this).parent(".preview").remove();
                $("#file-input").val(""); // Clear input value if needed
            });
        });
    </script>
@endsection
