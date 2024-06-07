<?php
class Model {
  protected $host = 'localhost';
  protected $dbname = 'XTH-PHP';
  protected $username = 'root';
  protected $password = '';
  public $conn;

  public function __construct() {
    try {
      $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $err) {
      echo "Connection Fail".$err->getMessage();
    }
  }

  public function getConnection() {
    return $this->conn;
  }

  public function __destruct() {
    $this->conn = null;
  }

}