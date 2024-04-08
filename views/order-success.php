<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt hàng thành công</title>

    <link href="<?= BASE_URL ?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="<?= BASE_URL ?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

    <?php 
        if (isset($style) && $style) {
            require_once PATH_VIEW_ADMIN . 'styles/' . $style . '.php';
        }

        if (isset($style2) && $style2) {
            require_once PATH_VIEW_ADMIN . $style2 . '.php';
        }
    ?>
</head>
<body>
    <h1>Đặt hàng thành công</h1>
    <button href="home.php" class="btn btn-info">Về trang chủ</button>
    <a href="index.php" class="btn btn-info">Về trang chủ</a>
</body>
</html>