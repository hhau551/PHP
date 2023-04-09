<?php
namespace App\controllers;
class Authenticator {
    function authenticate($username, $password) {
        // Here you can implement your login functionality
        // and return true if the user is successfully authenticated,
        // or false if the credentials are invalid.
        if($username === 'anh' && $password === '123') {
            return true;
        }
        return false;
    }
}