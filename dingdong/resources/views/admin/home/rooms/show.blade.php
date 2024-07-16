@extends('admin.index')
@section('contentadmindashboard')
    <div class="pagetitle">
        <h1>Rooms</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="pt-2 pb-2 d-flex justify-content-end">
                    <a href="{{route('create_rooms')}}" type="button" class="btn btn-primary"><i class="bi bi-plus me-1"></i> Add New</a>
                </div>

                <div class="card">
                    <div class="card-body">
                      <!-- Table with stripped rows -->
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Houses</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Users</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>101</td>
                            <td>DingDong</td>
                            <td>3500000</td>
                            <td>Active</td>
                            <td>Nguyen Ngoc Duc</td>
                            <td>
                                <a href="{{route('detail_rooms')}}" type="button" class="btn btn-success"><i class="bi bi-eye"></i></a>
                                <a href="{{route('update_rooms')}}" type="button" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
                                <a href="" type="button" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <!-- End Table with stripped rows -->
                    </div>
                  </div>
            </div>
        </div>
    </section>
@endsection
