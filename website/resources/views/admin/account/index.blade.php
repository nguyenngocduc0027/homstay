@extends('admin.index')
@section('contentadmin')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="ecommerce-widget">
                <div class="row">



                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <a style="margin-bottom: 20px" href="#" class="btn btn-primary" data-toggle="modal"
                                data-target="#addaccount">
                                + Thêm người dùng
                            </a>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Họ Tên</th>
                                                <th>Email</th>
                                                <th>Quyền</th>
                                                <th>Điện Thoại</th>
                                                <th>CCCD</th>
                                                <th>Tác Vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $count = 1; ?>
                                            @foreach ($data_user as $user)
                                            <tr>
                                                <td>{{$count++}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>
                                                    @if ($user->type == '0')
                                                        User
                                                    @elseif($user->type == '1')
                                                        Admin
                                                    @else
                                                        Super Admin
                                                    @endif
                                                </td>
                                                <td>{{$user->phone}}</td>
                                                <td>{{$user->citizen_id}}</td>
                                                <td class="">
                                                    <a href="#" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#viewacc">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-primary">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-primary">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
@endsection
