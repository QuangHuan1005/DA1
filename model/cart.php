<?php
class Cart
{
    public $cart_id;
    public $user_id;
}
class Cart_items
{
    public $cart_items_id;
    public $cart_id;
    public $product_id;
    public $quantity;
    public $price;
}