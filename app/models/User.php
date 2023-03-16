<?php
class User {
  public static function create($userName, $fullName, $gender, $phoneNumber, $email, $adress, $hashPass) {
    global $pdo;
    
    $sql = "INSERT INTO users (UserName, FullName, Gender, PhoneNumber, Email, Adress, Pass) VALUES (:userName, :fullName, :gender, :phoneNumber, :email, :adress, :hashPass)";
    $stmt = $pdo->prepare($sql);   

    $stmt->bindParam(':userName', $userName);
    $stmt->bindParam(':fullName', $fullName);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':phoneNumber', $phoneNumber);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':adress', $adress);
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

  public static function forgotPassword($userName) {
    
  }
}
