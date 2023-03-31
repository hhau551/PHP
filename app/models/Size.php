<?php
class Size {
  public static function getAll() {
    global $pdo;
    $stmt = $pdo->query('SELECT * FROM sizes');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  //tao phieu dang ky
  public static function create($size) {
    global $pdo;
    
    $sql = "INSERT INTO sizes (Size) VALUES (:size)";
    $stmt = $pdo->prepare($sql);
   

    $stmt->bindParam(':size', $size);

    return $stmt->execute();
  }

  public static function delete($sizeid) {
    global $pdo;
    
    $sql = "DELETE FROM sizes WHERE SizeID= :sizeid";
    $stmt = $pdo->prepare($sql);
   

    $stmt->bindParam(':sizeid', $sizeid);

    return $stmt->execute();
  }
}