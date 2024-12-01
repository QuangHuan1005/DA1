<?php
session_start();
$host = 'localhost';
$dbname = 'du_an_1';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Kết nối thất bại: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = $_POST['full_name'];
    $phone = $_POST['phone'];
    $adddress = $_POST['adddress'];
    $city = $_POST['city'];

    try {
        $sql = "INSERT INTO adddresses (users_id, full_name, phone, city, adddress, is_default) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([1, $full_name, $phone, $city, $adddress, 1]);
        $message = "Địa chỉ đã được lưu thành công!";
    } catch (PDOException $e) {
        $message = "Lỗi khi thao tác với cơ sở dữ liệu: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Địa Chỉ Mới</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Thêm Địa Chỉ Nhận Hàng</h2>

        <?php if (isset($message)) { ?>
            <div class="alert alert-info"><?php echo $message; ?></div>
        <?php } ?>

        <form method="POST">
            <div class="mb-3">
                <label for="full_name" class="form-label">Họ Tên:</label>
                <input type="text" name="full_name" id="full_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Số Điện Thoại:</label>
                <input type="text" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="adddress" class="form-label">Địa Chỉ:</label>
                <input type="text" name="adddress" id="adddress" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Thành Phố:</label>
                <input type="text" name="city" id="city" class="form-control" required>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Lưu Địa Chỉ</button>
                <a href="dashboard.php" class="btn btn-secondary">Quay Lại</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
