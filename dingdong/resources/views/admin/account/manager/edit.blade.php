@extends('admin.index')
@section('contentadmindashboard')
    <style>
        .preview {
            display: inline-block;
            margin: 10px;

        }

        .preview-ava {
            display: inline-block;
            margin: 10px;
        }

        .preview-ava img {
            width: 100%;
            aspect-ratio:1/1;
        }

        .preview img {
            width: 100px;
            height: 100px;
            margin-right: 10px;
        }

    </style>
    <div class="pagetitle">
        <h1>Chỉnh sửa thông tin quản lý</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Custom Styled Validation -->
                        <form class="row g-3 needs-validation" novalidate="">
                            <h5 class="card-title">Thông tin chung</h5>
                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">Họ và tên</label>
                                <input type="text" class="form-control" id="validationCustom01" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Nhập dữ liệu!
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom02" class="form-label">Email</label>
                                <input type="email" class="form-control" id="validationCustom02" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Nhập dữ liệu!
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom03" class="form-label">Số điện thoại</label>
                                <input type="number" class="form-control" id="validationCustom03" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Nhập dữ liệu!
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom05" class="form-label">Ngày sinh</label>
                                <input type="date" class="form-control" id="validationCustom05" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Nhập dữ liệu!
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom08" class="form-label">Số CCCD</label>
                                <input type="number" class="form-control" id="validationCustom08" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Nhập dữ liệu!
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom06" class="form-label">Ngày cấp</label>
                                <input type="date" class="form-control" id="validationCustom06" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Nhập dữ liệu!
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom07" class="form-label">Nơi cấp</label>
                                <input type="text" class="form-control" id="validationCustom07" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Nhập dữ liệu!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label">Hộ khẩu thường trú</label>
                                <input type="text" class="form-control" id="validationCustom04" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Nhập dữ liệu!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="formFile" class="form-label">Ảnh dại diện</label>
                                <input class="form-control" type="file" id="avatar-input">
                                <div id="preview-avatar"></div>
                            </div>
                            <div class="col-md-8">
                                <label for="validationCustom19" class="form-label">Ảnh CCCD</label>
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
                                "'><button class='delete bi bi-trash'></button></div>").appendTo(
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

        $(document).ready(function() {
            $("#avatar-input").on("change", function() {
                var files = $(this)[0].files;
                $("#preview-avatar").empty();
                if (files.length > 0) {
                    for (var i = 0; i < files.length; i++) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $("<div class='preview-ava'><img src='" + e.target.result +
                                "'></div>").appendTo(
                                "#preview-avatar");
                        };
                        reader.readAsDataURL(files[i]);
                    }
                }
            });
            $("#preview-avatar").on("click", ".delete", function() {
                $(this).parent(".preview-ava").remove();
                $("#avatar-input").val(""); // Clear input value if needed
            });
        });
    </script>
@endsection
