@extends('admin.index')
@section('contentadmindashboard')
    <div class="pagetitle">
        <h1>Quản Lý Người Dùng</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="pt-2 pb-2 d-flex justify-content-end">
                    <a href="{{ route('create_customer')}}" type="button" class="btn btn-primary"><i
                            class="bi bi-plus me-1"></i>Thêm Mới</a>
                </div>

                <div class="card">
                    <div class="card-body">
                        <!-- Table with stripped rows -->
                        <table class="table table-striped" id="data-tables">
                            <thead>
                                <tr>
                                    <th class="text-center" >#</th>
                                    <th >Họ tên</th>
                                    <th >Số điện thoại</th>
                                    <th >Số CCCD</th>
                                    <th >Địa Chỉ</th>
                                    <th >Tác Vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i=1; $i <= 50; $i++)
                                <tr>
                                    <td class="text-center">{{$i}}</td>
                                    <td>{{ $i }} Nguyen Van A</td>
                                    <td>0378049798</td>
                                    <td>038099013860</td>
                                    <td>22/127/40/16 Khuyen Luong, Tran Phu, Hoang Mai</td>
                                    <td>
                                        <a href="" type="button" class="btn btn-success"><i
                                                class="bi bi-eye"></i></a>
                                        <a href="" type="button" class="btn btn-primary"><i
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
