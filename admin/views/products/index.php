<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        <?= $title ?>

        <a href="<?= BASE_URL_ADMIN ?>?act=post-create" class="btn btn-primary">Thêm mới bài viết</a>
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
                            <th>Tiêu đề</th>
                            <th>Đoạn trích</th>
                            <th>Danh mục</th>
                            <th>Tác giả</th>
                            <th>Hình minh họa</th>
                            <th>Cover</th>
                            <th>Trạng thái</th>
                            <th>Is_trending</th>
                            <th>Ngày đăng</th>
                            <th>Cập nhật lúc</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Tiêu đề</th>
                            <th>Đoạn trích</th>
                            <th>Danh mục</th>
                            <th>Tác giả</th>
                            <th>Hình minh họa</th>
                            <th>Cover</th>
                            <th>Trạng thái</th>
                            <th>Is_trending</th>
                            <th>Ngày đăng</th>
                            <th>Cập nhật lúc</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($posts as $post) : ?>
                            <tr>
                                <td><?= $post['p_id'] ?></td>
                                <td><?= $post['p_title'] ?></td>
                                <td><?= $post['p_excerpt'] ?></td>
                                <td><?= $post['c_name'] ?></td>
                                <td>
                                    <div style="display: flex;">
                                        <img src="<?= $post['au_avatar'] ?>" alt="">
                                        <p><?= $post['au_name'] ?></p>
                                    </div>
                                </td>
                                
                                <td>
                                    <img src="<?= BASE_URL . $post['p_img_thumnail'] ?>" alt="" width="100px">
                                </td>
                                <td>
                                    <img src="<?= BASE_URL . $post['p_img_cover'] ?>" alt="" width="100px">
                                </td>
                                <td><?= $post['p_status'] ?></td>
                                <td>
                                    <?= $post['p_is_trending'] 
                                            ? '<span class="badge badge-success">Yes</span>' 
                                                : '<span class="badge badge-warning">No</span>' ?>
                                </td>
                                <td><?= $post['p_created_at'] ?></td>
                                <td><?= $post['p_updated_at'] ?></td>
                                <td>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=post-detail&id=<?= $post['p_id'] ?>" class="btn btn-info">Xem bài viết</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=post-update&id=<?= $post['p_id'] ?>" class="btn btn-warning">Chỉnh sửa bài viết</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=post-delete&id=<?= $post['p_id'] ?>" 
                                        onclick="return confirm('Bạn có chắc chắn muốn gỡ bỏ bài viết này không?')"
                                        class="btn btn-danger">Gỡ bài viết</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>