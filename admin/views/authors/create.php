<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Thêm mới
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
                            <label for="name" class="form-label">Tên tác giả:</label>
                            <input type="text" class="form-control" id="name" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['name'] : null ?>" placeholder="Điền tên tác giả..." name="name">
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="avatar" class="form-label">Ảnh đại diện:</label>
                            <input type="file" class="form-control" id="avatar" name="avatar">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Thêm</button>
                <a href="<?= BASE_URL_ADMIN ?>?act=authors" class="btn btn-danger">Quay lại</a>
            </form>
        </div>
    </div>
</div>

<?php if (isset($_SESSION['data'])) {
    unset($_SESSION['data']);
} ?>