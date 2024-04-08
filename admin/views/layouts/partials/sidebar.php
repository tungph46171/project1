<style>
    .logo-img{
        width: 60px;
        border-radius: 10px;
    }
</style>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="     ">
        <div class="sidebar-brand-icon">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-copw-rOwjbuoWCNrAhEw3aGVzzD1KvMOkQ&usqp=CAU" class="logo-img">
        </div>
        <div class="sidebar-brand-text mx-3">Nhóm 7 <sup>🤍</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= BASE_URL_ADMIN ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Trang quản trị</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Chức năng
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-user"></i>
            <span>Quản lý Người dùng</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=users">Danh sách người dùng</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=user-create">Thêm mới</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePost" aria-expanded="true" aria-controls="collapsePost">
            <i class="fab fa-apple"></i>
            <span>Quản lý Bài viết</span>
        </a>
        <div id="collapsePost" class="collapse" aria-labelledby="headingPost" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=posts">Danh sách bài viết</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=post-create">Thêm mới</a>
            </div>
        </div>
    </li>


    <!-- ĐANG HIỆU CHỈNH -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseProduct">
            <i class="fab fa-apple"></i>
            <span>Quản lý Sản phẩm</span>
        </a>
        <div id="collapseProduct" class="collapse" aria-labelledby="headingProduct" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=products">Danh sách sản phẩm</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=product-create">Thêm mới</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a href="<?= BASE_URL_ADMIN ?>?act=orders" class="nav-link collapsed">
            <i class="fab fa-apple"></i>
            Quản lý Đơn hàng
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fab fa-apple"></i>
            <span>Quản lý từ khóa</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=tags">Danh sách từ khóa</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=tag-create">Thêm mới</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
            <i class="fab fa-apple"></i>
            <span>Quản lý Danh mục</span>
        </a>
        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=categories">Danh sách danh mục</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=category-create">Thêm mới</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
            <i class="fab fa-apple"></i>
            <span>Quản lý Tác giả</span>
        </a>
        <div id="collapse5" class="collapse" aria-labelledby="heading4" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=authors">Danh sách tác giả</a>
                <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=author-create">Thêm mới</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Setting -->
    <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL_ADMIN . '?act=setting-form' ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Cài đặt - Setting</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
</ul>