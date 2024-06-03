<?php
  include './src/Models/UserMdl.php';
  class UserCtrl {
    public $UserMdl;

    public function __construct() {
      $this->UserMdl = new UserMdl();
    }

    function ShowAllUser () {
      $users = $this->UserMdl->GetAllUser();
      var_dump($users);
    }

    function Login () {
      $users = $this->UserMdl->GetAllUser();
      include './src/Views/LoginView.php';
      if (isset($_POST['Login'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        foreach ($users as $user) {
          if ($user['Email'] == $email && $user['Password'] == $pass) {
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $pass;
            header("location:?action=Home");
            break;
          }
        }
      }
    }

    function Register () {
      include './src/Views/RegisterView.php';
      if (isset($_POST['submit'])) {
        $userName = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $repass = $_POST['confirmPassword'];

        $this->UserMdl->AddUser(1, $userName, $email, null, 0, $pass);
        header("location:?action=Home");
      }
      
    }
  }
