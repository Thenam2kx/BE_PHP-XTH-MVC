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

    function UpdateUserView ($id) {
      $roles = $this->UserMdl->GetAllRole();
      $infoUser = $this->UserMdl->GetOneUser($id);
      include './src/Views/UpdateUserView.php';
    }

    function UpdateUser ($id) {

      if (isset($_POST['UpdateUser'])) {
        $RoleID = $_POST['userRole'];
        $FullName = $_POST['userName'];
        $Email = $_POST['userEmail'];
        $Phone = $_POST['userPhone'];
        $Gender = $_POST['userGender'];
        $Password = $_POST['userPass'];
        $UserID = $id;
        $this->UserMdl->UpdateUser($UserID, $RoleID, $FullName, $Email, $Phone, $Gender, $Password);
        header("location: ?action=User");
      }
      
    }

    function DeleteUser ($id) {
        $this->UserMdl->DeleteUserdMdl($id);
        header("location:?action=User");
    }
  }
