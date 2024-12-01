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

$query = "SELECT r.reviews_id, p.product_name, r.rating, r.comment, r.review_date 
          FROM reviews r
          JOIN product p ON r.product_id = p.product_id
          WHERE r.user_id = ? ORDER BY r.review_date DESC";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

echo "<div class='container mt-5'>";
echo "<h2 class='text-center'>Lịch Sử Đánh Giá Sản Phẩm</h2>";
echo "<table class='table'>";
echo "<thead><tr><th>#</th><th>Sản Phẩm</th><th>Đánh Giá</th><th>Ngày</th></tr></thead>";
echo "<tbody>";

if ($result->num_rows > 0) {
    $index = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $index++ . "</td>
                <td>" . htmlspecialchars($row['product_name']) . "</td>
                <td>" . htmlspecialchars($row['rating']) . " sao</td>
                <td>" . htmlspecialchars($row['review_date']) . "</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4' class='text-center'>Chưa có đánh giá nào</td></tr>";
}

echo "</tbody></table>";
echo "</div>";

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lịch Sử Đánh Giá</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
