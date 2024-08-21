@extends('admin.index')
@section('contentadmindashboard')
    <div class="pagetitle">
        <h1>Chi Tiết Nhà Trọ</h1>
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
                                <input type="text" class="form-control" id="validationCustom01" required="" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom02" class="form-label">Diện tích</label>
                                <input type="number" class="form-control" id="validationCustom02" required="" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom03" class="form-label">Giá thuê</label>
                                <input type="number" class="form-control" id="validationCustom03" required="" disabled>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label">Địa chỉ</label>
                                <input type="text" class="form-control" id="validationCustom04" required="" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom05" class="form-label">Ngày bắt đầu</label>
                                <input type="date" class="form-control" id="validationCustom05" required="" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom06" class="form-label">Ngày kết thúc</label>
                                <input type="date" class="form-control" id="validationCustom06" required="" disabled>
                            </div>
                            <div class="col-md-1">
                                <label for="validationCustom07" class="form-label">Số tầng</label>
                                <input type="number" class="form-control" id="validationCustom07" required="" disabled>
                            </div>
                            <div class="col-md-1">
                                <label for="validationCustom08" class="form-label">Số phòng</label>
                                <input type="number" class="form-control" id="validationCustom08" required="" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom09" class="form-label">Mã hóa đơn điện</label>
                                <input type="text" class="form-control" id="validationCustom09" required="" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom10" class="form-label">Mã hóa đơn nước</label>
                                <input type="text" class="form-control" id="validationCustom10" required="" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="formFile" class="form-label">File hợp đồng</label>
                                <a href="" class="form-control"><i class="bi bi-cloud-download-fill"></i> Tải file
                                    xuống</a>
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
                                <label for="validationCustom15" class="form-label">Tủ lạnh</label>
                                <input type="number" class="form-control" id="validationCustom15" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom16" class="form-label">Bếp từ</label>
                                <input type="number" class="form-control" id="validationCustom16" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom17" class="form-label">Máy giặt</label>
                                <input type="number" class="form-control" id="validationCustom17" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom14" class="form-label">Điều hòa</label>
                                <input type="number" class="form-control" id="validationCustom14" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom18" class="form-label">Ghi chú</label>
                                <textarea class="form-control" style="height: auto" disabled></textarea>
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
                        </form>
                        <!-- End Custom Styled Validation -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
