<?php
  include './src/Includes/Database.php';

  class ProductMdl {
    public $db;

    public function __construct() {
      $this->db = (new Database())->conn;
    }

    function GetAllPrd () {
      $sql = "SELECT * FROM `products` WHERE 1";
      $result = $this->db->query($sql);
      return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    function GetOnePrd ($id) {
      $sql = "SELECT * FROM products WHERE ProductID = '$id'";
      $result = $this->db->query($sql);
      return $result->fetch(PDO::FETCH_ASSOC);
    }

    function GetAllCate () {
      $sql = "SELECT * FROM category WHERE 1";
      $result = $this->db->query($sql);
      return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    function GetOneCate ($id) {
      $sql = "SELECT * FROM category WHERE CategoryID = '$id'";
      $result = $this->db->query($sql);
      return $result->fetch(PDO::FETCH_ASSOC);
    }
  }
?>