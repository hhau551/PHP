<?php
require_once('../app/models/Brand.php');
class BrandController {
    public function index() {
        require_once('../app/views/brands/create.php');
    }

    // hien thi danh sach Brand
    public function showBrand() {
        $danhSachBrand = Brand::getAll();
        require_once('../app/views/brands/index.php');
    }

    function createBrand(){

        $brandname = $_POST['brandname'];

        $isSuccess = Brand::create($brandname);
        if($isSuccess)        
            // Redirect to homepage
            header('Location: ?route=danh-sach-brand');
        else
            header('Location: ?route=failure');
        exit;

    }

    function deleteBrand(){

        $brandid = $_GET['brandid'];

        $isSuccess = Brand::delete($brandid);
        if($isSuccess)        
            // Redirect to homepage
            header('Location: ?route=danh-sach-brand');
        else 
            header('Location: ?route=failure');
        exit;

    }
}