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

    echo "<div class='container mt-5'>";
    echo "<h2 class='text-center'>Thông Tin Người Dùng</h2>";
    echo "<div class='card'>";
    echo "<div class='card-header bg-primary text-white'>Chi Tiết</div>";
    echo "<div class='card-body'>";
    
    echo "<p><strong>ID Người Dùng:</strong> " . htmlspecialchars($user['Users_id']) . "</p>";
    echo "<p><strong>Tên Tài Khoản:</strong> " . htmlspecialchars($user['nameAccount']) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($user['email']) . "</p>";
    echo "<p><strong>Tên Người Dùng:</strong> " . htmlspecialchars($user['NameUser']) . "</p>";
    echo "<p><strong>Vai Trò:</strong> " . ($user['role'] === 'admin' ? 'Quản trị viên' : 'Khách hàng') . "</p>";
    echo "<p><strong>Trạng Thái:</strong> " . ($user['lock_at'] == 1 ? 'Đã khóa' : 'Hoạt động') . "</p>";
    echo "</div></div>";
    echo "<div class='mt-3 text-center'>";
    echo "<a href='edit_user_info.php' class='btn btn-warning'>Chỉnh Sửa</a>";
    echo "</div></div>";
} else {
    echo "Không tìm thấy thông tin người dùng.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Người Dùng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
