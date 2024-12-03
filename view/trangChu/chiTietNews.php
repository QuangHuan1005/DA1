<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
   /* Reset Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* General Styles */
body {
    font-family: 'Roboto', sans-serif;
    background-color: #f9f9f9;
    color: #333;
    line-height: 1.6;
    margin: 0 auto;
}

a {
    text-decoration: none;
    color: #007bff;
    transition: color 0.3s ease;
}

a:hover {
    color: #0056b3;
}

/* Header Link Section */
.link {
    display: flex;
    align-items: center;
    background-color: #fff;
    padding: 10px 20px;
    font-size: 16px;
    gap: 5px;
}

.link p {
    color: #333;
}

/* Main Section */
.main {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    margin: 0 auto;
}

.img {
    width: 100%;
    max-width: 1200px;
    margin-bottom: 20px;
}

.img img {
    width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.nd {
    width: 100%;
    max-width: 1200px;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.nd .title h1 {
    font-size: 32px;
    margin-bottom: 10px;
    color: #333;
}

.nd .title p {
    font-size: 14px;
    color: #666;
    display: flex;
    align-items: center;
    gap: 5px;
}

.nd .content {
    font-size: 16px;
    color: #444;
    margin-top: 10px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .link {
        flex-direction: column;
        gap: 10px;
        padding: 10px;
    }

    .nd .title h1 {
        font-size: 24px;
    }

    .nd {
        padding: 15px;
    }
}

        </style>
</head>
<body>
<?php include "/laragon/www/DA1/components/header.php"; ?>
<div class="container">
<div class="link">
            <a href="?act=home">Trang chủ ›</a>
            <p>Tin Tức  ›</p>
            <p> <?= $new->title ?></p>
        </div>
        <div class="main">
            <div class="img">
                <img src="<?=$new->thumbnail ?>" alt="">
            </div>
            <div class="nd">
                <div class="title">
                    <h1><?=$new ->title ?></h1>
                    <p><i class="fa-solid fa-calendar-days"></i>  <?= $new->create_at ?></p>
                </div>
                <div class="content">
                    <p><?=$new->content ?></p>
                </div>
            </div>
        </div>
</div>
<?php include "/laragon/www/DA1/components/footer.php"; ?>
</body>
</html>