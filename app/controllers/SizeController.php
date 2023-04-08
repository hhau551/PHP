<?php
require_once('../app/models/Size.php');
class SizeController {
    public function index() {
        require_once('../app/views/size/create.php');
    }

    public function showSize() {
        $danhSachSize = Size::getAll();
        require_once('../app/views/size/index.php');
    }

    function createSize(){
        $size = $_POST['size'];

        $isSuccess = Size::create($size);
        if($isSuccess)        
            header('Location: ?route=danh-sach-size');
        else 
            header('Location: ?route=failure');
        exit;       

    }

    function editSize(){
        $sizeid = $_GET['sizeid'];
        if(isset($sizeid)){
            $size = Size::find($sizeid);
            if(empty($size)){
                header('Location: ?route=not-found');
                exit;
            }
            require_once('../app/views/size/edit.php');
        }else{
            header('Location: ?route=not-found');
            exit;
        }       
    }

    function deleteSize(){

        $sizeid = $_GET['sizeid'];

        $isSuccess = Size::delete($sizeid);
        if($isSuccess)        
            header('Location: ?route=danh-sach-size');
        else 
            header('Location: ?route=failure');
        exit;

    }
}