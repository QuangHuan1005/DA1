<?php
class homecontroller
{
    public $loginquery;
    public $productQuery;
    public $newQuery;
    public function __construct()
    {
        $this->loginquery = new loginquery();
        $this->newQuery = new NewsQuery();
        $this->productQuery = new ProductsQuery();
    }

    public function __destruct()
    {

    }
    public function home()
    {
        $list = $this->productQuery->top4Pro();
        $listNew = $this->newQuery->top3News();
        include "view/trangChu/trangChu.php";
    }
    public function error()
    {
        include "view/404.php";

    }
    public function login()
    {
        $kq = ""; // Khởi tạo thông báo

        // Kiểm tra nếu form được gửi
        if (isset($_POST['submit'])) {
            $input = new Account();
            $input->nameAccount = trim($_POST['username']);
            $input->password = trim($_POST['password']);

            // Kiểm tra nếu người dùng chưa nhập đủ thông tin
            if (empty($input->nameAccount) || empty($input->password)) {
                $kq = "Vui lòng nhập đủ thông tin";
            } else {
                // Kiểm tra đăng nhập
                $res = $this->loginquery->checklogin($input->nameAccount, $input->password);
                // Nếu đăng nhập thất bại
                if ($res === 0) {
                    $kq = "Mật khẩu hoặc tài khoản bị sai";
                } else {
                    // Nếu đăng nhập thành công, lưu thông tin vào session
                    $_SESSION['Users_id'] = $res->Users_id;
                    $_SESSION['username'] = $res->nameAccount;
                    $_SESSION['email'] = $res->email;
                    $_SESSION['role'] = $res->role;
                    $_SESSION['image'] = $res->image;
                    $_SESSION['name'] = $res->NameUser;
                    if ($res->role === 'admin') {
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
            $input->nameAccount = trim($_POST['username']);
            $input->email = trim($_POST['email']);
            $input->password = trim($_POST['password']);
            $input->NameUser = trim($_POST['NameUser']);
            $confirm_password = trim($_POST['confirm_password']);
            $data = $this->loginquery->checkAccount($input->nameAccount);
            // Kiểm tra xem mật khẩu và xác nhận mật khẩu có khớp không
            if (isset($_FILES["image"]) && $_FILES["image"]["tmp_name"] !== "") {
                $vi_tri_luu = "upload/" . $_FILES["image"]["name"];
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $vi_tri_luu)) {
                    $input->image = "upload/" . $_FILES["image"]["name"];
                }
            }
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
                if ($input->nameAccount === $data->nameAccount) {
                    $_SESSION['error'] = "Tên tài khoản đã tồn tài";
                }
            }
            // Thêm tài khoản mới vào cơ sở dữ liệu
        }
        // Hiển thị trang đăng ký
        include "view/login/register.php";
    }
    public function news_list()
    {
        $all_news = $this->newQuery->all_news();
        include "view/trangChu/news.php";
    }
    public function chiTietNews($id)
    {
        if ($id == "") {
            echo "Không tìm thấy ID sản phẩm.";
        } else {
            $new = $this->newQuery->findNews($id);

            include 'view/trangChu/chiTietNews.php';
        }
    }
    public function account()
    {
        include 'view/trangChu/dashboard.php';
    }
}
?>