<?php
session_start();
require "common/env.php";
require "common/function.php";
require "controller/homecontroller.php";
require "model/accountQuery.php";
require "model/account.php";


// index.php
$act = $_GET["act"] ?? "";
$id = $_GET["id"] ?? "";

match ($act) {
  "" => (new homeController())->home(),
  "home" => (new homeController())->home(),
  "login" => (new homeController())->login(),
  "register" => (new homeController())->register(),
  "logout" => (new homeController())->logout(),
}

  // switch ($act) {
//   case 'login':
//     (new HomeController())->login();
//     break;
//   case 'home':
//     if (!isset($_SESSION['username'])) {
//       header('Location: ?act=login');  // Chuyển hướng đến trang login nếu chưa đăng nhập
//       exit;
//     }
//     (new HomeController())->home();
//     break;
//   case 'logout':
//     (new HomeController())->logout();
//     break;
//   case 'register':

  //     (new HomeController())->register();
//     break;
//   case 'admin-dashboard':
//     // Kiểm tra quyền truy cập của admin trước khi cho phép vào trang quản trị
//     if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
//       include "/admin/index.php";
//     } else {
//       header('Location: ?act=home');  // Chuyển hướng đến trang chu nếu không phải admin
//     }
//     break;

  //   default:
//     // Redirect to an error page or home if no matching action found
//     header('Location: ?act=login');
//     break;
// }
  ?>