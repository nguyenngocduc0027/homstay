@extends('admin.index')
@section('contentadmindashboard')
    <div class="pagetitle">
        <h1>Create Houses</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Create new houses</h5>
                        <!-- Custom Styled Validation -->
                        <form class="row g-3 needs-validation" novalidate="">
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">Name</label>
                                <input type="text" class="form-control" id="validationCustom01" required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter a name of houses.
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom02" class="form-label">Acreage</label>
                                <input type="text" class="form-control" id="validationCustom02" required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter a acreage of houses.
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom03" class="form-label">Price</label>
                                <input type="number" class="form-control" id="validationCustom03" required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter a price of houses.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label">Address</label>
                                <input type="text" class="form-control" id="validationCustom04" required="">
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please enter a address of houses.
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
                        <!-- End Custom Styled Validation -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
