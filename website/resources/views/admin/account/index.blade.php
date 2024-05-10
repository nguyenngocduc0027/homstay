@extends('admin.index')
@section('contentadmin')
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="ecommerce-widget">
                <div class="card-body">
                    <a style="margin-bottom: 20px" href="#" class="btn btn-primary" data-toggle="modal"
                        data-target="#addaccount">
                        + Thêm người dùng
                    </a>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered first">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Tác Vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>
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
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
