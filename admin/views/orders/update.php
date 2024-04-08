<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Cập nhật
            </h6>
        </div>
        <div class="card-body">

            <?php if (isset($_SESSION['errors'])) : ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach ($_SESSION['errors'] as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php unset($_SESSION['errors']); ?>
            <?php endif; ?>

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="user_id" class="form-label">Mã người dùng:</label>
                            <input type="text" class="form-control" id="user_id" value="<?= $order['p_user_id'] ?>" placeholder="Enter user_id" name="user_id" readonly>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="user_name" class="form-label">Tên người mua:</label>
                            <input type="text" class="form-control" id="user_name" value="<?= $order['p_user_name'] ?>" placeholder="Enter user_name" name="user_name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="user_email" class="form-label">Email:</label>
                            <input type="text" class="form-control" id="user_email" value="<?= $order['p_user_email'] ?>" placeholder="Enter user_email" name="user_email">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="user_phone" class="form-label">Số điện thoại:</label>
                            <input type="text" class="form-control" id="user_phone" value="<?= $order['p_user_phone'] ?>" placeholder="Enter user_phone" name="user_phone">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="user_address" class="form-label">Địa chỉ nhận hàng:</label>
                            <input type="text" class="form-control" id="user_address" value="<?= $order['p_user_address'] ?>" placeholder="Enter user_address" name="user_address">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="total_bill" class="form-label">Tổng tiền:</label>
                            <input type="text" class="form-control" id="total_bill" value="<?= $order['p_total_bill'] ?>" placeholder="Enter total_bill" name="total_bill" readonly>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="status_delivery" class="form-label">Trạng thái giao hàng:</label>
                            <select class="form-control" id="status_delivery" name="status_delivery">
                                <option <?= ($order['p_status_delivery']) ? 'selected' : null ?>
                                value="Chờ xác nhận">Chờ xác nhận</option>
                                <option <?= ($order['p_status_delivery']) ? 'selected' : null ?>
                                value="Chờ lấy hàng">Chờ lấy hàng</option>
                                <option <?= ($order['p_status_delivery']) ? 'selected' : null ?>
                                value="Chờ giao hàng">Chờ giao hàng</option>
                                <option <?= ($order['p_status_delivery']) ? 'selected' : null ?>
                                value="Đã giao">Đã giao</option>
                                <option <?= ($order['p_status_delivery']) ? 'selected' : null ?>
                                value="Đơn hàng đã hủy">Đơn hàng đã hủy</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="status_payment" class="form-label">Tình trạng thanh toán:</label>
                            <select class="form-control" id="status_payment" name="status_payment">
                                <option <?= ($order['p_status_payment']) ? 'selected' : null ?>
                                value="Chưa thanh toán">Chưa thanh toán</option>
                                <option <?= ($order['p_status_payment']) ? 'selected' : null ?>
                                value="Đã thanh toán">Đã thanh toán</option>
                                <option <?= ($order['p_status_payment']) ? 'selected' : null ?>
                                value="Đã hủy đặt hàng">Đã hủy đặt hàng</option>
                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="<?= BASE_URL_ADMIN ?>?act=orders" class="btn btn-danger">Về danh sách</a>
            </form>
        </div>
    </div>
</div>