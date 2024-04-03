<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= BASE_URL ?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= BASE_URL ?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<style>
    .bg-gradient-primary{
        background-image: url("https://i.pinimg.com/originals/25/3f/ac/253fac3f3b23509e2ee1ccc686504164.jpg");
    }
    .col-lg-6{
        background-image: url("https://minhtuanmobile.com/uploads/blog/furina-xung-danh-thuy-than-231030103749.jpg");
    }
    .p-5{
        background-color: #ffff;
    }
</style>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Đăng nhập trang quản trị!</h1>
                                    </div>

                                    <?php if (isset($_SESSION['error'])) : ?>
                                        <div class="alert alert-danger">
                                            <?= $_SESSION['error'] ?>
                                        </div>
                                        <?php unset($_SESSION['error']); ?>
                                    <?php endif; ?>

                                    <form action="" method="POST" class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email" placeholder="Điền địa chỉ email của bạn...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" placeholder="Vui lòng nhập mật khẩu...">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Đăng nhập</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= BASE_URL ?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?= BASE_URL ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= BASE_URL ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= BASE_URL ?>assets/admin/js/sb-admin-2.min.js"></script>

</body>

</html>