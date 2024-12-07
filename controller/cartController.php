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
        $cart = $this->cartQuery->cart($id);
        $info = $this->cartQuery->infoCart($id);
        include "view/trangChu/gioHang.php";
    }
    public function deleteItem($user_id, $id)
    {
        if ($id !== "") {
            $data = $this->cartQuery->deleteItem($id);
            if ($data === "ok") {
                header("Location:?act=gioHang&id={$user_id}");
            }
        }
    }
}