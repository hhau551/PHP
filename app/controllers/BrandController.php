<?php
require_once('../app/models/Brand.php');
class BrandController {
    // hien thi danh sach Brand
    public function index() {
        require_once('../app/views/brand.php');
    }
    public function showBrand() {
        $danhBrand = Brand::getAll();
        require_once('../app/views/brand.php');
    }
}