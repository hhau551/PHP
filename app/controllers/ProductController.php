<?php
require_once('../app/models/Product.php');
require_once('../app/models/Size.php');
require_once('../app/models/Color.php');
class ProductController {
    public function index() {
        require_once('../app/views/product/create.php');
    }

    public function showProduct() {
        $danhSachProduct = Product::getAll();
        $danhSachSize = Size::getAll();
        $danhSachColor = Color::getAll();
        require_once('../app/views/product/index.php');
    }

    function createProduct(){
        $isUploaded = $this->uploadImageFile();
            if($isUploaded == 1){
                $ProductName = $_POST['ProductName'];
                $Price = $_POST['Price'];
                $Sale = $_POST['Sale'];
                $image = htmlspecialchars( basename( $_FILES["image"]["name"]));
                $BrandID = $_POST['BrandID'];
                $SizeID = $_POST['SizeID'];
                $ColorID = $_POST['ColorID'];
                $Description = $_POST['Description'];

                $isSuccess = Product::create($ProductName, $Price, $Sale, $image, $BrandID, $SizeID, $ColorID, $Description);
                if($isSuccess) {
                    header('Location: ?route=danh-sach-product');
                }                           
                else 
                    header('Location: ?route=failure');
                exit;
            }
            else{
                die("Server's Error");
            }       

    }

    function editProduct(){
        $productid = $_GET['productid'];
        if(isset($productid)){
            $product = Product::find($productid);
            if(empty($product)){
                header('Location: ?route=not-found');
                exit;
            }
            require_once('../app/views/product/edit.php');
        }else{
            header('Location: ?route=not-found');
            exit;
        }       
    }

    function deleteProduct(){
        $productid = $_GET['productid'];

        $isSuccess = Product::delete($productid);
        if($isSuccess)        
            header('Location: ?route=danh-sach-product');
        else 
            header('Location: ?route=failure');
        exit;

    }

    public function uploadImageFile(){
        $target_dir = "../root/images/Product/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["image"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            return 1;
        } else {
            return 0;
            }
        }

    }

    function addCart(){
        session_start();
        if(isset($_GET['productid'])){
            $productid = $_GET['productid'];
            $product = Product::find($productid);

            if(!empty($_SESSION['cart'])){
                $acol = array_column($_SESSION['cart'], 'productid');
                if(in_array($productid, $acol)){
                    $_SESSION['cart'][$productid]['soluong'] += 1;                    
                } else {
                    $item = [
                        'productid' => $_GET['productid'],
                        'image' => $product['Image'],
                        'productname' => $product['ProductName'],
                        'size' => $product['SizeID'],
                        'color' => $product['ColorID'],
                        'soluong' => 1,
                        'price' => $product['Price'],
                        'sale' => $product['Sale']                    
                    ];
                    $_SESSION['cart'][$productid] = $item;
                }
            } else {
                $item=[
                    'productid' => $_GET['productid'],
                    'image' => $product['Image'],
                    'productname' => $product['ProductName'],
                    'size' => $product['SizeID'],
                    'color' => $product['ColorID'],
                    'soluong' => 1,
                    'price' => $product['Price'],
                    'sale' => $product['Sale'] 
                ];
                $_SESSION['cart'][$productid] = $item;
            }
            header("Location: ?route=view-cart");
            exit;
        } else {
            header("Locaton: ?route=error");
            exit;
        }
    }

    function viewCart(){
        $danhSachProduct = Product::getAll();
        require_once('../app/views/home/cart.php');
    }
}