<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone Promotion Page</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        * {
            margin: 0 auto;
            padding: 0 auto;
            box-sizing: border-box;
        }

        .slideshow-container {
            position: relative;
            width: 100%;
            height: 595px;
            overflow: hidden;
        }

        .mySlides {
            position: absolute;
            width: 100%;
            height: 100%;
            transform: translateX(100%);
            transition: transform 0.7s ease-in-out;
        }

        .mySlides.active {
            transform: translateX(0);
            z-index: 2;
        }

        .mySlides.previous {
            transform: translateX(-100%);
            z-index: 1;
        }

        .slideshow-container img {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<?php
include 'components/header.php';
?>
<header class="header">
    <div class="slideshow-container">
        <div class="mySlides">
            <img src="upload/bannerTrangchu.png" alt="Slide 1">
        </div>
        <div class="mySlides">
            <img src="upload/bannerTrangchu1.png" alt="Slide 2">
        </div>
        <div class="mySlides">
            <img src="upload/bannerTrangchu2.png" alt="Slide 3">
        </div>
        <div class="mySlides">
            <img src="upload/bannerTrangchu3.png" alt="Slide 3">
        </div>
        <div class="mySlides">
            <img src="upload/bannerTrangchu4.png" alt="Slide 3">
        </div>
    </div>
</header>
<div class="product-showcase">
    <h2>iPhone</h2>
    <div class="product-grid">
        <?php foreach ($list as $product): ?>
            <div class="product">

                <a href="?act=chiTiet&id=<?= $product->product_id ?>">
                    <img src="<?= $product->image ?>">
                </a>
                <div class="product_name"><?= $product->product_name; ?></div>
                <div class="product_price"><?= number_format($product->price) . "₫" ?></div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="btn_ip"><a href="?act=sanPham">Xem tất cả sản phẩm <i class="fa-solid fa-chevron-right"></i></a></div>
</div>
<div class="promo-section">
    <div class="promo-content">
        <img src="upload/banner_bottom.jpeg" alt="">
    </div>
</div>
<div class="news">
    <h2>Tin tức</h2>
    <div class="news-grid">
        <?php foreach ($listNew as $new):
            $date = strtotime($new->create_at) ?>
            <div class="new">
                <img src="<?= $new->thumbnail ?>">
                <h3>
                    <a class="new_title"><?= $new->title ?></a>
                </h3>
                <div class="new_date">
                    <span><?= date('d-m-Y', $date); ?>
                    </span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="btn_ip"><a href="">Xem tất cả tin tức <i class="fa-solid fa-chevron-right"></i></a></div>
</div>
<?php include 'components/footer.php' ?>
</body>

</html>
<script>
    let slideIndex = 0;

    const showSlide = () => {
        const slides = document.querySelectorAll(".mySlides");
        slides.forEach((slide) => {
            slide.classList.remove("active", "previous");
        });
        slides[slideIndex].classList.add("active");
        const previousSlideIndex =
            slideIndex === 0 ? slides.length - 1 : slideIndex - 1;
        slides[previousSlideIndex].classList.add("previous");
        slideIndex = (slideIndex + 1) % slides.length;
        setTimeout(showSlide, 3000);
    }
    window.onload = showSlide;
</script>