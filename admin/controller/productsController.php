<?php
class ProductsController
{
    public $productsController;
    public function __construct()
    {
        $this->productsController = new ProductsQuery();
    }
    public function __destruct()
    {
    }
    public function list()
    {

        $all = $this->productsController->all();
        include 'view/products/list.php';
    }
}
?>