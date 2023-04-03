<?php
class Brand {
  public static function getAll() {
    global $pdo;
    $stmt = $pdo->query('SELECT * FROM brands');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function find($brandid) {
    global $pdo;
    $stmt = $pdo->prepare('SELECT * FROM brands WHERE BrandID =:brandid');
    $stmt->bindParam(':brandid', $brandid);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public static function create($brandname) {
    global $pdo;
    
    $sql = "INSERT INTO brands (BrandName) VALUES (:brandname)";
    $stmt = $pdo->prepare($sql);
   

    $stmt->bindParam(':brandname', $brandname);

    return $stmt->execute();
  }
  
  public static function delete($brandid) {
    global $pdo;
    
    $sql = "DELETE FROM brands WHERE BrandID= :brandid";
    $stmt = $pdo->prepare($sql);
   

    $stmt->bindParam(':brandid', $brandid);

    return $stmt->execute();
  }
}
