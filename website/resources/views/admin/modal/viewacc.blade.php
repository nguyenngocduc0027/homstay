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
                                <input type="email" class="form-control" id="validationCustom04" name="email"
                                    value="{{ old('email') }}" required
                                    pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom05">Số Điện Thoại</label>
                                <input type="text" class="form-control" id="validationCustom05" name="phone"
                                    value="{{ old('phone') }}" required maxlength="10" pattern="^[0-9]*$">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom03">Loại Tài Khoản</label>
                                <select class="form-control" name="type" required>
                                    <option value="0">User</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Super Admin</option>
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom04">Ngày Sinh</label>
                                <input type="date" class="form-control" id="validationCustom04" name="dob"
                                    value="{{ old('dob') }}" required>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom05">Giới Tính</label>
                                <select class="form-control" name="gender" required>
                                    <option value="nam">Nam</option>
                                    <option value="nu">Nữ</option>
                                </select>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom05">CCCD</label>
                                <input type="text" class="form-control" id="validationCustom05" name="citizen_id"
                                    value="{{ old('citizen_id') }}" required maxlength="12" pattern="^[0-9]*$">
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
                                <input type="text" class="form-control" id="validationCustom05" placeholder=""
                                    name="address" value="{{ old('address') }}" required>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom05">Password</label>
                                <input type="password" class="form-control" id="validationCustom05" placeholder=""
                                    name="password" required minlength="8" value="{{ old('password') }}">
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
