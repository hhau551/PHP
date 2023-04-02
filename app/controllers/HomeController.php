<?php
class HomeController {
  public function index() {
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
    require_once('../app/views/home/flashSale.php');
  }

  

  public function infoMenu() {
    require_once('../app/views/home/infoMenu.php');
  }
}
?>
