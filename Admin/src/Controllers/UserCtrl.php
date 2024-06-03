<?php
  include './src/Models/UserMdl.php';

  class UserCtrl {
    public $UserMdl;

    public function __construct() {
      $this->UserMdl = new UserMdl();
    }

    function ShowAllUser () {
      $users = $this->UserMdl->GetAllUser();
      include './src/Views/UserView.php';
    }

    function CreateUser () {
      $roles = $this->UserMdl->GetAllRole();
      include './src/Views/CreateUserView.php';

      if (isset($_POST['CreateUser'])) {
        $RoleID = $_POST['userRole'];
        $FullName = $_POST['userName'];
        $Email = $_POST['userEmail'];
        $Phone = $_POST['userPhone'];
        $Gender = $_POST['userGender'];
        $Password = $_POST['userPass'];
        $this->UserMdl->AddUser($RoleID, $FullName, $Email, $Phone, $Gender, $Password);
        header("location:?action=User");
      }
    }

  //   function UpdatePrd ($id) {
  //     $categorys = $this->ProductMdl->GetAllCate();
  //     $infoPrd = $this->ProductMdl->GetOnePrd($id);
  //     include './src/Views/UpdatePrdView.php';

  //     if (isset($_POST['UpdatePrd'])) {
  //       $productName = $_POST['productName'];
  //       $productCategory = $_POST['productCategory'];
  //       $productPrice = $_POST['productPrice'];
  //       $productDescription = $_POST['productDescription'];
  //       $CreateAt = date('y-m-d');
  //       $Thumbnail = null;
  //       $this->ProductMdl->UpdatePrd($productCategory, $productName, $Thumbnail, $productPrice, $CreateAt, $productDescription, $id);
  //       // exit(header("location: ?action=Home"));
  //     }
      
  //   }

  //   function DeletePrd ($id) {
  //       $this->ProductMdl->DeletePrdMdl($id);
  //       header("location:?action=Home");
  //   }
  }
