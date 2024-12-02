<nav class="navbar">
    <div class="logo">
        <a href="?act=home">LOGO</a>
    </div>
    <ul class="nav-links">
        <li><a href="?act=home">Trang chủ</a></li>
        <li><a href="?act=sanPham">Sản phẩm</a></li>
        <li><a href="#">Tin Tức</a></li>
        <li><a href="#">Khuyến mại</a></li>
    </ul>
    <div class="icon-links">
        <a href="#"><i class="fas fa-search icon"></i></a>
        <?php
        if (isset($_SESSION['username'])) { ?>
            <a href="?act=logout"><i class="fas fa-user icon"
                    onclick="return confirm('Bạn có muốn đăng xuất không?')"></i></a>
            <?php
        }
        if (!isset($_SESSION['username'])) { ?>
            <a href="?act=login"><i class="fas fa-user icon"></i></a>
            <?php
        }
        if (isset($_SESSION['username'])) { ?>
            <a href="?act=gioHang&id=<?= $_SESSION['Users_id'] ?? "" ?>"><i class="fas fa-shopping-cart icon"></i>
                <span class="badge">0</span>
            </a>
            <?php
        }
        ?>

    </div>
</nav>