<?php
class Authentication {

  public function Login() {
    include_once './src/Models/UserMdl.php';
    include_once './src/Views/Client/LoginView.php';
    $users = (new UserMdl())->GetAllUsers();

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
}