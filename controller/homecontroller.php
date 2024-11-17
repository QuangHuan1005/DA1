<?php
class homecontroller
{
    public $loginquery;
    public function __construct()
    {
        $this->loginquery = new loginquery();
    }

    public function __destruct()
    {

    }
    public function home()
    {
        include "view/trangChu/trangChu.php";
    }
    public function login()
    {
        $kq = ""; // Khởi tạo thông báo

        // Kiểm tra nếu form được gửi
        if (isset($_POST['submit'])) {
            $input = new Account();
            $input->username = trim($_POST['username']);
            $input->password = trim($_POST['password']);

            // Kiểm tra nếu người dùng chưa nhập đủ thông tin
            if (empty($input->username) || empty($input->password)) {
                $kq = "Vui lòng nhập đủ thông tin";
            } else {
                // Kiểm tra đăng nhập
                $res = $this->loginquery->checklogin($input->username, $input->password);

                // Nếu đăng nhập thất bại
                if ($res === 0) {
                    $kq = "Mật khẩu hoặc tài khoản bị sai";
                } else {
                    // Nếu đăng nhập thành công, lưu thông tin vào session
                    $_SESSION['Users_id'] = $res->id;
                    $_SESSION['username'] = $res->username;
                    $_SESSION['email'] = $res->email;
                    $_SESSION['role'] = $res->role;
                    if ($res->role == "admin") {
                        header("Location:admin");
                    } else {
                        // Chuyển hướng đến trang home sau khi đăng nhập thành công
                        header("Location:?act=home");
                    }
                    exit;
                }
            }
        }

        // Truyền thông báo lỗi (hoặc thành công) vào view
        include "view/login/login.php";
    }


    public function logout()
    {
        if (isset($_SESSION['username'])) {
            session_destroy();
        }
        header("Location:?act=home");
    }
    public function register()
    {
        $input = new account();
        if (isset($_POST['submit'])) {
            // Lấy dữ liệu từ form
            $input->username = trim($_POST['username']);
            $input->email = trim($_POST['email']);
            $input->password = trim($_POST['password']);
            $confirm_password = trim($_POST['confirm_password']);
            $data = $this->loginquery->checkAccount($input->username);
            // Kiểm tra xem mật khẩu và xác nhận mật khẩu có khớp không
            if ($data === 0) {
                if ($input->password === $confirm_password) {
                    $result = $this->loginquery->createUser($input);
                    if ($result) {
                        $_SESSION['success'] = "Tạo tài khoản thành công! Bạn có thể đăng nhập ngay.";
                    } else {
                        $_SESSION['error'] = "Đã có lỗi xảy ra khi tạo tài khoản!";
                    }
                } else {
                    $_SESSION['error'] = "Mật khẩu và xác nhận mật khẩu không khớp!";
                }
            } else {
                if ($input->username === $data->username) {
                    $_SESSION['error'] = "Tên tài khoản đã tồn tài";
                }
            }
            // Thêm tài khoản mới vào cơ sở dữ liệu
        }
        // Hiển thị trang đăng ký
        include "view/login/register.php";
    }


}
?>