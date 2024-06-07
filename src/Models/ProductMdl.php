<?php
require_once './src/Common/Model.php';
class ProductMdl extends Model {

  function GetSql($sql, $type, $id = null) {
    $conn = $this->getConnection();
    $result = $this->conn->query($sql);
    return $type ? $result->fetchAll(PDO::FETCH_ASSOC) : $result->fetch(PDO::FETCH_ASSOC);
  }

  function GetAllPrd () {
    $sql = "SELECT * FROM products WHERE 1";
    return $this->GetSql($sql, true);
  }

  function GetAllCategory () {
    $sql = "SELECT * FROM category WHERE 1";
    return $this->GetSql($sql, true);
  }


  function GetOneCate ($id) {
    $sql = "SELECT * FROM category WHERE CategoryID = '$id'";
    return $this->GetSql($sql, false, $id);
  }

  function GetOnePrd ($id) {
    $sql = "SELECT * FROM products WHERE ProductID = '$id'";
    return $this->GetSql($sql, false, $id);
  }



  function AddPrd ($CategoryID, $ProductName, $Thumbnail, $UnitPrice, $CreateAt, $Description) {
    $sql = "INSERT INTO products(ProductID, CategoryID, ProductName, Thumbnail, UnitPrice, CreateAt, Description)
      VALUES (null,'$CategoryID','$ProductName','$Thumbnail','$UnitPrice','$CreateAt','$Description')";
    $this->conn->query($sql);
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
    $this->conn->query($sql);
  }

  function DeletePrdMdl ($ProductID) {
    $sql = "DELETE FROM products WHERE ProductID = '$ProductID'";
    $this->conn->query($sql);
  }
}