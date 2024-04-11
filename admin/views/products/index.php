<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        <?= $title ?>

        <!-- ĐANG CHỈNH LỖI -->
        <!-- <a href="<?= BASE_URL_ADMIN ?>?act=product-create" class="btn btn-primary">Thêm mới sản phẩm</a> -->
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
                            <th>Tên SP</th>
                            <th>Hình ảnh</th>
                            <th>Giá gốc</th>
                            <th>Giá sale</th>
                            <th>Thương hiệu</th>
                            <th>Kích thước</th>
                            <th>Đường kính</th>
                            <th>Độ dày</th>
                            <th>Dây đeo</th>
                            <th>Mặt kính</th>
                            <th>Giới tính</th>
                            <th>Màu sắc</th>
                            <th>Xuất xứ</th>
                            <th>Danh mục</th>
                            <th>Từ khóa</th>
                            <th>Bảo hành</th>
                            <th>Mô tả</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Tên SP</th>
                            <th>Hình ảnh</th>
                            <th>Giá gốc</th>
                            <th>Giá sale</th>
                            <th>Thương hiệu</th>
                            <th>Kích thước</th>
                            <th>Đường kính</th>
                            <th>Độ dày</th>
                            <th>Dây đeo</th>
                            <th>Mặt kính</th>
                            <th>Giới tính</th>
                            <th>Màu sắc</th>
                            <th>Xuất xứ</th>
                            <th>Danh mục</th>
                            <th>Từ khóa</th>
                            <th>Bảo hành</th>
                            <th>Mô tả</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($products as $product) : ?>
                            <tr>
                                <td><?= $product['p_id'] ?></td>
                                <td><?= $product['p_name'] ?></td>
                                                                
                                <td>
                                    <img src="<?= BASE_URL . $product['p_img'] ?>" alt="" width="100px">
                                </td>

                                <td><?= number_format($product['p_price']) ?> VND</td>
                                <td><?= number_format($product['p_price_sale']) ?> VND</td>

                                <td>
                                    <div style="display: flex;">
                                        <p><?= $product['br_name'] ?></p>
                                    </div>
                                </td>

                                <td>
                                    <div style="display: flex;">
                                        <p><?= $product['si_name'] ?></p>
                                    </div>
                                </td>

                                <td><?= $product['p_diameter'] ?> mm</td>
                                <td><?= $product['p_thickness'] ?> mm</td>

                                <td>
                                    <div style="display: flex;">
                                        <p><?= $product['st_name'] ?></p>
                                    </div>
                                </td>

                                <td>
                                    <div style="display: flex;">
                                        <p><?= $product['gl_name'] ?></p>
                                    </div>
                                </td>

                                <td>
                                    <?= $product['p_gender'] 
                                            ? '<span class="badge badge-success">Nam</span>' 
                                                : '<span class="badge badge-warning">Nữ</span>' ?>
                                </td>
                                
                                <td>
                                    <div style="display: flex;">
                                        <p><?= $product['cl_name'] ?></p>
                                    </div>
                                </td>

                                <td><?= $product['p_origin'] ?></td>

                                <td>
                                    <div style="display: flex;">
                                        <p><?= $product['c_name'] ?></p>
                                    </div>
                                </td>

                                <td>
                                    <div style="display: flex;">
                                        <p><?= $product['tag_name'] ?></p>
                                    </div>
                                </td>

                                <td>
                                    <div style="display: flex;">
                                        <p><?= $product['wa_name'] ?></p>
                                    </div>
                                </td>

                                <td><?= $product['p_description'] ?></td>
                                <td>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=product-detail&id=<?= $product['p_id'] ?>" class="btn btn-info">Xem thông tin</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=product-update&id=<?= $product['p_id'] ?>" class="btn btn-warning">Cập nhật sản phẩm</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=product-delete&id=<?= $product['p_id'] ?>" 
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?')"
                                        class="btn btn-danger">Xóa sản phẩm</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>