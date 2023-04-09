<?php
namespace App\controllers;
class UserRegistration {
    function register($fullname, $address, $email, $username, $password) {
        if($fullname === 'Huynh Hau' && $address === 'Quan 12' && $email === 'hhau050501@gmail.com' && $username === 'hau' && $password === '123') {
            return true;
        }
        return false;
    }
}