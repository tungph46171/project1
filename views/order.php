<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Giỏ hàng</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= BASE_URL ?>assets/client/assets/img/favicon.png" rel="icon">
  <link href="<?= BASE_URL ?>assets/client/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= BASE_URL ?>assets/client/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= BASE_URL ?>assets/client/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= BASE_URL ?>assets/client/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?= BASE_URL ?>assets/client/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= BASE_URL ?>assets/client/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="<?= BASE_URL ?>assets/client/assets/css/variables.css" rel="stylesheet">
  <link href="<?= BASE_URL ?>assets/client/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Web nhóm 7</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Trang chủ</a></li>

          <!-- <li><a href=" ">Sản phẩm</a></li>
          <li class="dropdown"><a href="category.html"><span>Danh mục</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="search-result.html">Search Result</a></li>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->

          <li><a href="assets/client/member.html">Thành viên</a></li>
          <li><a href="admin/index.php" onclick="return confirm('Trang này chỉ dành riêng cho admin, bạn đã có tài khoản chứ?')">Admin</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->

  <br><br><br><br><br><br>

    <div class="container">
        <form action="<?= BASE_URL . '?act=order-purchase' ?>" method="POST">
            <div class="row">
                <h1>Đặt hàng liền tay - Vận may ập tới</h1>

                <div class="col-md-6">
                    <div class="mt-2 mb-2">
                        <label for="user_name">Họ và tên:</label>
                        <input type="text" name="user_name" id="user_name" value="<?= $_SESSION['user']['name'] ?>" required class="form-control">
                    </div>
                    <div class="mt-2 mb-2">
                        <label for="user_email">Email:</label>
                        <input type="email" name="user_email" id="user_email" value="<?= $_SESSION['user']['email'] ?>" required class="form-control">
                    </div>
                    <div class="mt-2 mb-2">
                        <label for="user_phone">Số điện thoai:</label>
                        <input type="tel" name="user_phone" id="user_phone" required class="form-control" placeholder="vui lòng nhập SĐT của bạn...">
                    </div>
                    <div class="mt-2 mb-2">
                        <label for="user_address">Địa chỉ nhận hàng:</label>
                        <input type="text" name="user_address" id="user_address" required class="form-control" placeholder="vui lòng nhập địa chỉ nhận hàng...">
                    </div>
                </div>

                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <th>Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Tổng tiền</th>
                        </tr>


                        <?php
                        if (!empty($_SESSION['cart'])) :
                            foreach ($_SESSION['cart'] as $item) : ?>
                                <tr>
                                    <th>
                                        <img src="<?= BASE_URL . $item['img'] ?>" width="50px" alt="">
                                    </th>
                                    <th><?= $item['name'] ?></th>
                                    <th><?= number_format($item['price_sale'] ?: $item['price']) ?></th>
                                    <th>
                                        <span class="btn btn-warning"><?= $item['quantity'] ?></span>
                                    </th>
                                    <th>
                                        <?php
                                        $total = ($item['price_sale'] ?: $item['price']) * $item['quantity'];

                                        echo number_format($total);
                                        ?>
                                    </th>
                                </tr>
                        <?php
                            endforeach;
                        endif;
                        ?>

                    </table>

                    <h2>Xác nhận thanh toán</h2>
                    <h3>
                        Tổng tiền: 

                        <?= caculator_total_order() ?> VND
                    </h3>
                    <a href="<?= BASE_URL ?>" 
                        onclick="return !confirm('Đừng đi please T.T')"
                        class="btn btn-warning">Quay lại trang chủ</a>

                    <button type="submit" class="btn btn-success">Đặt mua</button>
                </div>

            </div>
        </form>
    </div>
    <br><br><br><br>

<footer id="footer" class="footer">

    <div class="footer-content">
        <div class="container">

            <div class="row g-5">
                <div class="col-lg-4">
                    <h3 class="footer-heading">Nhóm 7 - WD18401</h3>
                    <p><?= $GLOBALS['settings']['overview'] ?? null ?></p>
                    <p>Đinh Văn Tùng</p>
                    <p>Ngô Xuân Chính</p>
                </div>
                <div class="col-6 col-lg-2">
                    <h3 class="footer-heading">Menu</h3>
                    <ul class="footer-links list-unstyled">
                        <li><a href=""><i class="bi bi-chevron-right"></i>Trang chủ</a></li>
                        <li><a href=""><i class="bi bi-chevron-right"></i>Sản phẩm</a></li>
                        <li><a href=""><i class="bi bi-chevron-right"></i>Danh mục</a></li>
                        <li><a href=""><i class="bi bi-chevron-right"></i>Bài viết liên quan</a></li>
                        <li><a href=""><i class="bi bi-chevron-right"></i>Thông tin thành viên</a></li>
                        <li><a href=""><i class="bi bi-chevron-right"></i>Liên hệ</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h3 class="footer-heading">Danh mục</h3>
                    <ul class="footer-links list-unstyled">
                        <li><a href=""><i class="bi bi-chevron-right"></i>Casio</a></li>
                        <li><a href=""><i class="bi bi-chevron-right"></i>Rolex</a></li>
                        <li><a href=""><i class="bi bi-chevron-right"></i>Cartier</a></li>
                        <li><a href=""><i class="bi bi-chevron-right"></i>...</a></li>
                        <li><a href=""><i class="bi bi-chevron-right"></i>Xem thêm</a></li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <h3 class="footer-heading">Bài viết gần đây</h3>

                    <ul class="footer-links footer-blog-entry list-unstyled">
                        <li>
                            <a href="" class="d-flex align-items-center">
                                <img src="<?= BASE_URL ?>assets/client/assets/img/post-sq-1.jpg" alt="" class="img-fluid me-3">
                                <div>
                                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <span>5 Great Startup Tips for Female Founders</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="" class="d-flex align-items-center">
                                <img src="<?= BASE_URL ?>assets/client/assets/img/post-sq-2.jpg" alt="" class="img-fluid me-3">
                                <div>
                                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <span>What is the son of Football Coach John Gruden, Deuce Gruden doing Now?</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="" class="d-flex align-items-center">
                                <img src="<?= BASE_URL ?>assets/client/assets/img/post-sq-3.jpg" alt="" class="img-fluid me-3">
                                <div>
                                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <span>Life Insurance And Pregnancy: A Working Mom’s Guide</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="" class="d-flex align-items-center">
                                <img src="<?= BASE_URL ?>assets/client/assets/img/post-sq-4.jpg" alt="" class="img-fluid me-3">
                                <div>
                                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <span>How to Avoid Distraction and Stay Focused During Video Calls?</span>
                                </div>
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="footer-legal">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <div class="copyright">
                        © Copyright <strong><span>ZenBlog</span></strong>. All Rights Reserved
                    </div>

                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>

                </div>

            </div>

        </div>
    </div>

</footer>
</body>

</html>