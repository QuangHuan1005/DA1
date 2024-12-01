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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if ($new_password === $confirm_password) {
        $query = $conn->prepare("SELECT password FROM users WHERE Users_id = ?");
        $query->bind_param("i", $user_id);
        $query->execute();
        $user = $query->get_result()->fetch_assoc();

        if ($user['password'] === $old_password) {
            $update_query = $conn->prepare("UPDATE users SET password = ? WHERE Users_id = ?");
            $update_query->bind_param("si", $new_password, $user_id);
            $update_query->execute();
            $message = "Đổi mật khẩu thành công!";
        } else {
            $message = "Mật khẩu cũ không đúng.";
        }
    } else {
        $message = "Mật khẩu mới và xác nhận không khớp.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đổi Mật Khẩu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Đổi Mật Khẩu</h2>
        <?php if (isset($message)) { echo "<div class='alert alert-info'>$message</div>"; } ?>
        <form method="POST">
            <div class="mb-3">
                <label for="old_password" class="form-label">Mật Khẩu Cũ:</label>
                <input type="password" id="old_password" name="old_password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="new_password" class="form-label">Mật Khẩu Mới:</label>
                <input type="password" id="new_password" name="new_password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Xác Nhận Mật Khẩu:</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
