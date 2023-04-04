<?php
class User {
  public static function getAll() {
    global $pdo;
    $stmt = $pdo->query('SELECT * FROM users');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  public static function create($userName, $fullName, $gender, $phoneNumber, $email, $address, $dob, $hashPass) {
    global $pdo;
    
    $sql = "INSERT INTO users (UserName, FullName, Gender, PhoneNumber, Email, Address, DOB, Password) VALUES (:userName, :fullName, :gender, :phoneNumber, :email, :address, :dob, :hashPass)";
    $stmt = $pdo->prepare($sql);   

    $stmt->bindParam(':userName', $userName);
    $stmt->bindParam(':fullName', $fullName);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':phoneNumber', $phoneNumber);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':dob', $dob);
    $stmt->bindParam(':hashPass', $hashPass);

    return $stmt->execute();
  }

  public static function find($userName) {
    global $pdo;
    $stmt = $pdo->prepare('SELECT * FROM users WHERE UserName =:userName');
    $stmt->bindParam(':userName', $userName);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public static function editInfo($userId, $userName, $fullName, $gender, $email, $avatar, $phoneNumber, $address, $dob) {
    global $pdo;
    
    $sql = "UPDATE users SET UserName=:userName, FullName=:fullName, Gender=:gender, Email=:email, ImgUser =:avatar, PhoneNumber=:phoneNumber, Address=:address, DOB=:dob WHERE UserID=:userId";
    $stmt = $pdo->prepare($sql);
   
    $stmt->bindParam(':userName', $userName);
    $stmt->bindParam(':fullName', $fullName);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':avatar', $avatar);
    $stmt->bindParam(':phoneNumber', $phoneNumber);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':dob', $dob);
    $stmt->bindParam(':userId', $userId);

    return $stmt->execute();
  }
}
