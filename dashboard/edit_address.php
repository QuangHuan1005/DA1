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
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $sql = "UPDATE adddresses SET full_name = ?, phone = ?, city = ?, adddress = ?, is_default = ? WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$full_name, $phone, $city, $adddress, 1, $_POST['id']]);
            $message = "Địa chỉ đã được cập nhật thành công!";
        } else {
            $sql = "INSERT INTO adddresses (users_id, full_name, phone, city, adddress, is_default) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([1, $full_name, $phone, $city, $adddress, 1]);
            $message = "Địa chỉ đã được lưu thành công!";
        }
    } catch (PDOException $e) {
        $message = "Lỗi khi thao tác với cơ sở dữ liệu: " . $e->getMessage();
    }
}

$editData = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $sql = "SELECT * FROM adddresses WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $editData = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$editData) {
        $message = "Không tìm thấy địa chỉ để chỉnh sửa.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh Sửa Địa Chỉ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Chỉnh Sửa Địa Chỉ Nhận Hàng</h2>

        <?php if (isset($message)) { ?>
            <div class="alert alert-info"><?php echo $message; ?></div>
        <?php } ?>

        <?php if ($editData): ?>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $editData['id']; ?>">
                <div class="mb-3">
                    <label for="full_name" class="form-label">Họ Tên:</label>
                    <input type="text" name="full_name" id="full_name" class="form-control" value="<?php echo $editData['full_name'] ?? ''; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Số Điện Thoại:</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $editData['phone'] ?? ''; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="adddress" class="form-label">Địa Chỉ:</label>
                    <input type="text" name="adddress" id="adddress" class="form-control" value="<?php echo $editData['adddress'] ?? ''; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">Thành Phố:</label>
                    <input type="text" name="city" id="city" class="form-control" value="<?php echo $editData['city'] ?? ''; ?>" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary"><?php echo $editData ? "Cập Nhật Địa Chỉ" : "Thêm Địa Chỉ"; ?></button>
                    <a href="dashboard.php" class="btn btn-secondary">Quay Lại</a>
                </div>
            </form>
        <?php else: ?>
            <p>Không có dữ liệu địa chỉ để chỉnh sửa.</p>
        <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
