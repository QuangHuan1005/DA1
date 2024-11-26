<?php
class Order
{
    public $order_id;
    public $user_id;
    public $order_date;
    public $status;
    public $totalOrder;
    public $paymen_method;
    public $shipping_address;
    public $shipping_fee;
    public $numberPhone;
    public $confirmed_at;
    public $nameUser;
    public $order_items;
}
class Order_item
{
    public $order_item_id;
    public $order_id;
    public $product_id;
    public $quantity;
    public $price;
    public $total;
}