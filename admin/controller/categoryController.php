<?php
class CategoryController
{
    private $categoryQuery;

    public function __construct()
    {
        // Khởi tạo đối tượng CategoryQuery để lấy dữ liệu từ DB
        $this->categoryQuery = new CategoryQuery();
    }

    public function list()
    {
        // Lấy tất cả danh mục từ CategoryQuery
        $allCategories = $this->categoryQuery->all();

        // Kiểm tra nếu dữ liệu tồn tại
        if ($allCategories) {
            // Truyền dữ liệu vào view
            include __DIR__ . '/../view/category/list.php';
        } else {
            // Nếu không có dữ liệu, hiển thị thông báo hoặc xử lý lỗi
            echo "Không có danh mục nào.";
        }
    }
    public function delete($category_id)
    {
        // Kiểm tra giá trị id trước khi xử lý logic
        if ($category_id !== "") {
            // 1. Gọi xuống model để thực hiện xóa dữ liệu trong CSDL
            $ketQua = $this->categoryQuery->delete($category_id);

            // 2. Kiểm tra kết quả xóa và điều hướng về trang danh sách
            if ($ketQua === "success") {
                // Điều hướng về danh sách
                header("Location: ?act=list-category");
            }

        } else {
            echo "<h1> Lỗi: Tham số id trống. Mời bạn kiểm tra tham số id trên đường dẫn url. </h1>";
        }
    }
    public function createCategory()
    {
        $cate = new Category();
        $thongBaoLoi = ""; // Hiển thị lỗi khi có
        $thongBaoThanhCong = ""; // Hiển thị thành khi có
       

        if(isset($_POST["submitForm"])){
            $cate->category_name=trim($_POST["category_name"]);
            $cate->description=trim($_POST["description"]);
        
        //Validate form
        if($cate->category_name==="" || $cate->description === ""){
            $thongBaoLoi = "Bạn phải nhập đầy đủ thông tin";
        }
        if ($thongBaoLoi === "" ) {
            
            $ketQua = $this->categoryQuery->insert($cate);

            
            if ($ketQua === "success") {
                // Hiển thị thông báo thành công
                $thongBaoThanhCong = "Tạo mới thành công. Mời bạn tiếp tục tạo mới hoặc quay lại danh sách.";

                // Reset form
                $cate = new Category();

            } else {
                // Hiển thị thông báo lỗi
                $thongBaoLoi = "Tạo mới thất bại. Mời bạn kiểm tra lỗi và thực hiện lại.";

            }



        }
    }
    include "/laragon/www/DA1/admin/view/category/create.php";
    }
    public function updateCategory($category_id)
    {
        if($category_id !==""){
            $cate=new Category();
            $thongBaoLoi = ""; // Hiển thị lỗi khi có
            $thongBaoThanhCong = ""; // Hiển thị thành khi có
            $cate=$this->categoryQuery->find($category_id);

            if(isset($_POST["submitForm"])){
                $cate->category_name=trim($_POST["category_name"]);
                $cate->description=trim($_POST["description"]);
            
            //Validate form
            if($cate->category_name==="" || $cate->description === ""){
                $thongBaoLoi = "Bạn phải nhập đầy đủ thông tin";
            }
            if ($thongBaoLoi === "" ) {
                
                $ketQua = $this->categoryQuery->update($category_id,$cate);
    
                
                if ($ketQua === "success") {
                    // Hiển thị thông báo thành công
                    $thongBaoThanhCong = "update thành công. Mời bạn tiếp tục  hoặc quay lại danh sách.";
    
                    // Reset form
                    $cate = new Category();
    
                } else {
                    // Hiển thị thông báo lỗi
                    $thongBaoLoi = "Update thất bại. Mời bạn kiểm tra lỗi và thực hiện lại.";
    
                }
        }
    }
    }
    include "/laragon/www/DA1/admin/view/category/update.php";
    }
}