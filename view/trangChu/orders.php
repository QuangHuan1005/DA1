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

        }

        .infoAccount a {
            color: black;
        }

        .infoOrder1 a {
            color: black;
        }

        .infoOrder {
            margin: 10px;
            font-size: 16px;
            padding: 10px 0px 10px 15px;
            background: rgba(0, 102, 204, 0.1);
            border-radius: 8px;
        }

        .infoOrder1 {
            margin: 10px;
            font-size: 16px;
            padding: 10px 0px 10px 15px;
        }

        .infoOrder a {
            color: #0066cc;
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

        .container-fluid {
            width: 100%;
            padding-right: var(--bs-gutter-x, 0.75rem);
            padding-left: var(--bs-gutter-x, 0.75rem);
            margin-right: auto;
            margin-left: auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: calc(var(--bs-gutter-x, 1.5rem) / -2);
            margin-left: calc(var(--bs-gutter-x, 1.5rem) / -2);
        }

        .table {
            border: 1px solid #0066CC;
            width: 616px;
            margin-bottom: 1rem;
            color: #212529;
            border-collapse: collapse;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-warning {
            background-color: #fff3cd;
            color: #856404;
        }

        .table-bordered {
            border-collapse: collapse;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
            text-align: center;
            vertical-align: middle;
            padding: 10px;
        }

        .table-bordered tr {
            border: 1px solid #dee2e6;
        }

        .badge {
            display: inline-block;
            padding: 0.35em 0.65em;
            font-size: 0.75rem;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0.375rem;
        }

        .text-bg-danger {
            color: #fff;
            background-color: #dc3545;
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
                    <div class="infoOrder1">
                        <a href="?act=logout" class="list-group-item list-group-item-action"><i
                                style="margin-right:14px; font-size:20px"
                                class="fa-solid fa-right-from-bracket"></i>Đăng
                            xuất</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div id="content" class="card">
                    <?php
                    if (isset($all) && !empty($all)) { ?>
                        <div class="card-body">
                            <div class='container mt-5'>
                                <div class="container-fluid">
                                    <div class="row">
                                        <!-- Main Content -->

                                        <main class=" ms-sm-auto col-lg-10 px-md-4 bg-body-tertiary vh-100">
                                            <!-- Dashboard Section -->
                                            <div id="dashboard" class="section shadow-sm p-3 mb-5 bg-white rounded mt-5">
                                                <table class="table table-hover table-bordered">
                                                    <thead class="table-warning">
                                                        <tr>
                                                            <th scope="col">Mã đơn hàng</th>
                                                            <th scope="col">Tên khách hàng</th>
                                                            <th scope="col">Tổng tiền</th>
                                                            <th scope="col">Trạng thái</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        // print_r($all);
                                                        foreach ($all as $key): ?>

                                                            <tr>
                                                                <th scope="row"><a
                                                                        href="?act=detail_order&id=<?= $key->order_id ?>"><?= $key->order_id ?></a>
                                                                </th>
                                                                <td><a
                                                                        href="?act=detail_order&id=<?= $key->order_id ?>"><?= $key->nameUser ?></a>
                                                                </td>
                                                                <td>
                                                                    <a
                                                                        href="?act=detail_order&id=<?= $key->order_id ?>"><?= number_format($key->totalOrder) . "₫" ?></a>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    echo match ($key->status) {
                                                                        'pending' => '<span class="badge text-bg-danger" >Chờ xử lý</span>',
                                                                        'shipped' => '<span class="badge text-bg-warning" >Đã vận chuyển</span>',
                                                                        'confirmed' => '<span class="badge text-bg-warning" >Đã xác nhận</span>',
                                                                        'delivered' => '<span class="badge text-bg-success" >Đã hoàn thành</span>',
                                                                        default => '<span class="badge text-bg-dark" >Đã hủy</span>'
                                                                    };
                                                                    ?>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </main>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    } else { ?>
                        <p>Bạn chưa có đơn hàng nào</p>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php include "components/footer.php"; ?>
</body>

</html>