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
                                <h5 class="card-title text-center pb-0 fs-4">Reset to Your Password</h5>
                                <p class="text-center small">Enter your email to send link reset password</p>
                            </div>

                            <form class="row g-3 needs-validation" novalidate>

                                <div class="col-12">
                                    <label for="yourUsername" class="form-label">Email</label>
                                    <div class="input-group has-validation">
                                        <input type="email" name="email" class="form-control"
                                            id="yourEmail" required>
                                        <div class="invalid-feedback">Please enter your email.</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Send Link</button>
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
