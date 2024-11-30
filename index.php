<?php
session_start();
require "common/env.php";
require "common/function.php";
require "controller/homecontroller.php";
require "controller/productsController.php";
require "controller/categoryController.php";
require "model/accountQuery.php";
require "model/account.php";
require "model/products.php";
require "model/productsQuery.php";
require "model/category.php";
require "model/categoryQuery.php";
require "model/review.php";
require "model/reviewQuery.php";
require "model/news.php";
require "model/newsQuery.php";

// index.php
$act = $_GET["act"] ?? "";
$id = $_GET["id"] ?? "";

match ($act) {
  "" => (new homecontroller())->home(),
  "home" => (new homeController())->home(),
  "login" => (new homeController())->login(),
  "register" => (new homeController())->register(),
  "logout" => (new homeController())->logout(),
  "sanPham" => (new ProductsController())->list(),
  "chiTiet" => (new ProductsController())->chiTiet($id),
  "phuKien" => (new ProductsController())->pk(),
  "mayCu" => (new ProductsController())->old(),
  "tinTuc" => (new homecontroller()) ->news_list(),
  "chiTietNew" => (new homecontroller()) ->chiTietNews($id),
  default => (new homecontroller())->error(),
}
  ?>