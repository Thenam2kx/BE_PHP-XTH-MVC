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

    function CreatePrdView(){
      $categorys = $this->ProductMdl->GetAllCate();
      include './src/Views/CreatePrdView.php';
    }

    function CreatePrd () {

      if (isset($_POST['CreatePrd'])) {
        $productName = $_POST['productName'];
        $productCategory = $_POST['productCategory'];
        $productPrice = $_POST['productPrice'];
        $productDescription = $_POST['productDescription'];
        $CreateAt = date('y-m-d');
        $uploadFile = $_FILES['uploadfile'];
        $img_path = uploadFile($uploadFile);
        $Thumbnail = $img_path;
        $this->ProductMdl->AddPrd($productCategory, $productName, $Thumbnail, $productPrice, $CreateAt, $productDescription);
        header("location:?action=Home");
      }
    }

    function UpdateView($id){
      $categorys = $this->ProductMdl->GetAllCate();
      $infoPrd = $this->ProductMdl->GetOnePrd($id);
      include './src/Views/UpdatePrdView.php';
    }

    function UpdatePrd ($id) {
      if (isset($_POST['UpdatePrd'])) {
        $productName = $_POST['productName'];
        $productCategory = $_POST['productCategory'];
        $productPrice = $_POST['productPrice'];
        $productDescription = $_POST['productDescription'];
        $CreateAt = date('y-m-d');
        $Thumbnail = null;
        $this->ProductMdl->UpdatePrd($productCategory, $productName, $Thumbnail, $productPrice, $CreateAt, $productDescription, $id);
        header("location:?action=Home");
      }
      
    }

    function DeletePrd ($id) {
        $this->ProductMdl->DeletePrdMdl($id);
        header("location:?action=Home");
    }
  }
