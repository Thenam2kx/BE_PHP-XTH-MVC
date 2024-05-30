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

    function GetAllCate () {
      $sql = "SELECT * FROM category WHERE 1";
      $result = $this->db->query($sql);
      return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    function AddPrd ($CategoryID, $ProductName, $Thumbnail, $UnitPrice, $CreateAt, $Description) {
      $sql = "INSERT INTO products(ProductID, CategoryID, ProductName, Thumbnail, UnitPrice, CreateAt, Description)
        VALUES (null,'$CategoryID','$ProductName','$Thumbnail','$UnitPrice','$CreateAt','$Description')";
      $this->db->query($sql);
    }

    function UpdatePrd ($CategoryID, $ProductName, $Thumbnail, $UnitPrice, $CreateAt, $Description, $ProductID) {
      $sql = "UPDATE products SET 
        CategoryID='$CategoryID',
        ProductName='$ProductName',
        Thumbnail='$Thumbnail',
        UnitPrice='$UnitPrice',
        CreateAt='$CreateAt',
        Description='$Description'
        WHERE ProductID = $ProductID";
      $this->db->query($sql);
    }

    function DeletePrd ($ProductID) {
      $sql = "DELETE FROM products WHERE ProductID = $ProductID";
      $this->db->query($sql);
    }
  }
?>