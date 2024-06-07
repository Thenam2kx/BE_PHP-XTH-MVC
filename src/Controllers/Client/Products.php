<?php
include_once './src/Models/ProductMdl.php';
class Products {
  public $ProductMdlClient;

    public function __construct() {
      $this->ProductMdlClient = new ProductMdl();
    }

    function ShowALlPrd () {
      $products = $this->ProductMdlClient->GetAllPrd();
      include './src/Views/Client/HomeView.php';
    }

    function DetailPrd ($id) {
      $product = $this->ProductMdlClient->GetOnePrd($id);
      include './src/Views/Client/DetaiPrdView.php';
    }

    function Login () {
      include './src/Views/Client/LoginView.php';
    }

    function Register () {
      
      include './src/Views/Client/RegisterView.php';
    }
}