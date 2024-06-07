<?php
  include './src/Models/ProductMdl.php';

  class ProductCtrl {
    public $ProductMdl;

    public function __construct() {
      $this->ProductMdl = new ProductMdl();
    }

    function ShowAllPrd () {
      $products = $this->ProductMdl->GetAllPrd();
      include './src/Views/Admin/ProductsListView.php';
    }

    function CreatePrd(){
      $categorys = $this->ProductMdl->GetAllCategory();
      include './src/Views/Admin/CreatePrdView.php';
    }

    function StorePrd () {

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
        header("location:?controller=admin");
      }
    }

    function LoadUpdatePrd($id){
      $categorys = $this->ProductMdl->GetAllCategory();
      $infoPrd = $this->ProductMdl->GetOnePrd($id);
      include './src/Views/Admin/UpdatePrdView.php';
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
        header("location:?controller=admin");
      }
      
    }

    function DeletePrd ($id) {
        $this->ProductMdl->DeletePrdMdl($id);
        header("location:?controller=admin");
    }
  }
