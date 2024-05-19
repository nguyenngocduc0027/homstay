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
                    <form>
                        <div class="form-row">
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom03">Họ Tên</label>
                                <input type="text" class="form-control" id="validationCustom03" placeholder="Họ Tên" name="name"
                                    required="">
                                <div class="invalid-feedback">
                                    Please provide a valid name.
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom04">Email</label>
                                <input type="email" class="form-control" id="validationCustom04" placeholder="example@email.com" name="email"
                                    required="">
                                <div class="invalid-feedback">
                                    Please provide a valid email.
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom05">Số Điện Thoại</label>
                                <input type="phone" class="form-control" id="validationCustom05" placeholder="03x-xxx-xxxx" name="phone"
                                    required="">
                                <div class="invalid-feedback">
                                    Please provide a valid phone number.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom03">Loại Tài Khoản</label>
                                <select class="form-control" name="type">
                                    <option>0</option>
                                    <option>1</option>
                                    <option>2</option>
                                  </select>
                                <div class="invalid-feedback">
                                    Please provide a valid.
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom04">Ngày Sinh</label>
                                <input type="date" class="form-control" id="validationCustom04" placeholder="example@email.com" name="email"
                                    required="">
                                <div class="invalid-feedback">
                                    Please provide a valid date of birth.
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom05">Giới Tính</label>
                                <select class="form-control" name="gender">
                                    <option>Nam</option>
                                    <option>Nữ</option>
                                  </select>
                                <div class="invalid-feedback">
                                    Please provide a valid gender.
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom05">CCCD</label>
                                <input type="phone" class="form-control" id="validationCustom05" placeholder="03x-xxx-xxxx" name="phone"
                                    required="">
                                <div class="invalid-feedback">
                                    Please provide a valid phone number.
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary">Save changes</a>
                </div>
            </div>
        </div>
    </div>
</div>
