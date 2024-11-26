<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trang Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include "components/sidebar.php" ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-body-tertiary vh-100">
                <h1 class="mt-3">Chi tiết đơn hàng</h1>
                <!-- Thông tin khách hàng -->
                <div class="row ">
                    <div class="col-6 shadow-sm p-3 mb-5 bg-white rounded">
                        <div class="form-group">
                            <label class="fw-bold">Mã đơn hàng</label>
                            <input type="text" name="id" value="<?= $oneOrder->order_id ?>" class="my-2 form-control"
                                disabled="">
                        </div>
                        <div class=" form-group">
                            <label class="fw-bold">Tên khách hàng</label>
                            <input type="text" name="id" value="<?= $oneOrder->nameUser ?>" class="my-2 form-control"
                                disabled="">
                        </div>
                        <div class=" form-group">
                            <label class="fw-bold">Địa chỉ nhận hàng</label>
                            <input type="text" name="id" value="<?= $oneOrder->shipping_address ?>"
                                class="my-2 form-control" disabled="">
                        </div>
                        <div class=" form-group">
                            <label class="fw-bold">Ngày tạo đơn</label>
                            <input type="text" name="id" value="<?= $oneOrder->order_date ?>" class="my-2 form-control"
                                disabled="">
                        </div>
                        <div class=" form-group">
                            <label class="fw-bold">Trạng thái</label>
                            <input type="text" name="id" value="<?= match ($oneOrder->status) {
                                'pending' => 'Chờ xử lý',
                                'shipped' => '>Đã vận chuyển',
                                'confirmed' => '>Đã xác nhận',
                                'delivered' => 'Đã hoàn thành',
                                default => 'Đã hủy'
                            }; ?>" class="my-2 form-control" disabled="">
                        </div>
                        <div class=" form-group">
                            <label class="fw-bold">Phương thức thanh toán</label>
                            <input type="text" name="id" value="<?=
                                match ($oneOrder->paymen_method) {
                                    'cash_on_delivery' => "Thanh toán khi nhận hàng",
                                    'credit_card' => "Thẻ tín dụng",
                                    'paypal' => "PayPal",
                                    'zalopay' => "ZaloPay",
                                    'bank_transfer' => "Chuyển khoản ngân hàng",
                                    default => "Lỗi"
                                } ?>" class="my-2 form-control" disabled="">
                        </div>
                        <div class=" form-group">
                            <label class="fw-bold">Ngày hoàn thành</label>
                            <input type="text" name="id" value="<?= $oneOrder->confirmed_at ?>"
                                class="my-2 form-control" disabled="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group shadow-sm p-3 mb-5 bg-white rounded">
                            <?php
                            foreach ($oneOrder->order_items as $key):
                                $tong += $key['total'];
                                ?>
                                <div>
                                    <div class="row align-items-center">
                                        <img class="col-auto" src="<?= $key['imageProduct'] ?>" alt="" style="width:110px">
                                        <p class="fs-5 col col-6"><?= $key['nameProduct'] ?></p>
                                        <div class="col col-4 text-end">
                                            <p class="fw-bold mb-1">
                                                <?= number_format($key['total']) . "₫" ?>
                                            </p>
                                            <p class="fw-bold mt-4">Số lượng: <?= $key['quantity'] ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <?php
                            endforeach;
                            ?>
                            <div class=" form-group">
                                <label class="fw-bold">Phí vận chuyển</label>
                                <input type="text" name="id" value="<?= number_format($oneOrder->shipping_fee) ?>"
                                    class="my-2 form-control" disabled="">
                            </div>
                            <div class=" form-group">
                                <label class="fw-bold">Tổng tiền</label>
                                <input type="text" name="id" value="<?= number_format($tong + $oneOrder->shipping_fee) ?>"
                                    class="my-2 form-control" disabled="">
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>