<?php
class ProductsController
{
    public $productsController;
    public $CategoryController;
    public $reviewscontroller;
    public $cartController;
    public function __construct()
    {
        $this->productsController = new ProductsQuery();
        $this->CategoryController = new CategoryQuery();
        $this->reviewscontroller = new ReviewQuery();
        $this->cartController = new cartQuery();
    }
    public function __destruct()
    {
    }
    public function list()
    {

        $all = $this->productsController->all();
        include 'view/trangChu/sanPham.php';


    }
    public function pk()
    {

        $all = $this->productsController->pk();
        include 'view/trangChu/phuKien.php';


    }
    public function old()
    {

        $all = $this->productsController->old();
        include 'view/trangChu/mayCu.php';
    }
    public function createProduct()
    {
        $all = $this->CategoryController->all();
        $loi = "";
        $thanhcong = "";
        if (isset($_POST['addPro'])) {
            $product = new Products();
            $product->product_name = $_POST['name'];
            $product->category_id = $_POST['category'];
            $product->description = $_POST['description'];
            $product->storage_capacity = $_POST['storage'];
            $product->color = $_POST['color'];
            $product->stock_quantity = $_POST['quantity'];
            $product->price = $_POST['price'];
            if ($product->product_name === "" || $product->price === "" || $product->stock_quantity === "" || empty($_FILES['file_image']['name'])) {
                $loi = '<div class="alert alert-danger" role="alert">Vui lòng nhập đầy đủ thông tin!</div>';
            }
            if (isset($_FILES["file_image"]) && $_FILES["file_image"]["tmp_name"] !== "") {
                $vi_tri_luu = "../upload/" . $_FILES["file_image"]["name"];
                if (move_uploaded_file($_FILES["file_image"]["tmp_name"], $vi_tri_luu)) {
                    $product->image = "../upload/" . $_FILES['file_image']['name'];
                }
            }
            if ($loi === "") {
                $data = $this->productsController->createProduct($product);
                if ($data === "ok") {
                    $product = new Products();
                    $thanhcong = '<div class="alert alert-danger" role="alert">Thêm Thành Công</div>';
                }
            }

        }

        include 'view/products/create.php';
    }
    public function deletePro($id)
    {
        if ($id !== "") {
            $data = $this->productsController->deleteProduct($id);
            if ($data === "ok") {
                header('Location:?act=list-pro');
            }
        }
    }
    public function editPro($id)
    {
        if ($id !== "") {
            $all_category = $this->CategoryController->all();
            $all = $this->productsController->findProduct($id);
            $loi = "";
            $thanhcong = "";
            if (isset($_POST['editPro'])) {
                $all->product_name = $_POST['name'];
                $all->category_id = $_POST['category'];
                $all->description = $_POST['description'];
                $all->storage_capacity = $_POST['storage'];
                $all->color = $_POST['color'];
                $all->stock_quantity = $_POST['quantity'];
                $all->price = $_POST['price'];
                if (isset($_FILES["file_image"]) && $_FILES["file_image"]["tmp_name"] !== "") {
                    $vi_tri_luu = "../upload/" . $_FILES["file_image"]["name"];
                    if (move_uploaded_file($_FILES["file_image"]["tmp_name"], $vi_tri_luu)) {
                        $all->image = "../upload/" . $_FILES['file_image']['name'];
                    }
                }
                if ($loi === "") {
                    $data = $this->productsController->updateProduct($all);
                    if ($data === "ok") {
                        $thanhcong = '<div class="alert alert-danger" role="alert">Sửa Thành Công</div>';
                    } else {
                        $loi = '<div class="alert alert-danger" role="alert">Sửa Thất Bại</div>';
                    }
                }

            }
            # code...
        }
        include 'view/products/update.php';
    }
    public function chiTiet($id)
    {
        if ($id == "") {
            echo "Không tìm thấy ID sản phẩm.";
        } else {

            $sp = $this->productsController->findProduct($id); // Lấy thông tin sản phẩm
            $all = $this->productsController->productRCM($sp); // Lấy tất cả sản phẩm
            $all_bl = $this->reviewscontroller->all(); // Lấy danh sách đánh giá
            $loi = "";
            $thanhcong = "";
            $loiadd = "";

            if (isset($_POST['add'])) { // Xử lý thêm bình luận
                $review = new Reviews();
                $review->product_id = $id; // Gắn ID sản phẩm
                $review->username = $_POST['username'];
                $review->rating = $_POST['rating'];
                $review->comment = $_POST['comment'];

                //lay userid tu session
                $review->user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
                // Kiểm tra dữ liệu đầu vào
                if ($review->username === "" || $review->rating === "" || $review->comment === "") {
                    $loi = '<div class="alert alert-danger" role="alert">Vui lòng điền đầy đủ thông tin!</div>';
                } else {
                    $result = $this->reviewscontroller->add($review); // Gọi phương thức add
                    if ($result === "ok") {
                        $thanhcong = '<div class="alert alert-success" role="alert">Đánh giá thành công!</div>';
                        header("Location: " . $_SERVER['PHP_SELF'] . "?act=chiTiet&id=" . $id);
                    } else {
                        $loi = '<div class="alert alert-danger" role="alert">Thêm đánh giá thất bại.</div>';
                    }
                }
            }
            $user_id = $_SESSION['Users_id'] ?? null;
            if (isset($_POST['cart'])) {
                if (empty($user_id)) {
                    $loiadd = '<div class="alert1">Đăng nhập để mua hàng.</div>';
                } else {
                    $cart = $this->cartController->cart($user_id);
                    $infoCart = $this->cartController->infoCart($user_id);
                    $check = false;
                    $quantity = 0;
                    if (!empty($infoCart->infoPro)) {
                        foreach ($infoCart->infoPro as $key) {
                            if ($id == $key['productId']) {
                                $check = true;
                                $quantity = $key['quantityProduct'];
                                break;
                            }
                        }
                    }
                    if (!$check) {
                        $res = $this->cartController->addItems($cart['carts_id'], $id, $_POST['quantity']);
                        if ($res = "ok") {
                            $loiadd = '<div class="alert1">Đã thêm vào giỏ hàng.</div>';
                        }
                    } else {
                        $res = $this->cartController->updateQuantity($quantity + $_POST['quantity'], $id, $cart['carts_id']);
                        $loiadd = '<div class="alert1">Đã thêm vào giỏ hàng.</div>';
                    }
                }
            }
            include 'view/trangChu/chiTietSP.php';
        }
    }

}
?>