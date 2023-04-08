<?php
require_once('../app/models/Color.php');
class ColorController {
    public function index() {
        require_once('../app/views/color/create.php');
    }
 
    public function showColor() {
        $danhSachColor = Color::getAll();
        require_once('../app/views/color/index.php');
    }

    function createColor(){
        $color = $_POST['color'];

        $isSuccess = Color::create($color);
        if($isSuccess)        
            header('Location: ?route=danh-sach-color');
        else 
            header('Location: ?route=failure');
        exit;       

    }

    function editColor(){
        $colorid = $_GET['colorid'];
        if(isset($colorid)){
            $color = Color::find($colorid);
            if(empty($color)){
                header('Location: ?route=not-found');
                exit;
            }
            require_once('../app/views/color/edit.php');
        }else{
            header('Location: ?route=not-found');
            exit;
        }       
    }

    function deleteColor(){
        $colorid = $_GET['colorid'];

        $isSuccess = Color::delete($colorid);
        if($isSuccess)        
            header('Location: ?route=danh-sach-color');
        else 
            header('Location: ?route=failure');
        exit;

    }
}