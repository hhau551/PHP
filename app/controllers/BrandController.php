<?php
require_once('../app/models/Brand.php');
class BrandController {
    // hien thi danh sach Brand
    public function index() {
        require_once('../app/views/brands/brand.php');
    }
    public function showBrand() {
        $danhSachBrand = Brand::getAll();
        require_once('../app/views/brands/brand.php');
    }
}