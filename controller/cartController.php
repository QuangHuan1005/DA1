<?php
class CartController
{
    public $cartQuery;
    public $orderQuery;
    public function __construct()
    {
        $this->cartQuery = new cartQuery();
        $this->orderQuery = new orderQuery();

    }
    public function __destruct()
    {
    }
    public function cart($id)
    {
        $cart = $this->cartQuery->cart($id);
        $info = $this->cartQuery->infoCart($id);
        if (isset($_POST['order'])) {

            // echo "<pre>";
            // print_r($_POST);
            // echo "</pre>";
            $order = new Order();
            $order->user_id = $_POST['user_id'];
            $order->totalOrder = $_POST['total'];
            $order->payment_method = $_POST['payment'];
            if (empty($_POST['address'])) {
                $order->shipping_address = $_POST['delivery_method'];
            } else {
                $order->shipping_address = $_POST['address'];
            }
            $order->orderItem = [];
            foreach ($info->infoPro as $key) {
                $order->orderItem[] = [
                    'productId' => $key['productId'],
                    'quantityProduct' => $key['quantityProduct'],
                    'priceProduct' => $key['priceProduct'],
                ];
            }
            $order->cart_id = $info->cart_id;
            $order->numberPhone = $_POST['numberPhone'];
            // echo "<pre>";
            // print_r($order);
            // echo "</pre>";
            $data = $this->orderQuery->addOrder($order);
            if (!empty($data)) {
                header("Location:?act=thanhToan&id={$data}");
            }
        }

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