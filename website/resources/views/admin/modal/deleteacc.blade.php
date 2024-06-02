<div class="row">
    <!-- Modal -->
    @foreach ($data_user as $user)
        <div class="modal fade" id="deleteacc-{{ $user->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Xóa thông tin người dùng</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                    <form action="{{ route('delete_account', $user->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="modal-body">
                            <h2>Thông báo!</h2>
                            <h4>Đây là hành động xóa dữ liệu, tất cả dữ liệu liên quan đến tài khoản <span class="text-danger">{{ $user->email }}</span>
                                đều sẽ bị xóa và không thể khôi phục.</h4>
                            <h4>Bạn chắc chắn muốn xóa chứ?</h4>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-secondary" data-dismiss="modal">Đóng</a>
                            <button type="submit" class="btn btn-success">Xác Nhận</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
