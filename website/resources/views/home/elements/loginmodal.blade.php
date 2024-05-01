<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
        <div class="modal-content" id="registermodal">
            <span class="mod-close" data-bs-dismiss="modal" aria-hidden="true">
                <span class="svg-icon text-primary svg-icon-2hx">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                        <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor"/>
                        <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor"/>
                    </svg>
                </span>
            </span>
            <div class="modal-body">
                <h4 class="text-center">ĐĂNG NHẬP</h4>
                <div class="d-flex align-items-center justify-content-center mb-3">
                    <img src="/img/logo.png" alt="logo" style="height: 100px">
                </div>
                <div class="login-form">
                    <form method="POST" action="{{ route('do-login')}}">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" placeholder="name@example.com" name="email" value="{{old('email')}}" autocomplete="email" required>
                            <label>Email</label>
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="form-floating mb-3">
                          <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="current-password" required>
                          <label>Mật khẩu</label>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="form-group mb-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="flex-shrink-0 flex-first">
                                    <a href="{{route('forgot')}}" class="link fw-medium">Quên mật khẩu?</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary fw-medium full-width rounded-2">Đăng Nhập</button>
                        </div>

                    </form>
                </div>
                <div class="text-center">
                    <p class="mt-4">Bạn chưa có tài khoản hệ thống? <a href="{{route('register')}}" class="link fw-medium">Đăng ký ngay!</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
