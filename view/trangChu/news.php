<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
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

        .title {
            text-align: center;
            font-size: 36px;
            font-weight: 700;
            line-height: 54px;
            margin-bottom: 20px;
        }

        .main {
            width: 100%;
            background-color: #F5F5F7;
            border-radius: 1px solid black;
            margin-top: 10px;
            padding-top: 10px;
        }

        .news-showcase {
            width: 100%;
            flex-wrap: wrap;
        }

        .news-grid {
            width: 1200px;
            justify-content: center;
            gap: 20px;
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .box {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;

            border-bottom: 3px solid #ddd;
        }

        .news {
            width: 100%;
            display: flex;
            justify-content: center;
            margin: 5px;
        }

        .news img {
            border-radius: 10px;
        }

        .news .nd .product_name {
            font-size: 30px;

        }
    </style>
</head>

<body>
    <?php include "components/header.php"; ?>
    <div class="container">
        <div class="link">
            <a href="?act=home">Trang chủ ›</a>
            <p>Tin Tức </p>
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
                                    <div class="product_price"><i class="fa-solid fa-calendar-days"></i>
                                        <?= $key->create_at ?></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php include "components/footer.php"; ?>
</body>

</html>