<?php
class ProductsController
{
    public $productsController;
    public function __construct()
    {

    }
    public function __destruct()
    {
    }
    public function list()
    {
        include 'view/products/list.php';
    }
}
?>