<div class="row">
    <!-- Modal -->
    @foreach ($data_user as $user)
        <div class="modal fade" id="editacc-{{ $user->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa thông tin người dùng</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('update_account', $user->id) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-row">
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                    <label for="validationCustom03">Họ Tên</label>
                                    <input type="text" class="form-control" id="validationCustom03" name="name"
                                        value="{{ $user->name }}" required minlength="2">
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                    <label for="validationCustom04">Email</label>
                                    <input type="email" class="form-control" id="validationCustom04" name="email"
                                        value="{{ $user->email }}" disabled>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                    <label for="validationCustom05">Số Điện Thoại</label>
                                    <input type="text" class="form-control" id="validationCustom05" name="phone"
                                        value="{{ $user->phone }}" required maxlength="10" pattern="^[0-9]*$">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                    <label for="validationCustom03">Loại Tài Khoản</label>
                                    <select class="form-control" name="type" def required>
                                        <option @if ($user->type == '0') selected @endif value="0">User</option>
                                        <option @if ($user->type == '1') selected @endif value="1">Admin</option>
                                        <option @if ($user->type == '2') selected @endif value="2">Super Admin</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                    <label for="validationCustom04">Ngày Sinh</label>
                                    <input type="date" class="form-control" id="validationCustom04" name="dob"
                                        value="{{ $user->dob }}" required>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                    <label for="validationCustom05">Giới Tính</label>
                                    <select class="form-control" name="gender" required>

                                        <option {{ $user->gender == 'nam' ? 'selected' : '' }} value="nam">Nam</option>
                                        <option {{ $user->gender == 'nu' ? 'selected' : '' }} value="nu">Nữ</option>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                    <label for="validationCustom05">CCCD</label>
                                    <input type="text" class="form-control" id="validationCustom05" name="citizen_id"
                                        value="{{ $user->citizen_id }}" required maxlength="12" pattern="^[0-9]*$">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                    <label for="validationCustom03">Ảnh đại diện</label>
                                    <div>
                                        <div class="d-flex justify-content-center mb-4">
                                            <img id="selectedAvatar1" src="{{ $user->avatar }}" class="rounded-circle"
                                                style="width: 200px; height: 200px; object-fit: cover;"
                                                alt="example placeholder" />
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <div data-mdb-ripple-init class="btn btn-primary btn-rounded">
                                                <label class="form-label text-white m-1" for="customFile3">Tải
                                                    Lên</label>
                                                <input type="file" class="form-control d-none" id="customFile3"
                                                    onchange="displaySelectedImage(event, 'selectedAvatar1')"
                                                    name="avatar" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                    <label for="validationCustom03">Ảnh CCCD</label>
                                    <input type="file" id="file-input1" multiple name="image_citizen_id[]">
                                    <div id="preview-container1">
                                        @if (is_array($user->image_citizen_id) || is_object($user->image_citizen_id))
                                            @foreach ($user->image_citizen_id as $img)
                                                <div class='preview'><img
                                                        src='/images/citizen_images/{{ $img }}'><button
                                                        class='delete'>Delete</button></div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                    <label for="validationCustom05">Địa Chỉ</label>
                                    <input type="text" class="form-control" id="validationCustom05"
                                        placeholder="" name="address" value="{{ $user->address }}" required>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                    <label for="validationCustom05">Password</label>
                                    <input type="text" class="form-control" id="validationCustom05"
                                        placeholder="" name="password" required minlength="8"
                                        value="{{ $user->password }}">
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                        <button class="btn btn-primary" type="submit">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>


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

    $(document).ready(function() {
        $("#file-input1").on("change", function() {

            var files = $(this)[0].files;

            $("#preview-container1").empty();
            if (files.length > 0) {
                for (var i = 0; i < files.length; i++) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $("<div class='preview'><img src='" + e.target.result +
                            "'><button class='delete'>Delete</button></div>").appendTo(
                            "#preview-container1");
                    };
                    reader.readAsDataURL(files[i]);
                }
            }
        });
        $("#preview-container1").on("click", ".delete", function() {
            $(this).parent(".preview").remove();
            $("#file-input1").val(""); // Clear input value if needed
        });
    });
</script>
