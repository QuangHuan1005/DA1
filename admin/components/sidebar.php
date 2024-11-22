<!-- Sidebar -->
<nav class="col-md-4 col-lg-2 d-md-block bg-dark sidebar text-white vh-100 position-fixed">
    <div class="position-sticky pt-3">
        <h2 class="py-4">
            <img src="" alt="" />
        </h2>
        <div class="d-flex align-items-center p-3 border-bottom">
            <img src="../<?= $_SESSION['image'] ?>" alt="Admin Avatar" class="rounded-circle me-2" width="40"
                height="40" />
            <span><?= $_SESSION['username'] ?></span>

        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-white" href="?act=list-pro">Sản Phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="?act=list-category">Danh Mục</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Thống Kê</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Đơn Hàng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="?act=list-users">Tài Khoản</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Bình Luận</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="http://localhost:81/duan1/DA1">Trở Về Trang Chủ</a>
            </li>
        </ul>
    </div>
</nav>