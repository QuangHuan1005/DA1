<?php
class CategoryController
{
    public $CategoryController;
    public function __construct()
    {
        $this->CategoryController = new CategoryQuery();
    }
    public function __destruct()
    {
    }
    public function list()
    {

        $all = $this->CategoryController->all();
        include 'view/category/list.php';
    }
}
?>