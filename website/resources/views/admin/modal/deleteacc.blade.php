<div class="row">
    <!-- Modal -->
    <div class="modal fade" id="deleteacc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <?php
                                if (empty($user)) {
                                    $retVal = '';
                                } else {
                                    $retVal = route('delete_account', $user->id);
                                }

                                ?>
                <form action="{{ $retVal }}" method="post" class="needs-validation" novalidate>
                    @csrf
                    @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Xoá tài khoản</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <p>Bạn có chắc chắn muốn xoá tài khoản này ?</p>
                    <p>Nếu bạn xoá tài khoản này sẽ không thể phục hồi dữ liệu cho tài khoản</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-secondary" data-dismiss="modal">Đóng</a>
                    <button type="submit" class="btn btn-primary">Xoá</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
