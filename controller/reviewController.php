<?php
class ReviewsController
{
    public $reviewscontroller;
    public $productsController;
    public function __construct()
    {
        $this->productsController = new ProductsQuery();
        $this->reviewscontroller = new ReviewQuery();
    }
    public function __destruct()
    {
    }
    public function list()
    {
        $all_bl = $this->reviewscontroller->all();

        include "view/trangChu/chiTietSP.php";

    }
    public function add()
    {

        $loi = "";
        $thanhcong = "";
        if (isset($_POST['add'])) {
            var_dump($_POST);
            $bl = new Reviews();
            $bl->product_id = trim($_POST['product_id']);
            $bl->user_id = trim($_POST['username']);
            $bl->rating = trim($_POST['rating']);
            $bl->comment = trim($_POST['comment']);
            $bl->review_date = trim($_POST['review_date']);
            $bl->username = trim($_POST['username']);
            if ($bl->rating === "" || $bl->comment === "" || $bl->rating <= 0 || $bl->rating > 5 || $bl->username === "") {
                $loi = "sai thong tin hoac thieu thong tin";
            }
            if ($loi === "") {
                $data = $this->reviewscontroller->add($bl);

                if ($data === "ok") {

                    $thanhcong = "Đã đăng";
                    $bl = new Reviews();
                } else {
                    $loi = "da xay ra loi";
                }
            }
        }
        include "view/trangChu/chiTietSP.php";
    }

}
?>