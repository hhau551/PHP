<?php
require_once('../app/models/Category.php');

class HomeController {
  public function index() {
    $categories = Category::getAll();
  }
}
