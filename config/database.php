<?php
  session_start();

  class Database {
    protected $database;

    function __construct() {
      $db_name = 'example_db';
      $user = 'root';
      $password = 'pass1234';
      $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

      $dsn = "mysql:host=localhost;dbname=$db_name;charset=utf8mb4";

      try {
        $this->database = new PDO($dsn, $user, $password, $option);
      } catch (\PDOException $err) {
        throw new \PDOException($err->getMessage(), (int)$err->getCode());
      }
    }

    public function getConn() {
      return $this->database;
    }
  }