@extends('auth.index')
@section('contentauth')
<div class="container">

    <section
        class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-center py-4">
                                <a href="{{route('/')}}" class="logo-auth d-flex align-items-center w-auto">
                                    <img src="/admin/img/logo.png" alt="">
                                </a>
                            </div>
                            <div class="pt-2 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                <p class="text-center small">Enter your username & password to login</p>
                            </div>
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-12">
                                    <label for="yourUsername" class="form-label">Username</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            <i class="bi bi-person-check"></i>
                                        </span>
                                        <input type="text" name="username" class="form-control"
                                            id="yourUsername" required>
                                        <div class="invalid-feedback">Please enter your username.</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Password</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend">
                                            <i class="bi bi-lock"></i>
                                        </span>
                                        <input type="password" name="password" class="form-control"
                                            id="yourPassword" required>
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <a class="small mb-0" href="{{route('forgot')}}">Quên mật khẩu ?</a>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Login</button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">Don't have account? <a
                                            href="{{route('register')}}">Create an account</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="credits">
                        Designed by <a href="https://metasoftware.vn/">MetaSoft</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
@endsection
