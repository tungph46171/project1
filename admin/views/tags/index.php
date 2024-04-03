<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        <?= $title ?>

        <a href="<?= BASE_URL_ADMIN ?>?act=tag-create" class="btn btn-primary">Thêm mới từ khóa</a>
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
                            <th>Từ khóa</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Từ khóa</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($tags as $tag) : ?>
                            <tr>
                                <td><?= $tag['id'] ?></td>
                                <td><?= $tag['name'] ?></td>
                                <td>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=tag-detail&id=<?= $tag['id'] ?>" class="btn btn-info">Xem</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=tag-update&id=<?= $tag['id'] ?>" class="btn btn-warning">Chỉnh sửa</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=tag-delete&id=<?= $tag['id'] ?>" 
                                        onclick="return confirm('Bạn có chắc chắn xóa từ khóa này không?')"
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