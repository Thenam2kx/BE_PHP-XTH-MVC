<?php
require_once './src/Common/Model.php';
class UserMdl extends Model {

  function GetSql($sql, $type, $id = null) {
    $conn = $this->getConnection();
    $result = $this->conn->query($sql);
    return $type ? $result->fetchAll(PDO::FETCH_ASSOC) : $result->fetch(PDO::FETCH_ASSOC);
  }

  function GetAllUsers () {
    $sql = "SELECT * FROM user WHERE 1";
    return $this->GetSql($sql, true);
  }

  function GetAllRoles () {
    $sql = "SELECT * FROM role WHERE 1";
    return $this->GetSql($sql, true);
  }


  function GetOneUser ($id) {
    $sql = "SELECT * FROM user WHERE UserID = '$id'";
    return $this->GetSql($sql, false, $id);
  }

  function GetOneRole ($id) {
    $sql = "SELECT * FROM role WHERE RoleID = '$id'";
    return $this->GetSql($sql, false, $id);
  }

  function AddUser ($RoleID, $FullName, $Email, $Phone, $Gender, $Password) {
    $sql = "INSERT INTO user(UserID, RoleID , FullName, Email, Phone, Gender, Password)
      VALUES (null,'$RoleID','$FullName','$Email','$Phone','$Gender','$Password')";
    $this->conn->query($sql);
  }

  function UpdateUser ($UserID, $RoleID, $FullName, $Email, $Phone, $Gender, $Password) {
    $sql = "UPDATE user SET
      RoleID='$RoleID',
      FullName='$FullName',
      Email='$Email',
      Phone='$Phone',
      Gender='$Gender',
      Password='$Password'
      WHERE UserID='$UserID";
    $this->conn->query($sql);
  }

  function DeleteUserdMdl ($UserID) {
    $sql = "DELETE FROM user WHERE UserID = '$UserID'";
    $this->conn->query($sql);
  }


}