<?php
require_once('../app/models/User.php');
class AccountController {
    public function login() {
        if($_SERVER['REQUEST_METHOD']=="POST"){
            session_start();
            $userName = $_POST['UserName'];
            $pass = $_POST['Pass'];

            if(empty($userName) || empty($pass)){
                $_SESSION['Error'] = "Vui long nhap day du thong tin!";
                header('Location: ?route=login');
                exit;
            }
            $user = User::find($userName);
            if(!empty($user)){
                $isSuccess = password_verify($pass, $user['Pass']);
                if($isSuccess)  
                {
                    $_SESSION['UserId'] = $user['Id'];
                    $_SESSION['FullName'] = $user['FullName'];
                    $_SESSION['Avatar'] = $user['Avatar'];
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
    public function register() {
        if($_SERVER['REQUEST_METHOD']=="POST"){   
            $userName = $_POST['UserName']; 
            $fullName = $_POST['FullName'];
            $gender = $_POST['Gender'];
            $phoneNumber = $_POST['PhoneNumber'];
            $email = $_POST['Email'];
            $adress = $_POST['Adress'];
            
            $pass = $_POST['Pass'];
            $confirmPass = $_POST['ConfirmPassword'];

            if($pass != $confirmPass){
                $_SESSION['Error'] = "Mat khau va xac nhan mat khau khong giong nhau!";
                header('Location: ?route=register');
                exit;
            }
            $hashPass = password_hash($pass, PASSWORD_BCRYPT);
            $isSuccess = User::create($userName, $fullName, $gender, $phoneNumber, $email, $adress, $hashPass);
            if($isSuccess)
            {
                // Redirect to homepage
                // $_SESSION['UserId'] ="";
                // $_SESSION['FullName'] ="Loi tao tai khoan";
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

    public function forgotPassword() {
        require_once('../app/views/home/forgot-password.php');
    }
    
}