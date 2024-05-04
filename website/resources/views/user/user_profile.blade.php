@extends('user.index')
@section('contentuser')
    <div class="dashboard-wraper">
        <!-- Basic Information -->
        <div class="form-submit">
            <h4>Thông tin cá nhân</h4>
            <div class="row">

                <div class="form-group col-md-6">
                    <label>Họ và tên</label>
                    <input type="text" class="form-control" value="{{$user->name}}" disabled>
                </div>

                <div class="form-group col-md-6">
                    <label>Email</label>
                    <input type="email" class="form-control" value="{{$user->email}}" disabled>
                </div>

                <div class="form-group col-md-6">
                    <label>Căn cước công dân</label>
                    <input type="text" class="form-control" value="{{$user->citizen_id}}" disabled>
                </div>

                <div class="form-group col-md-6">
                    <label>Phone</label>
                    <input type="text" class="form-control" value="{{$user->phone}}" disabled>
                </div>

                <div class="form-group col-md-6">
                    <label>Address</label>
                    <input type="text" class="form-control" value="522, Arizona, Canada" disabled>
                </div>

                <div class="form-group col-md-6">
                    <label>City</label>
                    <input type="text" class="form-control" value="Montquebe" disabled>
                </div>

                <div class="form-group col-md-6">
                    <label>State</label>
                    <input type="text" class="form-control" value="Canada" disabled>
                </div>

                <div class="form-group col-md-6">
                    <label>Zip</label>
                    <input type="text" class="form-control" value="160052" disabled>
                </div>

                <div class="form-group col-md-12">
                    <label>About</label>
                    <textarea class="form-control">Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper</textarea>
                </div>

            </div>
        </div>
    </div>
@endsection
