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


                    <!-- CỘT TRÁI -->

                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Tên sản phẩm:</label>
                            <input type="text" class="form-control" id="name" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['name'] : null ?>" placeholder="Nhập tên sản phẩm..." name="name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="description" class="form-label">Mô tả sản phẩm:</label>
                            <textarea class="form-control" id="description" rows="7" name="description"><?= isset($_SESSION['data']) ? $_SESSION['data']['description'] : null ?></textarea>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="img" class="form-label">Hình ảnh:</label>
                            <input type="file" class="form-control" id="img" name="img">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="price" class="form-label">Giá gốc sản phẩm:</label>
                            <input type="text" class="form-control" id="price" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['price'] : null ?>" placeholder="Nhập giá gốc SP..." name="price">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="price_sale" class="form-label">Giá ưu đãi:</label>
                            <input type="text" class="form-control" id="price_sale" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['price_sale'] : null ?>" placeholder="Nhập giá khuyến mãi..." name="price_sale">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="brand_id" class="form-label">Thương hiệu:</label>
                            <select class="form-control" id="brand_id" name="brand_id">
                                <?php foreach ($brands as $brand) : ?>
                                    <option value="<?= $brand['id'] ?>"><?= $brand['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="diameter" class="form-label">Đường kính:</label>
                            <input type="text" class="form-control" id="diameter" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['diameter'] : null ?>" placeholder="Nhập độ dài đường kính..." name="diameter">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="thickness" class="form-label">Độ dày:</label>
                            <input type="text" class="form-control" id="thickness" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['thickness'] : null ?>" placeholder="Nhập độ dày bề mặt..." name="thickness">
                        </div>
                    </div>

                    

                    <!-- CỘT PHẢI -->

                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="size_id" class="form-label">Kích thước:</label>
                            <select class="form-control" id="size_id" name="size_id">
                                <?php foreach ($sizes as $size) : ?>
                                    <option value="<?= $size['id'] ?>"><?= $size['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="strap_id" class="form-label">Dây đeo:</label>
                            <select class="form-control" id="strap_id" name="strap_id">
                                <?php foreach ($straps as $strap) : ?>
                                    <option value="<?= $strap['id'] ?>"><?= $strap['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="glass_id" class="form-label">Mặt kính:</label>
                            <select class="form-control" id="glass_id" name="glass_id">
                                <?php foreach ($glasses as $glass) : ?>
                                    <option value="<?= $glass['id'] ?>"><?= $glass['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="gender" class="form-label">Giới tính:</label>
                            <select class="form-control" id="gender" name="gender">
                                <option value="0">Nữ</option>
                                <option value="1">Nam</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="color_id" class="form-label">Màu sắc:</label>
                            <select class="form-control" id="color_id" name="color_id">
                                <?php foreach ($colors as $color) : ?>
                                    <option value="<?= $color['id'] ?>"><?= $color['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="origin" class="form-label">Xuất xứ:</label>
                            <input type="text" class="form-control" id="origin" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['origin'] : null ?>" placeholder="Nhập nguồn gốc xuất xứ SP..." name="origin">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="category_id" class="form-label">Danh mục:</label>
                            <select class="form-control" id="category_id" name="category_id">
                                <?php foreach ($categories as $category) : ?>
                                    <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="tags" class="form-label">Từ khóa:</label>
                            <select class="form-control" id="tags" name="tags[]" multiple>
                                <?php foreach ($tags as $tag) : ?>
                                    <option value="<?= $tag['id'] ?>"><?= $tag['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="warranty_id" class="form-label">Bảo hành:</label>
                            <select class="form-control" id="warranty_id" name="warranty_id">
                                <?php foreach ($warranties as $warranty) : ?>
                                    <option value="<?= $warranty['id'] ?>"><?= $warranty['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                </div>

                <button type="submit" class="btn btn-primary">Đăng</button>
                <a href="<?= BASE_URL_ADMIN ?>?act=products" class="btn btn-danger">Hoàn tác</a>
            </form>
        </div>
    </div>
</div>

<?php if (isset($_SESSION['data'])) {
    unset($_SESSION['data']);
} ?>