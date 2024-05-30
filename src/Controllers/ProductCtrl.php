<?php
  include './src/Models/ProductMdl.php';

  class ProductCtrl {
    public $ProductMdl;

    public function __construct() {
      $this->ProductMdl = new ProductMdl();
    }

    function ShowALlPrd () {
      $products = $this->ProductMdl->GetAllPrd();
      include './src/Views/Home.php';
    }

    function CreatePrd () {
      include './src/Views/CreatePrdView.php';
      if (isset($_POST['CreatePrd'])) {
        $productName = $_POST['productName'];
        $productCategory = $_POST['productCategory'];
        $productPrice = $_POST['productPrice'];
        $productDescription = $_POST['productDescription'];
        $CreateAt = date('y-m-d');
        $Thumbnail = null;
        $this->ProductMdl->AddPrd($productCategory, $productName, $Thumbnail, $productPrice, $CreateAt, $productDescription);
      }
    }
  }
?>