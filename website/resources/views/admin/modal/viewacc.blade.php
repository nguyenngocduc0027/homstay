<div class="row">
    <!-- Modal -->
    @foreach ($data_user as $user)
    <div class="modal fade" id="viewacc-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chi tiết người dùng</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                        <div class="form-row">
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom03">Họ Tên</label>
                                <input type="text" class="form-control"
                                    value="{{$user->name}}" disabled>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom04">Email</label>
                                <input type="email" class="form-control"
                                    value="{{ $user->email }}" disabled>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom05">Số Điện Thoại</label>
                                <input type="text" class="form-control"
                                    value="{{ $user->phone }}" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                @php
                                    if ($user->type == 0) {
                                        $value = 'User';
                                    } elseif ( $user->type == 1 ) {
                                        $value = 'Admin';
                                    } else {
                                        $value = 'Super Admin';
                                    }
                                @endphp
                                <label for="validationCustom03">Loại Tài Khoản</label>
                                <input type="text" class="form-control"
                                    value="{{ $value }}" disabled>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom04">Ngày Sinh</label>
                                <input type="date" class="form-control"
                                    value="{{ $user->dob }}" disabled>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom05">Giới Tính</label>
                                <input type="text" class="form-control"
                                value="{{ $user->gender }}" disabled>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom05">CCCD</label>
                                <input type="text" class="form-control"
                                    value="{{ $user->citizen_id }}" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom03">Ảnh đại diện</label>
                                <div>
                                    <div class="d-flex justify-content-center mb-4">
                                        <img id="selectedAvatar"
                                            src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg"
                                            class="rounded-circle"
                                            style="width: 200px; height: 200px; object-fit: cover;"
                                            alt="example placeholder" />
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div data-mdb-ripple-init class="btn btn-primary btn-rounded">
                                            <label class="form-label text-white m-1" for="customFile2">Tải Lên</label>
                                            <input type="file" class="form-control d-none" id="customFile2"
                                                onchange="displaySelectedImage(event, 'selectedAvatar')"
                                                name="avatar" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom03">Ảnh CCCD</label>
                                <input type="file" id="file-input" multiple name="image_citizen_id[]">
                                <div id="preview-container"></div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom05">Địa Chỉ</label>
                                <input type="text" class="form-control"
                                    name="address" value="{{ $user->address }}" disabled>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom05">Password</label>
                                <input type="password" class="form-control" id="password-field"
                                 value="{{ $user->password}}" disabled >
                                 <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<style>
    .field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}
</style>

<script>
    $(".toggle-password").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
  input.attr("type", "text");
} else {
  input.attr("type", "password");
}
});
</script>
