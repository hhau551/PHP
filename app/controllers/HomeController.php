<?php
require_once('../app/models/Product.php');
require_once('../app/models/Brand.php');
require_once('../app/models/Size.php');
require_once('../app/models/Color.php');
class HomeController {
  public function index() {
    $danhSachProduct = Product::getAll();
    require_once('../app/views/home/index.php');
  }

  public function indexAdmin() {
    require_once('../app/views/shares/layoutManager.php');
  }

  public function blog() {
    require_once('../app/views/home/blog.php');
  }

  public function contact() {
    require_once('../app/views/home/contact.php');
  }

  public function flashSale() {
    $danhSachProduct = Product::getAll();
    require_once('../app/views/home/flashSale.php');
  }
  
  public function infoMenu() {
    require_once('../app/views/home/infoMenu.php');
  }

  public function indexProduct() {
    $danhSachProduct = Product::getAll();
    require_once('../app/views/home/product.php');
  }

  public function detail() {
    $danhSachProduct = Product::getAll();
    $danhSachBrand = Brand::getAll();
    $danhSachSize = Size::getAll();
    $danhSachColor = Color::getAll();
    require_once('../app/views/home/detail.php');
  }
}
?>
