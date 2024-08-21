@extends('admin.index')
@section('contentadmindashboard')
    <div class="pagetitle">
        <h1>Quản Lý Số Điện</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="pt-2 pb-2 d-flex justify-content-end">
                    <a href="" type="button" class="btn btn-primary"><i
                            class="bi bi-plus me-1"></i>Thêm Mới</a>
                </div>

                <div class="card">
                    <div class="card-body">
                        <!-- Table with stripped rows -->
                        <table class="table table-striped" id="data-tables">
                            <thead>
                                <tr>
                                    <th class="text-center" >#</th>
                                    <th >Nhà Trọ</th>
                                    <th >Phòng Trọ</th>
                                    <th >Số Điện Trước</th>
                                    <th >Số Điện Sau</th>
                                    <th >Tổng Tiêu Thụ</th>
                                    <th >Tác Vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i=1; $i <= 50; $i++)
                                <tr>
                                    <td class="text-center">{{$i}}</td>
                                    <td>{{ $i }} DingDing Khuyen Luong</td>
                                    <td>DingDong 101</td>
                                    <td>210</td>
                                    <td>300</td>
                                    <td>90</td>
                                    <td>
                                        <a href="" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i
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


    <!-- Vertically centered Modal -->
    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered">
        Vertically centered
      </button> --}}
      <div class="modal fade" id="verticalycentered" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Vertically Centered</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div><!-- End Vertically centered Modal-->
@endsection
