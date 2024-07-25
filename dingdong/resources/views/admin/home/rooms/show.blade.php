@extends('admin.index')
@section('contentadmindashboard')
    <div class="pagetitle">
        <h1>Phòng Trọ</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="pt-2 pb-2 d-flex justify-content-end">
                    <a href="{{ route('create_rooms') }}" type="button" class="btn btn-primary"><i class="bi bi-plus me-1"></i>
                        Thêm Phòng Trọ</a>
                </div>

                <div class="card">
                    <div class="card-body">
                        <!-- Table with stripped rows -->
                        <table class="table table-striped" id="data-tables">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Tên phòng trọ</th>
                                    <th>Nhà trọ</th>
                                    <th>Giá thuê</th>
                                    <th>Trạng thái</th>
                                    <th>Người dùng</th>
                                    <th>Tác vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i <= 50; $i++)
                                    <tr>
                                        <td class="text-center">{{ $i }}</td>
                                        <td>D101</td>
                                        <td>DingDong</td>
                                        <td>3500000</td>
                                        <td>Active</td>
                                        <td>Nguyen Ngoc Duc</td>
                                        <td>
                                            <a href="{{ route('detail_rooms') }}" type="button" class="btn btn-success"><i
                                                    class="bi bi-eye"></i></a>
                                            <a href="{{ route('update_rooms') }}" type="button" class="btn btn-primary"><i
                                                    class="bi bi-pencil"></i></a>
                                            <a href="" type="button" class="btn btn-danger"><i
                                                    class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
