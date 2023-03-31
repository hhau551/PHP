<?php
class Product {
  public static function getAll() {
    global $pdo;
    $stmt = $pdo->query('SELECT * FROM products');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function create($ProductName, $Price, $Sale, $image, $BrandID, $SizeID, $ColorID, $Description) {
    global $pdo;
    
    $sql = "INSERT INTO products (ProductName, Price, Sale, Image, BrandID, SizeID, ColorID, Description) VALUES (:ProductName, :Price, :Sale, :image, :BrandID, :SizeID, :ColorID, :Description)";
    $stmt = $pdo->prepare($sql);
   

    $stmt->bindParam(':ProductName', $ProductName);
    $stmt->bindParam(':Price', $Price);
    $stmt->bindParam(':Sale', $Sale);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':BrandID', $BrandID);
    $stmt->bindParam(':SizeID', $SizeID);
    $stmt->bindParam(':ColorID', $ColorID);
    $stmt->bindParam(':Description', $Description);

    return $stmt->execute();
  }
}