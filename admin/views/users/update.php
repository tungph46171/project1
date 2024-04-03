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

            <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success'] ?>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php endif; ?>

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

            <form action="" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Tên người dùng:</label>
                            <input type="text" class="form-control" id="name" value="<?= $user['name'] ?>" placeholder="Điền tên người dùng..." name="name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" value="<?= $user['email'] ?>" placeholder="Điền tài khoản gmail..." name="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="password" class="form-label">Mật khẩu:</label>
                            <input type="text" class="form-control" id="password" value="<?= $user['password'] ?>" placeholder="Điền mật khẩu" name="password">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="type" class="form-label">Vai trò:</label>
                            <select name="type" id="type" class="form-control">
                                <option <?= $user['type'] == 1 ? 'selected' : null ?> value="1">Admin</option>
                                <option <?= $user['type'] == 0 ? 'selected' : null ?> value="0">Member</option>
                            </select>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Cập nhât</button>
                <a href="<?= BASE_URL_ADMIN ?>?act=users" class="btn btn-danger">Hoàn tác</a>
            </form>
        </div>
    </div>
</div>