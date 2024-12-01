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

$sql = "SELECT * FROM adddresses";
$stmt = $pdo->query($sql);
$adddresses = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    if (!empty($id) && is_numeric($id)) {
        try {
            $sql = "DELETE FROM adddresses WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);

            header("Location: index.php");
            exit;
        } catch (PDOException $e) {
            $message = "Lỗi khi xóa địa chỉ: " . $e->getMessage();
        }
    } else {
        $message = "ID không hợp lệ!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Địa Chỉ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function confirmDelete(id) {
            if (confirm("Bạn có chắc chắn muốn xóa địa chỉ này không?")) {
                window.location.href = "?delete=" + id;
            }
        }
    </script>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Danh Sách Địa Chỉ Nhận Hàng</h2>

        <?php if (isset($message)): ?>
            <div class="alert alert-danger"><?php echo $message; ?></div>
        <?php endif; ?>

        <h4 class="mt-4">Danh Sách Địa Chỉ:</h4>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Họ Tên</th>
                    <th>Số Điện Thoại</th>
                    <th>Địa Chỉ</th>
                    <th>Thành Phố</th>
                    <th>Trạng Thái Mặc Định</th>
                    <th>Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($adddresses as $adddress): ?>
                    <tr>
                        <td><?php echo $adddress['id']; ?></td>
                        <td><?php echo $adddress['full_name']; ?></td>
                        <td><?php echo $adddress['phone']; ?></td>
                        <td><?php echo $adddress['adddress']; ?></td>
                        <td><?php echo $adddress['city']; ?></td>
                        <td><?php echo $adddress['is_default'] ? 'Mặc Định' : 'Không Mặc Định'; ?></td>
                        <td>
                            <a href="edit_address.php?edit=<?php echo $adddress['id']; ?>" class="btn btn-warning btn-sm">Sửa</a>
                            <button onclick="confirmDelete(<?php echo $adddress['id']; ?>)" class="btn btn-danger btn-sm">Xóa</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="text-center mt-4">
            <a href="add_address.php" class="btn btn-success">Thêm Địa Chỉ</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
