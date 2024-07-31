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
                            <div class="col-md-2">
                                <label for="validationCustom01" class="form-label">Tên phòng trọ</label>
                                <input type="text" class="form-control" id="validationCustom01" required="" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom02" class="form-label">Nhà trọ</label>
                                <select class="form-select" aria-label="Default select example" id="validationCustom02" disabled>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom03" class="form-label">Giá thuê</label>
                                <input type="number" class="form-control" id="validationCustom03" required="" disabled>

                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom04" class="form-label">Trạng thái</label>
                                <select class="form-select" aria-label="Default select example" id="validationCustom04" disabled>
                                    <option value="1" class="text-success">Đã thuê</option>
                                    <option value="2" class="text-danger">Trống</option>
                                  </select>

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