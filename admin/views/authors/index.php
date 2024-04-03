<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        <?= $title ?>

        <a href="<?= BASE_URL_ADMIN ?>?act=author-create" class="btn btn-primary">Thêm mới tác giả</a>
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
                            <th>Tên tác giả</th>
                            <th>Ảnh đại diện</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Tên tác giả</th>
                            <th>Ảnh đại diện</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($authors as $author) : ?>
                            <tr>
                                <td><?= $author['id'] ?></td>
                                <td><?= $author['name'] ?></td>
                                <td>
                                    <img src="<?= BASE_URL . $author['avatar'] ?>" alt="" width="100px">
                                </td>
                                <td>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=author-detail&id=<?= $author['id'] ?>" class="btn btn-info">Xem chi tiết</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=author-update&id=<?= $author['id'] ?>" class="btn btn-warning">Sửa thông tin</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=author-delete&id=<?= $author['id'] ?>" 
                                        onclick="return confirm('Bạn có chắc chắn xóa người viết này không?')"
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