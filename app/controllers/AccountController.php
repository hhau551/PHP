<?php
require_once('../app/models/Users.php');
class AccountController {
    public function index() {
        require_once('../app/views/admin/index.php');
    }

    public function showUser() {
        $danhSachUser = User::getAll();
        require_once('../app/views/user/index.php');
    }

    public function logout() {
        session_start();
        unset($_SESSION['UserId']);
        unset($_SESSION['Error']);
        unset($_SESSION['ImgUser']);
        header("Location: ?route=login");
        exit;
    }
    public function login() {
        if($_SERVER['REQUEST_METHOD']=="POST"){
            session_start();
            $userName = $_POST['UserName'];
            $pass = $_POST['Password'];

            if(empty($userName) || empty($pass)){
                $_SESSION['Error'] = "Vui long nhap day du thong tin!";
                header('Location: ?route=login');
                exit;
            }
            $user = User::find($userName);          
            
            if(!empty($user)){
                $isSuccess = password_verify($pass, $user['Password']);
                if($isSuccess && $user['Role'] == "User")
                {
                    $_SESSION['UserId'] = $user['UserID'];
                    $_SESSION['ImgUser'] = $user['ImgUser'];
                    $_SESSION['FullName'] = $user['FullName'];
                    $_SESSION['Email'] = $user['Email'];
                    $_SESSION['PhoneNumber'] = $user['PhoneNumber'];
                    $_SESSION['Address'] = $user['Address'];
                    header('Location: ?');
                }      
                    
                else
                {
                    $_SESSION['Error'] ="Tai khoan khong chinh xac";
                    header('Location: ?route=login');
                }
                exit;
            }
            else 
                {
                    $_SESSION['Error'] ="Tai khoan khong chinh xac";
                    header('Location: ?route=login');
                    exit;
                }
        }
        require_once('../app/views/home/login.php');
    }

    public function loginAdmin() {
        if($_SERVER['REQUEST_METHOD']=="POST"){
            session_start();
            $userName = $_POST['UserName'];
            $pass = $_POST['Password'];
            
            if(empty($userName) || empty($pass)){
                $_SESSION['Error'] = "Vui long nhap day du thong tin!";
                header('Location: ?');
                exit;
            }
            $user = User::find($userName);
            if(!empty($user)){
                $isSuccess = password_verify($pass, $user['Password']);
                if($isSuccess && $user['Role'] == "Admin")
                {
                        header('Location: ?route=index');

                }      
                    
                else 
                {
                    $_SESSION['Error'] ="Mat khau khong chinh xac";
                    header('Location: ?');
                }
                exit;
            }
            else 
                {
                    $_SESSION['Error'] ="Tai khoan khong chinh xac";
                    header('Location: ?');
                    exit;
                }
        }
        require_once('../app/views/admin/login.php');   
    }

    public function register() {
        if($_SERVER['REQUEST_METHOD']=="POST"){
            session_start();
            $userName = $_POST['UserName']; 
            $fullName = $_POST['FullName'];
            $gender = $_POST['Gender'];
            $phoneNumber = $_POST['PhoneNumber'];
            $email = $_POST['Email'];
            $address = $_POST['Address'];
            $dob = $_POST['DOB'];
            $pass = $_POST['Password'];
            $confirmPass = $_POST['ConfirmPassword'];

            if($pass != $confirmPass){
                $_SESSION['Error'] = "Mat khau va xac nhan mat khau khong giong nhau!";
                
                header('Location: ?route=register');
                exit;
            }
            $hashPass = password_hash($pass, PASSWORD_BCRYPT);
            $isSuccess = User::create($userName, $fullName, $gender, $phoneNumber, $email, $address, $dob, $hashPass);
            if($isSuccess)
            {
                header('Location: ?route=login');
            }      
                
            else 
            {
                $_SESSION['Error'] ="Loi tao tai khoan";
                header('Location: ?route=failure');
            }
                
            exit;            
        }
        require_once('../app/views/home/register.php');
    }

    public function editInfo(){
        
        if($_SERVER['REQUEST_METHOD']=="POST"){
            //upload file
            $isUploaded = $this->uploadImageFile();
            if($isUploaded == 1){
                $avatar = htmlspecialchars( basename( $_FILES["avatar"]["name"]));
                session_start();
                $userId = $_SESSION['UserId'];
                $userName = $_SESSION['UserName'];
                $fullName = $_SESSION['FullName'];
                $gender = $_SESSION['Gender'];
                $dob = $_SESSION['DOB'];
                $email = $_SESSION['Email'];
                $phoneNumber = $_SESSION['PhoneNumber'];
                $address = $_SESSION['Address'];

                $isSuccess = User::editInfo($userId, $userName, $fullName, $gender, $email, $avatar, $phoneNumber, $address, $dob);
                if($isSuccess){
                    $_SESSION['ImgUser'] = $avatar;
                    $fullName = $_SESSION['FullName'];
                    $dob = $_SESSION['DOB'];
                    $email = $_SESSION['Email'];
                    $phoneNumber = $_SESSION['PhoneNumber'];
                    $address = $_SESSION['Address'];
                    header("Location: ?");
                    exit;
                }
                else{
                    die("Error Update User's Avatar!");
                }
            }
            else{
                die("Server's Error");
            }
        }

        require_once('../app/views/home/editInfo.php');
    }

    public function uploadImageFile(){
        $target_dir = "../root/images/avatar/";
        $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["avatar"]["tmp_name"]);
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
        if ($_FILES["avatar"]["size"] > 500000) {
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
        if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
            return 1;
        } else {
            return 0;
            }
        }
    }

    public function forgotPassword() {
        require_once('../app/views/home/forgot-password.php');
    }
    
}