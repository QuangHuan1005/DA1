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

$user_id = $_SESSION['Users_id'];
$query = "SELECT o.orders_id, o.orders_date, o.status, o.total_amount, o.payment_method 
          FROM orders o
          WHERE o.user_id = ? 
          ORDER BY o.orders_date DESC";

$stmt = $conn->prepare($query);
if (!$stmt) {
    die("Lỗi chuẩn bị truy vấn: " . $conn->error);
}

$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Đơn Hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Danh Sách Đơn Hàng</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã Đơn Hàng</th>
                    <th>Ngày Đặt Hàng</th>
                    <th>Trạng Thái</th>
                    <th>Tổng Tiền</th>
                    <th>Phương Thức Thanh Toán</th>
                    <th>Chi Tiết</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    $index = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $index++ . "</td>
                                <td>" . htmlspecialchars($row['orders_id']) . "</td>
                                <td>" . htmlspecialchars($row['orders_date']) . "</td>
                                <td>" . htmlspecialchars($row['status']) . "</td>
                                <td>" . number_format($row['total_amount'], 0, ',', '.') . " VND</td>
                                <td>" . htmlspecialchars($row['payment_method']) . "</td>
                                <td>
                                    <a href='order_details.php?orders_id=" . $row['orders_id'] . "' class='btn btn-info btn-sm'>Xem Chi Tiết</a>
                                </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center'>Hiện tại bạn chưa có đơn hàng nào</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <div class="d-flex justify-content-between">
            <a href="shop.php" class="btn btn-primary">Tiếp Tục Mua Sắm</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
