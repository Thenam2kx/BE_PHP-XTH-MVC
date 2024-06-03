<?php
  require_once './src/Includes/Database.php';

  class UserMdl {
    public $db;

    public function __construct() {
      $this->db = (new Database())->conn;
    }

    function GetAllUser () {
      $sql = "SELECT * FROM user WHERE 1";
      $result = $this->db->query($sql);
      return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    function GetOneUser ($id) {
      $sql = "SELECT * FROM user WHERE UserID = '$id'";
      $result = $this->db->query($sql);
      return $result->fetch(PDO::FETCH_ASSOC);
    }

    function GetAllRole () {
      $sql = "SELECT * FROM role WHERE 1";
      $result = $this->db->query($sql);
      return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    function AddUser ($RoleID, $FullName, $Email, $Phone, $Gender, $Password) {
      $sql = "INSERT INTO user(UserID, RoleID , FullName, Email, Phone, Gender, Password)
        VALUES (null,'$RoleID','$FullName','$Email','$Phone','$Gender','$Password')";
      $this->db->query($sql);
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
      
      $this->db->query($sql);
    }

    function DeleteUserdMdl ($UserID) {
      $sql = "DELETE FROM user WHERE UserID = '$UserID'";
      $this->db->query($sql);
    }
  }
