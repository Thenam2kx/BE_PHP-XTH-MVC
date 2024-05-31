<?php
  include './src/Models/ProductMdl.php';
  class ProductCtrl {
    public $ProductMdl;

    public function __construct() {
      $this->ProductMdl = new ProductMdl();
    }

    function ShowALlPrd () {
      $products = $this->ProductMdl->GetAllPrd();
      include './src/Views/HomeView.php';
    }

    function DetailPrd ($id) {
      $product = $this->ProductMdl->GetOnePrd($id);
      include './src/Views/DetaiPrdView.php';
    }
  }
?>