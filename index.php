<?php
include './src/Controllers/ProductCtrl.php';

$url = isset($_GET['action']) ? $_GET['action'] : 'Home';

$ProductCtrl = new ProductCtrl();

switch ($url) {
  case 'Home':
    $ProductCtrl->ShowALlPrd();
    break;
  case 'CreatePrd':
    $ProductCtrl->CreatePrd();
    break;
  case '':
    # code...
    break;
  
  default:
    # code...
    break;
}