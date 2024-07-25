@extends('admin.index')
@section('contentadmindashboard')
    <div class="pagetitle">
        <h1>Thêm Mới Phòng Trọ</h1>
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
                                <input type="text" class="form-control" id="validationCustom01" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Nhập dữ liệu!
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom02" class="form-label">Nhà trọ</label>
                                <select class="form-select" aria-label="Default select example" id="validationCustom02">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
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
                            <div class="col-md-2">
                                <label for="validationCustom04" class="form-label">Trạng thái</label>
                                <select class="form-select" aria-label="Default select example" id="validationCustom04">
                                    <option value="1" class="text-success">Đã thuê</option>
                                    <option value="2" class="text-danger">Trống</option>
                                  </select>
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Nhập dữ liệu!
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom05" class="form-label">Start Date</label>
                                <input type="date" class="form-control" id="validationCustom05" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Nhập dữ liệu!
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom06" class="form-label">End Date</label>
                                <input type="date" class="form-control" id="validationCustom06" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Nhập dữ liệu!
                                </div>
                            </div>
                            <div class="col-md-1">
                                <label for="validationCustom07" class="form-label">Floors</label>
                                <input type="number" class="form-control" id="validationCustom07" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Enter floors.
                                </div>
                            </div>
                            <div class="col-md-1">
                                <label for="validationCustom08" class="form-label">Rooms</label>
                                <input type="number" class="form-control" id="validationCustom08" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Enter rooms.
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom09" class="form-label">Number Bill Electric</label>
                                <input type="text" class="form-control" id="validationCustom09" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Enter number bill electric.
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom10" class="form-label">Number Bill Water</label>
                                <input type="text" class="form-control" id="validationCustom10" required="">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">
                                    Enter number bill water.
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="formFile" class="form-label">File Contract</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                            <h5 class="card-title">Checking Equipment </h5>
                            <div class="col-md-1">
                                <label for="validationCustom11" class="form-label">Bed</label>
                                <input type="number" class="form-control" id="validationCustom11">
                            </div>
                            <div class="col-md-1">
                                <label for="validationCustom12" class="form-label">Wardrobe</label>
                                <input type="number" class="form-control" id="validationCustom12">
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom13" class="form-label">Heater</label>
                                <input type="number" class="form-control" id="validationCustom13">
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom15" class="form-label">Fridge</label>
                                <input type="number" class="form-control" id="validationCustom15">
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom16" class="form-label">Induction Cooker</label>
                                <input type="number" class="form-control" id="validationCustom16">
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom17" class="form-label">Washing Machine</label>
                                <input type="number" class="form-control" id="validationCustom17">
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom14" class="form-label">Air Condiition</label>
                                <input type="number" class="form-control" id="validationCustom14">
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom18" class="form-label">Note</label>
                                <!-- TinyMCE Editor -->
                                <textarea class="tinymce-editor"></textarea><!-- End TinyMCE Editor -->
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Add New Houses</button>
                            </div>
                        </form>
                        <!-- End Custom Styled Validation -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
