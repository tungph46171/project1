<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        <?= $title ?>

    </h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                DataTables
            </h6>
        </div>
        <div class="card-body">

            <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success'] ?>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã đơn</th>
                            <th>Id người mua</th>
                            <th>Tên khách hàng</th>
                            <th>Email</th>
                            <th>SĐT</th>
                            <th>Địa chỉ nhận hàng</th>
                            <th>Tổng tiền</th>
                            <th>Trạng thái giao hàng</th>
                            <th>Tình trạng thanh toán</th>
                            <th>Ngày đặt hàng</th>
                            <th>Cập nhật lúc</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Mã đơn</th>
                            <th>Id người mua</th>
                            <th>Tên khách hàng</th>
                            <th>Email</th>
                            <th>SĐT</th>
                            <th>Địa chỉ nhận hàng</th>
                            <th>Tổng tiền</th>
                            <th>Trạng thái giao hàng</th>
                            <th>Tình trạng thanh toán</th>
                            <th>Ngày đặt hàng</th>
                            <th>Cập nhật lúc</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($orders as $order) : ?>
                            <tr>
                                <td><?= $order['p_id'] ?></td>
                                <td><?= $order['p_user_id'] ?></td>
                                <td><?= $order['p_user_name'] ?></td>
                                <td><?= $order['p_user_email'] ?></td>
                                <td><?= $order['p_user_phone'] ?></td>
                                <td><?= $order['p_user_address'] ?></td>
                                <td><?= $order['p_total_bill'] ?></td>

                            
                                <td><?= $order['p_status_delivery'] ?></td>
                                <td><?= $order['p_status_payment'] ?></td>

                                <td><?= $order['p_created_at'] ?></td>
                                <td><?= $order['p_updated_at'] ?></td>
                                <td>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=order-detail&id=<?= $order['p_id'] ?>" class="btn btn-info">Xem thông tin</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=order-update&id=<?= $order['p_id'] ?>" class="btn btn-warning">Cập nhật đơn hàng</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=order-delete&id=<?= $order['p_id'] ?>" 
                                        onclick="return confirm('Bạn có chắc chắn muốn hủy bán đơn hàng này không?')"
                                        class="btn btn-danger">Hủy đơn hàng</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>