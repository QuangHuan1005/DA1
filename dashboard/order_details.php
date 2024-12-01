<?php
session_start();

$servername = "localhost";
$db_username = "root"; 
$db_password = ""; 
$dbname = "du_an_1";

$conn = new mysqli($servername, $db_username, $db_password, $dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
if (!isset($_GET['orders_id'])) {
    die("Không tìm thấy mã đơn hàng.");
}
$order_id = $_GET['orders_id'];
$order_query = "SELECT o.orders_id, o.orders_date, o.status, o.total_amount, o.payment_method, 
                        o.shipping_address, u.NameUser, u.email, u.phone 
                 FROM orders o
                 JOIN users u ON o.user_id = u.Users_id
                 WHERE o.orders_id = ?";

$stmt_order = $conn->prepare($order_query);
if (!$stmt_order) {
    die("Lỗi chuẩn bị truy vấn: " . $conn->error);
}

$stmt_order->bind_param("i", $order_id);
$stmt_order->execute();
$order_result = $stmt_order->get_result();
$order = $order_result->fetch_assoc();

$items_query = "SELECT p.product_name, oi.quantity, p.color, p.storage_capacity, p.price 
                FROM order_items oi
                JOIN product p ON oi.product_id = p.product_id
                WHERE oi.order_id = ?";

$stmt_items = $conn->prepare($items_query);
if (!$stmt_items) {
    die("Lỗi chuẩn bị truy vấn: " . $conn->error);
}

$stmt_items->bind_param("i", $order_id);
$stmt_items->execute();
$items_result = $stmt_items->get_result();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Đơn Hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .order-detail {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        .order-detail h2 {
            font-size: 28px;
            color: #343a40;
        }
        .order-detail p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 10px;
        }
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }
        .table th {
            background-color: #007bff;
            color: white;
        }
        .total-amount {
            font-size: 20px;
            color: #28a745;
            font-weight: bold;
        }
        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .btn-container .btn {
            width: 48%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="order-detail">
            <h2 class="text-center">Chi Tiết Đơn Hàng</h2>
            <div>
                <p><strong>Mã đơn hàng:</strong> <?php echo htmlspecialchars($order['orders_id']); ?></p>
                <p><strong>Ngày đặt hàng:</strong> <?php echo htmlspecialchars($order['orders_date']); ?></p>
                <p><strong>Tình trạng:</strong> <?php echo htmlspecialchars($order['status']); ?></p>
                <p><strong>Phương thức thanh toán:</strong> <?php echo htmlspecialchars($order['payment_method']); ?></p>
                <p><strong>Tổng số tiền:</strong> <?php echo number_format($order['total_amount'], 0, ',', '.') . "₫"; ?></p>
                <p><strong>Tình trạng thanh toán:</strong> Đang chờ xử lý</p>
                <p><strong>Địa chỉ nhận hàng:</strong> <?php echo htmlspecialchars($order['shipping_address']); ?></p>
                <p><strong>Khách hàng:</strong> <?php echo htmlspecialchars($order['NameUser']); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($order['email'] ?? ''); ?></p>
                <p><strong>Số điện thoại:</strong> <?php echo htmlspecialchars($order['phone'] ?? ''); ?></p>
            </div>

            <h4 class="mt-4 text-center">Danh Sách Sản Phẩm</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Màu sắc</th>
                        <th>Dung lượng</th>
                        <th>Giá</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $index = 1;
                    while ($item = $items_result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $index++ . "</td>
                                <td>" . htmlspecialchars($item['product_name']) . "</td>
                                <td>" . htmlspecialchars($item['quantity']) . "</td>
                                <td>" . htmlspecialchars($item['color']) . "</td>
                                <td>" . htmlspecialchars($item['storage_capacity']) . "GB</td>
                                <td>" . number_format($item['price'], 0, ',', '.') . "₫</td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>

            <!-- Tổng số tiền -->
            <div class="text-center total-amount">
                <p><strong>Tổng số tiền đã đặt hàng:</strong></p>
                <p><?php echo number_format($order['total_amount'], 0, ',', '.') . "₫"; ?></p>
            </div>

            <!-- Nút điều hướng -->
            <div class="btn-container">
                <a href="orders.php" class="btn btn-secondary">Quay Lại</a>
                <a href="shop.php" class="btn btn-primary">Tiếp Tục Mua Sắm</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
