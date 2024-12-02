<?php
class CartController
{
    public $cartQuery;
    public function __construct()
    {
        $this->cartQuery = new cartQuery();
    }
    public function __destruct()
    {
    }
    public function cart($id)
    {
        include "view/trangChu/cart.php";
    }
}