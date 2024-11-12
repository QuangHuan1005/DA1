<?php
$products = [
  ['image' => 'upload/iphone-15-pro-max.webp', 'name' => 'iPhone 15 Pro Max'],
  ['image' => 'upload/iphone-15-pro-max.webp', 'name' => 'iPhone 13 Series'],
  ['image' => 'upload/iphone-15-pro-max.webp', 'name' => 'iPhone 12 Series']
];

$newsItems = [
  ['image' => 'upload/news1.jpg', 'description' => 'Apple phát hành iOS mới'],
  ['image' => 'upload/news2.jpg', 'description' => 'Khuyến mãi khi mua iPhone']
];
?>
<?php
include 'components/header.php';
?>
<header class="header">
  <div class="banner">
    <img src="upload/banner.png" alt="iPhone Promotion Banner">
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
    <img src="upload/banner2.jpg" alt="">
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
<?php include 'components/footer.php' ?>