<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        <?= $title ?>

        <a href="<?= BASE_URL_ADMIN ?>?act=user-create" class="btn btn-primary">Thêm mới người dùng</a>
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
                            <th>ID</th>
                            <th>Tên người dùng</th>
                            <th>Email</th>
                            <th>Vai trò</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Tên người dùng</th>
                            <th>Email</th>
                            <th>Vai trò</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?= $user['id'] ?></td>
                                <td><?= $user['name'] ?></td>
                                <td><?= $user['email'] ?></td>
                                <td><?= $user['type']
                                        ? '<span class="badge badge-success">Admin</span>'
                                        : '<span class="badge badge-warning">Member</span>' ?></td>
                                <td>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=user-detail&id=<?= $user['id'] ?>" class="btn btn-info">Xem thông tin</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=user-update&id=<?= $user['id'] ?>" class="btn btn-warning">Sửa thông tin</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=user-delete&id=<?= $user['id'] ?>" 
                                        onclick="return confirm('Bạn có chắc chắn xóa người dùng này không?')"
                                        class="btn btn-danger">Loại bỏ</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>