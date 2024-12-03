<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        /* General Styles */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f9f9f9;
    color: #333;
    margin: 0;
    padding: 0;
}

a {
    color: #007bff;
    text-decoration: none;
    transition: color 0.3s ease;
}

a:hover {
    color: #0056b3;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

* {
    box-sizing: border-box;
}

/* Header Navigation Links */
.link {
    width: 100%;
    display: flex;
    align-items: center;
    padding: 10px 0;
    font-size: 16px;
}

.link a,
.link p {
    margin: 0 10px;
}

/* Title Section */
.title {
    text-align: center;
    font-size: 40px;
    color: #333;
    text-transform: uppercase;
    margin-bottom: 30px;
}

/* News Showcase */
.news-showcase {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
}

/* News Box */
.box {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    overflow: hidden;
    transition: box-shadow 0.3s ease, transform 0.3s ease;
}

.box:hover {
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transform: translateY(-5px);
}

.news {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.news img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    transition: transform 0.3s ease;
}

.news img:hover {
    transform: scale(1.05);
}

/* News Details */
.nd {
    padding: 10px;
    text-align: center;
}

.product_name {
    font-size: 24px;
    font-weight: bold;
    margin: 10px 0;
}

.product_price {
    font-size: 14px;
    color: #666;
    display: flex;
    align-items: center;
    justify-content: center;
}

.product_price i {
    margin-right: 5px;
}

/* Animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.box {
    animation: fadeIn 0.5s ease-out;
}

/* Responsive Design */
@media (max-width: 768px) {
    .news-grid {
        grid-template-columns: 1fr;
    }

    .link {
        flex-direction: column;
        align-items: flex-start;
        padding-left: 10px;
    }

    .title {
        font-size: 28px;
    }
}

    </style>
</head>
<body>
    <?php include "/laragon/www/DA1/components/header.php"; ?>
<div class="container">
        <div class="link">
            <a href="?act=home">Trang chủ ›</a>
            <p>Tin Tức  </p>
        </div>
    <div class="main">
        <div class="title">Tin Tức </div>
        <div class="news-showcase">
            <div class="news-grid">
            <?php foreach ($all_news as $key) { ?>
                            <div class="box1 box active">
                                <!-- img o trong db : 	/upload/ip16.jpeg -->
                                <div class="news">
                                    <a href="?act=chiTietNew&id=<?= $key->new_id ?>">
                                        <img src="<?= $key->thumbnail ?>" width="240px" height="240px" alt="">
                                        
                                    </a>
                                    <div class="nd">
                                    <div class="product_name"><?= $key->title ?></div>
                                    <div class="product_price"><i class="fa-solid fa-calendar-days"></i>  <?= $key->create_at ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php include "/laragon/www/DA1/components/footer.php"; ?>
</body>
</html>