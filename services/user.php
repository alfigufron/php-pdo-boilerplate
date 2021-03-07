<?php
  require './config/database.php';

  class User extends Database {
    public function getAll() {
      try {
        $query = "SELECT * FROM users";
        $stmt = $this->getConn()->prepare($query);
        if (!$stmt->execute())
          return "Get User Failed";
        
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        
        return $data;
      } catch (\PDOException $err) {
        return new \PDOException($err->getMessage(), $err->getCode());
      }
    }
  }