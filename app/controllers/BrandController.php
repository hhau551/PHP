<?php
require_once('../app/models/Brand.php');
class BrandController {
    public function index() {
        require_once('../app/views/brands/create.php');
    }

    public function showBrand() {
        $danhSachBrand = Brand::getAll();
        require_once('../app/views/brands/index.php');
    }

    function createBrand(){

        $brandname = $_POST['brandname'];

        $isSuccess = Brand::create($brandname);
        if($isSuccess)        
            header('Location: ?route=danh-sach-brand');
        else
            header('Location: ?route=failure');
        exit;

    }
    function editBrand(){
        $brandid = $_GET['brandid'];
        if(isset($brandid)){
            $brand = Brand::find($brandid);
            if(empty($brand)){
                header('Location: ?route=not-found');
                exit;
            }
            require_once('../app/views/brands/edit.php');
        }else{
            header('Location: ?route=not-found');
            exit;
        }       
    }

    function deleteBrand(){

        $brandid = $_GET['brandid'];

        $isSuccess = Brand::delete($brandid);
        if($isSuccess)        
            header('Location: ?route=danh-sach-brand');
        else 
            header('Location: ?route=failure');
        exit;

    }
}