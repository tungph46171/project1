<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bạn chắc chắn muốn thoát Trang quản trị chứ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Chọn nút "Đăng xuất" bên dưới nếu bạn đã sẵn sàng kết thúc phiên đăng nhập hiện tại của mình.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                <a class="btn btn-primary" href="<?= BASE_URL_ADMIN . '?act=logout' ?>">Đăng xuất</a>
            </div>
        </div>
    </div>
</div>