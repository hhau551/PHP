<?php
class User {
  public static function getAll() {
    global $pdo;
    $stmt = $pdo->query('SELECT * FROM users');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
