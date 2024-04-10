<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Web nhóm 7</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

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
        <img src="assets/img/logo.png" alt="">
        <h1>Web nhóm 7</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../../index.php">Trang chủ</a></li>
          <li><a href="">Sản phẩm</a></li>
          <li class="dropdown"><a href=""><span>Danh mục</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Đồng hồ</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Đồng hồ Casio</a></li>
                  <li><a href="#">Đồng hồ Rolex</a></li>
                  <li><a href="#">Đồng hồ Cartier</a></li>
                  <li><a href="#">Đồng hồ Apple</a></li>
                </ul>
              </li>
              <li><a href="#">Đồng hồ cơ</a></li>
              <li><a href="#">Đồng hồ điện tử</a></li>
            </ul>
          </li>

          <li><a href="member.html">Thành viên</a></li>
          <li><a href="../../admin/" onclick="return confirm('Trang này chỉ dành riêng cho admin, bạn đã có tài khoản chứ?')">Admin</a></li>
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
          <form action="" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->

<style>
    body{
        background-image: url('https://gamelandvn.com/wp-content/uploads/anh/2023/07/nhan-vat-fontaine-thumbnail.webp');
        background-size:contain;
    }
    .khungtvien{
        text-align: center;
        padding: 50px;
    }
    .khungmember{
        text-align: center;
        display: flex;
        border-radius: 10px;
        background-color: #fff;
        margin: 100px 280px;
    }
    .avatar{
        width: 400px;
        height: 400px;
        border-radius: 200px;
        border: 8px solid black;
    }
</style>

<div class="khungmember">
    <div class="khungtvien">
        <h1>Leader</h1>
        <img class="avatar" src="https://scontent.fsgn2-3.fna.fbcdn.net/v/t39.30808-6/395908972_358157223331205_5888872606375732279_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=5f2048&_nc_ohc=_jpe_iE5eFUAb4gQ1-0&_nc_ht=scontent.fsgn2-3.fna&oh=00_AfDRK14lmHPlBlDRPDbeM3UXLOc2nqYd67tqPl4QGS_YuA&oe=661BB4FD" alt="">
        <h3>Đinh Văn Tùng</h3>
        <h3>PH46171</h3>
    </div>
    <div class="khungtvien">
        <h1>Member</h1>
        <img class="avatar" src="https://tranhdecors.com/wp-content/uploads/edd/2023/11/Hinh-nen-Kiem-Hiep-Trung-Quoc.jpg" alt="">
        <h3>Ngô Xuân Chính</h3>
        <h3>PH45367</h3>
    </div>
</div>

  

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
                  <img src="assets/img/post-sq-1.jpg" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <span>5 Great Startup Tips for Female Founders</span>
                  </div>
                </a>
              </li>

              <li>
                <a href="" class="d-flex align-items-center">
                  <img src="assets/img/post-sq-2.jpg" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <span>What is the son of Football Coach John Gruden, Deuce Gruden doing Now?</span>
                  </div>
                </a>
              </li>

              <li>
                <a href="" class="d-flex align-items-center">
                  <img src="assets/img/post-sq-3.jpg" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                    <span>Life Insurance And Pregnancy: A Working Mom’s Guide</span>
                  </div>
                </a>
              </li>

              <li>
                <a href="" class="d-flex align-items-center">
                  <img src="assets/img/post-sq-4.jpg" alt="" class="img-fluid me-3">
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

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>