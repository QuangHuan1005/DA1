<?php
class ProductsController
{
    public $productsController;
    public $CategoryController;
    public function __construct()
    {
        $this->productsController = new ProductsQuery();
        $this->CategoryController = new CategoryQuery();
    }
    public function __destruct()
    {
    }
    public function list()
    {
        if (!isset($_SESSION['role']) && $_SESSION['role'] !== "admin") {
            header('Location:?act=page-not-found');
            exit();
        }
        $all = $this->productsController->all();
        include 'view/products/list.php';
    }
    public function error()
    {
        header('Location:http://localhost:81/duan1/DA1/?act=error');
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
        }
        include 'view/products/update.php';
    }
}
?>