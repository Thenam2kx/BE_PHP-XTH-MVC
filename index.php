<?php
include './src/Controllers/ProductCtrl.php';

$url = isset($_GET['action']) ? $_GET['action'] : 'Home';


$ProductCtrl = new ProductCtrl();

switch ($url) {
  case 'Home':
    $ProductCtrl->ShowALlPrd();
    break;
  case 'DetailPrd':
    $id = $_GET['id'];
    $ProductCtrl->DetailPrd($id);
    break;
  default:
    $ProductCtrl->ShowALlPrd();
    break;
}