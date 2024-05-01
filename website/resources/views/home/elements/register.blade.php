@extends('index')
@section('content')
<section class="gray-simple">
    <div class="container">


        <!-- row Start -->
        <div class="row justify-content-center">

            <!-- Single blog Grid -->
            <div class="col-xl-7 col-lg-8 col-md-9">
                <div class="card border-0 rounded-4 p-xl-4 p-lg-4 p-md-4 p-3">

                    <div class="simple-form">
                        <div class="form-header text-center mb-5">
                            <div class="effco-logo mb-2">
                                <a class="d-flex align-items-center justify-content-center" href="{{ route('index') }}">
                                    <img src="/img/logo.png" alt="logo" style="height: 100px">
                                </a>
                            </div>
                            <h4 class="fs-2">Tạo Tài Khoản Hệ Thống DingDong</h4>
                        </div>
                        <form method="POST" action="{{ route('do-register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tên *</label>
                                    <div class="input-group input-group-lg">
                                        <span
                                            class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                class="fas fa-person"></i></span>
                                        <input class="form-control border-0 bg-light rounded-end ps-1" id="name"
                                            type="text" name="name" value="{{ old('name') }}"
                                            autocomplete="name" autofocus>
                                    </div>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Email -->
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address *</label>
                                    <div class="input-group input-group-lg">
                                        <span
                                            class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                class="fas fa-box"></i></span>
                                        <input class="form-control border-0 bg-light rounded-end ps-1" id="email"
                                            type="email" name="email" value="{{ old('email') }}"
                                            autocomplete="email">
                                    </div>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-lg-6 col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                                    <div class="input-group input-group-lg">
                                        <span
                                            class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                class="fas fa-person"></i></span>
                                        <input class="form-control border-0 bg-light rounded-end ps-1" id="phone"
                                            type="text" name="phone" value="{{ old('phone') }}"
                                            autocomplete="phone" autofocus>
                                    </div>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-lg-6 col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Căn cước công dân</label>
                                    <div class="input-group input-group-lg">
                                        <span
                                            class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                class="fas fa-person"></i></span>
                                        <input class="form-control border-0 bg-light rounded-end ps-1" id="citizen_id"
                                            type="text" name="citizen_id" value="{{ old('citizen_id') }}"
                                            autocomplete="citizen_id" autofocus>
                                    </div>
                                    @error('citizen_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-lg-3 col-md-3 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Ngày sinh</label>
                                    <div class="input-group input-group-lg">
                                        <input class="form-control border-0 bg-light rounded-end ps-1" id="dob"
                                            type="date" name="dob" value="{{ old('dob') }}"
                                            autocomplete="dob" autofocus>
                                    </div>
                                    @error('dob')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-lg-9 col-md-9 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                                    <div class="input-group input-group-lg">
                                        <span
                                            class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                class="fas fa-person"></i></span>
                                        <input class="form-control border-0 bg-light rounded-end ps-1" id="address"
                                            type="text" name="address" value="{{ old('address') }}"
                                            autocomplete="address" autofocus>
                                    </div>
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Password -->
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <label for="inputPassword5" class="form-label custom-cursor-default-hover">Mật khẩu
                                        *</label>
                                    <div class="input-group input-group-lg">
                                        <span
                                            class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                class="fas fa-lock"></i></span>
                                        <input type="password" class="form-control border-0 bg-light rounded-end ps-1"
                                            id="password" name="password" autocomplete="new-password">
                                    </div>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Confirm Password -->
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <label for="inputPassword6" class="form-label custom-cursor-default-hover">Nhập
                                        lại mật khẩu *</label>
                                    <div class="input-group input-group-lg">
                                        <span
                                            class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                class="fas fa-lock"></i></span>
                                        <input class="form-control border-0 bg-light rounded-end ps-1"
                                            id="password_confirmation" type="password" name="password_confirmation"
                                            autocomplete="new-password">
                                    </div>
                                    @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <!-- Button -->
                            <div class="align-items-center mt-0">
                                <div class="d-grid">
                                    <button class="btn btn-primary mb-0" type="submit">Đăng ký</button>
                                </div>
                            </div>

                        </form>
                        <!-- Form END -->

                    </div>
                </div>
            </div>

        </div>
        <!-- /row -->

    </div>

</section>

@endsection
