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
        <h1>Thông tin chi tiết khách thuê</h1>
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
                                <div id="preview-avatar">
                                    <div class='preview-ava'><img src='/admin/img/product-1.jpg'></div>
                                </div>
                            </div>
                            <div id="carouselExampleIndicators" class="carousel slide col-md-6" data-bs-ride="carousel">
                                <label for="validationCustom14" class="form-label">Ảnh CCCD</label>
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                        class="active" aria-label="Slide 1" aria-current="true"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                        aria-label="Slide 2" class=""></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="/admin/img/slides-1.jpg" class="d-block w-100" style="object-fit: cover" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/admin/img/slides-2.jpg" class="d-block w-100" style="object-fit: cover" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/admin/img/slides-3.jpg" class="d-block w-100" style="object-fit: cover" alt="...">
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>

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
