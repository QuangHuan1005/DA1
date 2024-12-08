<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Tài Khoản</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        * {
            margin: 0 auto;
            padding: 0 auto;
            box-sizing: border-box;
        }

        .container {
            width: 100%;
            max-width: 1000px;
        }

        .row {
            display: flex;
        }

        .list-group {
            display: flex;
            flex-direction: column;
            width: 300px;
            height: 416px;
            background-color: #ffffff;
            border-radius: 8px;
            margin: 30px 0px 50px 0px;
        }

        .col-md-9 {
            width: 650px;
            background-color: #ffffff;
            border-radius: 8px;
            margin: 30px 0px 50px 0px;
            height: 416px;
            padding: 16px 15px;
        }

        .infoAccount {
            margin: 10px;
            font-size: 16px;
            padding: 10px 0px 10px 15px;
            background: rgba(0, 102, 204, 0.1);
            border-radius: 8px;
        }

        .infoAccount a {
            color: #0066cc;
        }

        .infoOrder {
            margin: 10px;
            font-size: 16px;
            padding: 10px 0px 10px 15px;
        }

        .infoOrder a {
            color: black;
        }

        input {
            min-height: 48px;
            width: 100%;
            float: left;
            background: #FFFFFF;
            border: 1px solid #EBEBEB;
            border-radius: 8px;
            margin-bottom: 20px;
            padding-left: 10px;
        }

        .user-name label {
            width: auto;
            font-weight: 400;
            font-size: 15px;
            line-height: 24px;
            text-align: left;
        }

        .user-name span {
            margin: 0 5px;
            font-size: 14px;
        }

        .mt-3 {
            text-align: center;
        }

        .btn {
            background: #0066CC;
            font-weight: 400;
            min-width: 140px;
            border: none;
            background-color: #0066CC;
            border-radius: 8px;
            padding: 10px 30px;
            text-align: center;
            font-size: 14px;
            color: #fff;
            margin-top: 100px;
            line-height: 21px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php include "components/header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <div class="infoAccount">
                        <a href="?act=account" class="list-group-item list-group-item-action"><i
                                style="margin-right:10px; font-size:20px" class="fa-solid fa-user"></i>Thông
                            tin tài khoản</a>
                    </div>
                    <div class="infoOrder">
                        <a href="?act=list_order&id=<?= $_SESSION['Users_id'] ?>"
                            class="list-group-item list-group-item-action"><i style="margin-right:14px; font-size:20px"
                                class="fa-solid fa-clipboard-list"></i>Hàng đã
                            đặt</a>
                    </div>
                    <div class="infoOrder">
                        <a href="?act=logout" class="list-group-item list-group-item-action"><i
                                style="margin-right:14px; font-size:20px"
                                class="fa-solid fa-right-from-bracket"></i>Đăng
                            xuất</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div id="content" class="card">
                    <div class="card-body">
                        <div class='container mt-5'>
                            <div class='card'>
                                <div class='card-body'>
                                    <div class="first_name">
                                        <label for="FirstName">Tên, Họ:</label>
                                        <input type="text" name="FirstName" value="<?= $_SESSION['name'] ?>">
                                    </div>
                                    <div class="email">
                                        <label for="Email">E-mail:</label>
                                        <input type="email" name="Email" value="<?= $_SESSION['email'] ?>">
                                    </div>
                                    <div class="user-name">
                                        <label for="Username">Username:</label>
                                        <span class="readonly-username"><?= $_SESSION['username'] ?></span>
                                    </div>
                                    <div class='mt-3 text-center'>
                                        <button class="btn">Chỉnh Sửa</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "components/footer.php"; ?>
</body>

</html>