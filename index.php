<?php
session_start();
include './src/Controllers/ProductCtrl.php';
include './src/Controllers/UserCtrl.php';

$url = isset($_GET['action']) ? $_GET['action'] : 'Home';


$ProductCtrl = new ProductCtrl();
$UserCtrl = new UserCtrl();

switch ($url) {
  case 'Home':
    $ProductCtrl->ShowALlPrd();
    break;

  case 'DetailPrd':
    $id = $_GET['id'];
    $ProductCtrl->DetailPrd($id);
    break;

  // case 'showUser':
  //   $UserCtrl->ShowAllUser();
  //   break;

  case 'Login':
    $UserCtrl->Login();
    break;

  case 'Register':
    $UserCtrl->Register();
    break;

  default:
    $ProductCtrl->ShowALlPrd();
    break;
}