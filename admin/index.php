<?php
require_once "../common/env.php";
require_once "../common/function.php";
require_once "model/category.php";
require_once "model/products.php";
require_once "model/categoryQuery.php";
require_once "model/productsQuery.php";
require_once "controller/categoryController.php";
require_once "controller/productsController.php";

$act = $_GET["act"] ?? "";
$id = $_GET["id"] ?? "";

match ($act) {
    '' => (new ProductsController())->list(),
    'list-pro' => (new ProductsController())->list(),
}
    ?>