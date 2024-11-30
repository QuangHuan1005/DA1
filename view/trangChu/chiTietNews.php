<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
    * {
            margin: 0 auto;
            padding: 0 auto;
            box-sizing: border-box;
        }

        .link {
            width: 100%;
            display: flex;
            background-color: #ffffff;
            align-items: center;
            /* Căn giữa theo chiều dọc */
            padding: 10px 5px;
            padding-left: 352px;
        }

        /* Cải thiện cách hiển thị của các phần tử con */
        .link a,
        .link p {
            margin: 0;
            /* Loại bỏ margin mặc định của các phần tử */
            padding: 0 10px;
            /* Thêm khoảng cách giữa các phần tử nếu cần */
            text-decoration: none;
            color: black;
        }
        .main{
            width: 100%;
            align-items: center;
        }
        .img{
            width: 1200px;
            align-items: center;
        }
        .img img{
            max-width:1200px;
            height: auto;
            border-radius: 10px;
        }
        .nd{
            width: 1200px;
            border: 1px solid #ddd;
            border-radius: 10px;
            align-items: center;
            margin-top: 10px;
            margin-bottom: 20px;
        }
        .title{
            margin: 10px;
        }
        .content{
            margin: 10px;
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