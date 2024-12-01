<?php
$servername = "localhost";
$db_username = "root"; 
$db_password = ""; 
$dbname = "du_an_1";

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

session_start();

$user_id = $_SESSION['Users_id'];

$query = "SELECT * FROM users WHERE Users_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "Không tìm thấy thông tin người dùng.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nameAccount = $_POST['nameAccount'];
    $email = $_POST['email'];
    $NameUser = $_POST['NameUser'];
    $role = $_POST['role'];
    $lock_at = $_POST['lock_at'];

    $update_query = "UPDATE users SET nameAccount = ?, email = ?, NameUser = ?, role = ?, lock_at = ? WHERE Users_id = ?";
    $update_stmt = $conn->prepare($update_query);
    $update_stmt->bind_param("ssssii", $nameAccount, $email, $NameUser, $role, $lock_at, $user_id);

    if ($update_stmt->execute()) {
        echo "Thông tin đã được cập nhật.";
    } else {
        echo "Có lỗi xảy ra khi cập nhật thông tin.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh Sửa Thông Tin Người Dùng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Chỉnh Sửa Thông Tin Người Dùng</h2>
    <div class="card">
        <div class="card-header bg-primary text-white">Thông Tin Người Dùng</div>
        <div class="card-body">
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="nameAccount" class="form-label">Tên Tài Khoản</label>
                    <input type="text" class="form-control" id="nameAccount" name="nameAccount" value="<?php echo htmlspecialchars($user['nameAccount']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="NameUser" class="form-label">Tên Người Dùng</label>
                    <input type="text" class="form-control" id="NameUser" name="NameUser" value="<?php echo htmlspecialchars($user['NameUser']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Vai Trò</label>
                    <select class="form-control" id="role" name="role">
                        <option value="admin" <?php echo $user['role'] == 'admin' ? 'selected' : ''; ?>>Quản trị viên</option>
                        <option value="client" <?php echo $user['role'] == 'client' ? 'selected' : ''; ?>>Khách hàng</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="lock_at" class="form-label">Trạng Thái</label>
                    <select class="form-control" id="lock_at" name="lock_at">
                        <option value="0" <?php echo $user['lock_at'] == 0 ? 'selected' : ''; ?>>Hoạt động</option>
                        <option value="1" <?php echo $user['lock_at'] == 1 ? 'selected' : ''; ?>>Đã khóa</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Cập Nhật</button>
                <a href="dashboard.php" class="btn btn-secondary">Quay Lại</a>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
