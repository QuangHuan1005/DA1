<?php
session_start();

// Kiểm tra nếu người dùng đã đăng nhập và có vai trò là admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    // Nếu không phải admin hoặc chưa đăng nhập, chuyển hướng về trang login
    header('Location: ?act=login');
    exit;
}

// Tiếp tục với việc hiển thị nội dung trang quản trị admin
?>

<!-- Nội dung trang quản trị admin -->
<h1>Chào mừng Admin</h1>
<!-- Các nội dung khác của trang quản trị admin -->
