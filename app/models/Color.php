<?php
class Color {
  public static function getAll() {
    global $pdo;
    $stmt = $pdo->query('SELECT * FROM colors');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function create($color) {
    global $pdo;
    
    $sql = "INSERT INTO colors (Color) VALUES (:color)";
    $stmt = $pdo->prepare($sql);
   

    $stmt->bindParam(':color', $color);

    return $stmt->execute();
  }

  public static function find($colorid) {
    global $pdo;
    $stmt = $pdo->prepare('SELECT * FROM colors WHERE ColorID =:colorid');
    $stmt->bindParam(':colorid', $colorid);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public static function delete($colorid) {
    global $pdo;
    
    $sql = "DELETE FROM colors WHERE ColorID= :colorid";
    $stmt = $pdo->prepare($sql);
   

    $stmt->bindParam(':colorid', $colorid);

    return $stmt->execute();
  }
}