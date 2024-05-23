<div class="row">
    <!-- Modal -->
    <div class="modal fade" id="addaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm người dùng</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{route('add_account')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom03">Họ Tên</label>
                                <input type="text" class="form-control" id="validationCustom03" placeholder="Họ Tên"
                                    name="name" value="{{old('name')}}">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom04">Email</label>
                                <input type="email" class="form-control" id="validationCustom04"
                                    placeholder="example@email.com" name="email" >
                                <div class="invalid-feedback">
                                    Please provide a valid.
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom05">Số Điện Thoại</label>
                                <input type="phone" class="form-control" id="validationCustom05"
                                    placeholder="03x-xxx-xxxx" name="phone" >
                                <div class="invalid-feedback">
                                    Please provide a valid phone number.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom03">Loại Tài Khoản</label>
                                <select class="form-control" name="type">
                                    <option value="0">User</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Super Admin</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid.
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom04">Ngày Sinh</label>
                                <input type="date" class="form-control" id="validationCustom04"
                                    placeholder="example@email.com" name="dob" >
                                <div class="invalid-feedback">
                                    Please provide a valid date of birth.
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom05">Giới Tính</label>
                                <select class="form-control" name="gender">
                                    <option value="nam">Nam</option>
                                    <option value="nu">Nữ</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid gender.
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom05">CCCD</label>
                                <input type="phone" class="form-control" id="validationCustom05"
                                    placeholder="03x-xxx-xxxx" name="citizen_id" >
                                <div class="invalid-feedback">
                                    Please provide a valid phone number.
                                </div>
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
                                            <label class="form-label text-white m-1" for="customFile2">Choose
                                                file</label>
                                            <input type="file" class="form-control d-none" id="customFile2"
                                                onchange="displaySelectedImage(event, 'selectedAvatar')"
                                                name="avatar" />
                                        </div>
                                    </div>
                                </div>
                                <div class="invalid-feedback">
                                    Please provide a valid.
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom03">Ảnh CCCD</label>
                                <input type="file" id="file-input" multiple name="image_citizen_id[]">
                                <div id="preview-container"></div>
                                <div class="invalid-feedback">
                                    Please provide a valid.
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom05">Địa Chỉ</label>
                                <input type="text" class="form-control" id="validationCustom05"
                                    placeholder="" name="address" >
                                <div class="invalid-feedback">
                                    Please provide a valid address.
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom05">Password</label>
                                <input type="password" class="form-control" id="validationCustom05"
                                    placeholder="" name="password" >
                                <div class="invalid-feedback">
                                    Please provide a valid password.
                                </div>
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
</div>
