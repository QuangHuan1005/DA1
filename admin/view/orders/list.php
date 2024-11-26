<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include "components/sidebar.php" ?>
            <!-- Main Content -->

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-body-tertiary vh-100">
                <!-- Dashboard Section -->
                <h1 class="mt-3">Danh sách đơn hàng</h1>
                <div id="dashboard" class="section shadow-sm p-3 mb-5 bg-white rounded mt-5">
                    <table class="table table-hover table-bordered">
                        <thead class="table-warning">
                            <tr>
                                <th scope="col">Mã đơn hàng</th>
                                <th scope="col">Tên khách hàng</th>
                                <th scope="col">Tổng tiền</th>
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Ngày tạo đơn hàng</th>
                                <th scope="col">Ngày hoàn thành</th>
                                <th scope="col">Công cụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // print_r($all);
                            foreach ($all as $key): ?>
                                <tr>
                                    <th scope="row"><?= $key->order_id ?></th>
                                    <td><?= $key->nameUser ?></td>
                                    <td>
                                        <?= number_format($key->totalOrder) . "₫" ?>
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
                                    <td><?= $key->order_date ?></td>
                                    <td>
                                        <?php if (empty($key->confirmed_at)) {
                                            echo "Chưa hoàn thành";
                                        } else {
                                            echo $key->confirmed_at;
                                        } ?>
                                    </td>
                                    <td>
                                        <a href="?act=detail_order&id=<?= $key->order_id ?>" class="btn btn-info"><i
                                                class="fas fa-eye"></i></a>
                                        <?php
                                        echo match ($key->status) {
                                            'pending' => "<a href=\"?act=confirmed_order&id={$key->order_id}\" class=\"btn btn-warning\" onclick=\"return confirm('Bạn có muốn chuyển trạng thái thành đã xác nhận không?');\">
                                            <i class=\"fa-solid fa-marker\"></i></a>",
                                            'confirmed' => "<a href=\"?act=shipped_order&id={$key->order_id}\" class=\"btn btn-warning\"onclick=\"return confirm('Bạn có muốn chuyển trạng thái thành đã vận chuyển không?');\">
                                            <i class=\"fa-solid fa-marker\"></i></a>",
                                            'shipped' => "<a href=\"?act=delivered_order&id={$key->order_id}\" class=\"btn btn-warning\"onclick=\"return confirm('Bạn có muốn chuyển trạng thái thành đã hoàn thành không?');\">
                                            <i class=\"fa-solid fa-marker\"></i></a>",
                                            default => ""
                                        };
                                        ?>
                                        <?php
                                        if ($key->status === "canceled" || $key->status === "delivered") {
                                            echo "";
                                        } else {
                                            echo "<a href=\"?act=canceled_order&id={$key->order_id}\" class=\"delete_btn btn btn-danger\"
                                            onclick=\"return confirm('Bạn có chắc muốn hủy đơn không?') \"><i
                                                class=\"fa-solid fa-trash-can\"></i></a>";
                                        }
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
</body>

</html>