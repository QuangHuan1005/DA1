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
$id = $_GET["id"] ?? null;

match ($act) {
    '' => (new CategoryController())->list(),
    'list-pro' => (new ProductsController())->list(),
    'list-category' => (new CategoryController())->list(),
    'create-pro' => (new ProductsController())->createProduct(),
    'create-category' =>(new CategoryController())->createCategory(),
    'delete-category' => (new CategoryController())->delete($id),
    'update-category' =>(new CategoryController()) ->updateCategory($id),
}
    ?>