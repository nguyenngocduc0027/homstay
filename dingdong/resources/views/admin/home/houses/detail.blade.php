@extends('admin.index')
@section('contentadmindashboard')
    <div class="pagetitle">
        <h1>Detail Houses</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Custom Styled Validation -->
                        <form class="row g-3 needs-validation" novalidate="">
                            <h5 class="card-title">Detail Houses</h5>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Name</label>
                                <input type="text" class="form-control" id="validationCustom01" required="" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom02" class="form-label">Acreage</label>
                                <input type="number" class="form-control" id="validationCustom02" required="" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom03" class="form-label">Price</label>
                                <input type="number" class="form-control" id="validationCustom03" required="" disabled>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label">Address</label>
                                <input type="text" class="form-control" id="validationCustom04" required="" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom05" class="form-label">Start Date</label>
                                <input type="date" class="form-control" id="validationCustom05" required="" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom06" class="form-label">End Date</label>
                                <input type="date" class="form-control" id="validationCustom06" required="" disabled>
                            </div>
                            <div class="col-md-1">
                                <label for="validationCustom07" class="form-label">Floors</label>
                                <input type="number" class="form-control" id="validationCustom07" required="" disabled>
                            </div>
                            <div class="col-md-1">
                                <label for="validationCustom08" class="form-label">Rooms</label>
                                <input type="number" class="form-control" id="validationCustom08" required="" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom09" class="form-label">Number Bill Electric</label>
                                <input type="text" class="form-control" id="validationCustom09" required="" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom10" class="form-label">Number Bill Water</label>
                                <input type="text" class="form-control" id="validationCustom10" required="" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="formFile" class="form-label">File Contract</label>
                                <a href="" class="form-control"><i class="bi bi-cloud-download-fill"></i> Download file here</a>
                            </div>
                            <h5 class="card-title">Checking Equipment </h5>
                            <div class="col-md-1">
                                <label for="validationCustom11" class="form-label">Bed</label>
                                <input type="number" class="form-control" id="validationCustom11" disabled>
                            </div>
                            <div class="col-md-1">
                                <label for="validationCustom12" class="form-label">Wardrobe</label>
                                <input type="number" class="form-control" id="validationCustom12" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom13" class="form-label">Heater</label>
                                <input type="number" class="form-control" id="validationCustom13" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom15" class="form-label">Fridge</label>
                                <input type="number" class="form-control" id="validationCustom15" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom16" class="form-label">Induction Cooker</label>
                                <input type="number" class="form-control" id="validationCustom16" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom17" class="form-label">Washing Machine</label>
                                <input type="number" class="form-control" id="validationCustom17" disabled>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom14" class="form-label">Air Condiition</label>
                                <input type="number" class="form-control" id="validationCustom14" disabled>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom18" class="form-label">Note</label>
                                <textarea class="form-control" style="height: auto" disabled></textarea>
                            </div>
                        </form>
                        <!-- End Custom Styled Validation -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
