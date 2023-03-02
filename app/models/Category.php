<?php
class Category {
  public static function getAll() {
    global $pdo;
    $stmt = $pdo->query('SELECT * FROM categories');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
