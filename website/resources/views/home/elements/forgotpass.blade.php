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
                            <h4 class="fs-2">Đặt Lại Mật Khẩu</h4>
                        </div>
                        <form method="POST" action="{{ route('do-forgot') }}">
                            @csrf
                            <div class="row">
                                <!-- Email -->
                                <div class="col-lg-12 col-md-12 mb-3">
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

                            </div>

                            <!-- Button -->
                            <div class="align-items-center mt-0">
                                <div class="d-grid">
                                    <button class="btn btn-primary mb-0" type="submit">Gửi link</button>
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
