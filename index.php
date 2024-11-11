<?php
$products = [
    ['image' => 'img/iphone-15-pro-max.webp', 'name' => 'iPhone 15 Pro Max'],
    ['image' => 'img/iphone-13.jpg', 'name' => 'iPhone 13 Series'],
    ['image' => 'img/iphone-12.jpg', 'name' => 'iPhone 12 Series']
];

$newsItems = [
    ['image' => 'img/news1.jpg', 'description' => 'Apple phát hành iOS mới'],
    ['image' => 'img/news2.jpg', 'description' => 'Khuyến mãi khi mua iPhone']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iPhone Promotion Page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <nav class="navbar">
    <div class="logo">
      <a href="#">LOGO</a>
    </div>
    <ul class="nav-links">
      <li><a href="#">iPhone</a></li>
      <li><a href="#">Máy cũ</a></li>
      <li><a href="#">Phụ kiện</a></li>
      <li><a href="#">Tin Tức</a></li>
      <li><a href="#">Khuyến mại</a></li>
    </ul>
    <div class="icon-links">
      <a href="#"><i class="fas fa-search icon"></i></a>
      <a href="#"><i class="fas fa-user icon"></i></a>
      <a href="#"><i class="fas fa-shopping-cart icon"></i> 0</a>
    </div>
  </nav>

  <header class="header">
    <div class="banner">
      <img src="img/banner.png" alt="iPhone Promotion Banner">
    </div>
  </header>

  <section class="product-showcase">
    <h2>iPhone</h2>
    <div class="product-grid">
      <?php foreach ($products as $product): ?>
        <div class="product">
          <img src="<?= $product['image']; ?>" alt="<?= $product['name']; ?>">
          <p><?= $product['name']; ?></p>
          <button>Mua ngay</button>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="promo-section">
    <div class="promo-content">
      <img src="img/banner2.jpg" alt="">
    </div>
  </section>

  <section class="news-section">
    <h2>Tin tức</h2>
    <div class="news-grid">
      <?php foreach ($newsItems as $news): ?>
        <div class="news-item">
          <img src="<?= $news['image']; ?>" alt="<?= $news['description']; ?>">
          <p><?= $news['description']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <footer class="footer">
  <div class="footer-content">
    <div class="footer-section">
      <h3>Thông tin</h3>
      <ul>
        <li><a href="#">Giới thiệu</a></li>
        <li><a href="#">Tài khoản của tôi</a></li>
        <li><a href="#">Tin Tức</a></li>
        <li><a href="#">Hệ thống cửa hàng</a></li>
      </ul>
    </div>
    
    <div class="footer-section">
      <h3>Chính sách</h3>
      <ul>
        <li><a href="#">Đổi trả</a></li>
        <li><a href="#">Bảo mật thông tin</a></li>
        <li><a href="#">Phương thức thanh toán</a></li>
        <li><a href="#">Chính sách bảo hành</a></li>
      </ul>
    </div>
    
    <div class="footer-section">
      <h3>Địa chỉ & Liên hệ</h3>
      <ul>
        <li>Địa chỉ: Số 76 Thái Hà, phường Trung Liệt, quận Đống Đa, Hà Nội</li>
        <li>Email: lienhe@shopdunk.com</li>
        <li>Hotline: 1900 1234</li>
      </ul>
    </div>
    
    <div class="footer-section">
      <h3>Dịch vụ</h3>
      <ul>
        <li><a href="#">Thu cũ đổi mới</a></li>
        <li><a href="#">Bảo hành và sửa chữa</a></li>
        <li><a href="#">Đánh giá chất lượng, khiếu nại</a></li>
        <li><a href="#">Tuyển dụng</a></li>
      </ul>
    </div>
  </div>
  
  <div class="footer-bottom">
    <p>© 2016 Công ty Cổ Phần HESMAN Việt Nam | GPDKKD: 0107465657 do Sở KH & ĐT TP. Hà Nội cấp ngày 08/06/2016.</p>
    <p>Đại diện pháp luật: PHẠM MẠNH HÒA | ĐT: 0247.305.9999 | Email: lienhe@shopdunk.com</p>
  </div>
</footer>

</body>
</html>
