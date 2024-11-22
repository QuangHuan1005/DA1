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
    public function list(){
        $all =$this->reviewscontroller->all();
        include "/laragon/www/DA1/view/trangChu/chiTietSP.php";
    }
    public function add(){
        $all=$this->productsController->all();
        $loi="";
        $thanhcong="";
        if(isset($_POST['add'])){
            $bl=new Reviews();
            $bl->product_id=$_POST['product_id'];
            $bl->user_id=$_POST['user_id'];
            $bl->rating=$_POST['rating'];
            $bl->comment=$_POST['comment'];
            $bl->review_date=$_POST['review_date'];
            if($bl->rating=== "" || $bl->comment==="" || $bl->rating<=5 ||$bl->rating>0){
                $loi="sai thong tin hoac thieu thong tin";
            }
            if($loi===""){
                $data=$this->reviewscontroller->add($bl);
                if($data ==="ok"){
                    $bl=new Reviews();
                    $thanhcong="Đã đăng";
                }
            }
        }
    }
    
}
?>