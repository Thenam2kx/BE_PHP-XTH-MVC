<?php
include_once './src/Models/UserMdl.php';
class Authentication {

  public $UserMdl;

    public function __construct() {
      $this->UserMdl = new UserMdl();
    }

  public function Login() {
    include_once './src/Views/Client/LoginView.php';
    $users = $this->UserMdl->GetAllUsers();

    if (isset($_POST['Login'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];

      if (
        (isset($_SESSION['email']) && $_SESSION['email'] == $email)

        &&

        (isset($_SESSION['password']) && $_SESSION['password'] == $password)
        ) {
          header("location: http://localhost/XTH-PHP/");
      } else {
        foreach ($users as $user) {
          if ($user['Email'] == $email && $user['Password'] == $password) {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header("location: http://localhost/XTH-PHP/");
          }
        }
      }
    }
  }

  public function Register () {
    include_once './src/Views/Client/RegisterView.php';

    $users = $this->UserMdl->GetAllUsers();
    $mess = '';

    if (isset($_POST['submit'])) {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $confirmPassword = $_POST['confirmPassword'];

      foreach ($users as $user) {
        if (
          $user['Email'] == $email && $user['Password'] == $email
          ) {
            $mess = 'user old';
            break;
        } else {
          $this->UserMdl->AddUser(1, $username, $email, null, 0, $password);
          header("location: http://localhost/XTH-PHP/");
          break;
        }
      }
    }
  }
}