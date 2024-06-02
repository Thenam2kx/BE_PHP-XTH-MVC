<?php
include './src/Controllers/ProductCtrl.php';
include './src/Includes/Helper.php';

$url = isset($_GET['action']) ? $_GET['action'] : 'Home';


$ProductCtrl = new ProductCtrl();

switch ($url) {
  case 'Home':
    $ProductCtrl->ShowALlPrd();
    break;
  case 'CreatePrd':
    $ProductCtrl->CreatePrd();
    break;
  case 'UpdatePrd':
    $id = $_GET['id'];
    $ProductCtrl->UpdatePrd($id);
    break;

  case 'DeletePrd':
    $id = $_GET['id'];
    $ProductCtrl->DeletePrd($id);
    break;
  
  default:
    $ProductCtrl->ShowALlPrd();
    break;
}