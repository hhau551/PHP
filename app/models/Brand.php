<?php
class Brand {
  public static function getAll() {
    global $pdo;
    $stmt = $pdo->query('SELECT * FROM brands');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
