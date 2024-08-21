@extends('admin.index')
@section('contentadmindashboard')
    <div class="pagetitle">
        <h1>Thông Tin Phòng Trọ</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Custom Styled Validation -->
                        <form class="row g-3 needs-validation" novalidate="">
                            <h5 class="card-title">Thông tin chung</h5>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Tên phòng trọ</label>
                                    <input type="text" class="form-control" id="validationCustom01" required="" disabled>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom02" class="form-label">Nhà trọ</label>
                                    <select class="form-select" aria-label="Default select example" id="validationCustom02" disabled>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom03" class="form-label">Giá thuê</label>
                                    <input type="number" class="form-control" id="validationCustom03" required="" disabled>

                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom04" class="form-label">Trạng thái</label>
                                    <select class="form-select" aria-label="Default select example" id="validationCustom04" disabled>
                                        <option value="1" class="text-success">Đã thuê</option>
                                        <option value="2" class="text-danger">Trống</option>
                                      </select>
                                </div>

                            </div>

                            <div id="carouselExampleIndicators" class="carousel slide col-md-6" data-bs-ride="carousel">
                                <label for="validationCustom14" class="form-label">Ảnh</label>
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
                            <h5 class="card-title">Kiểm tra thiết bị </h5>
                            <div class="col-md-1">
                                <label for="validationCustom11" class="form-label">Giường</label>
                                <input type="number" class="form-control" id="validationCustom11" disabled>
                            </div>
                            <div class="col-md-1">
                                <label for="validationCustom12" class="form-label">Tủ quần áo</label>
                                <input type="number" class="form-control" id="validationCustom12" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom13" class="form-label">Nóng lạnh</label>
                                <input type="number" class="form-control" id="validationCustom13" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom15" class="form-label">Tủ Lạnh</label>
                                <input type="number" class="form-control" id="validationCustom15" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom16" class="form-label">Bếp từ</label>
                                <input type="number" class="form-control" id="validationCustom16" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom17" class="form-label">Đèn</label>
                                <input type="number" class="form-control" id="validationCustom17" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom14" class="form-label">Điều hòa</label>
                                <input type="number" class="form-control" id="validationCustom14" disabled>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom18" class="form-label">Ghi chú</label>
                                <!-- TinyMCE Editor -->
                                <textarea class="tinymce-editor" disabled></textarea><!-- End TinyMCE Editor -->
                            </div>
                        </form>
                        <!-- End Custom Styled Validation -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
