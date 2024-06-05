<?php
include './src/Controllers/ProductCtrl.php';
include './src/Controllers/UserCtrl.php';
include './src/Includes/Helper.php';

$url = isset($_GET['action']) ? $_GET['action'] : 'Home';


$ProductCtrl = new ProductCtrl();
$UserCtrl = new UserCtrl();

switch ($url) {
  case 'Home':
    $ProductCtrl->ShowALlPrd();
    break;

  case 'CreatePrdView':
    $ProductCtrl->CreatePrdView();
    break;

  case 'CreatePrd':
    $ProductCtrl->CreatePrd();
    break;

  case 'Updateview':
    $id = $_GET['id'];
    $ProductCtrl->UpdateView($id);
    break;

  case 'UpdatePrd':
    $id = $_GET['id'];
    $ProductCtrl->UpdatePrd($id);
    break;

  case 'DeletePrd':
    $id = $_GET['id'];
    $ProductCtrl->DeletePrd($id);
    break;
    
  case 'User':
    $UserCtrl->ShowAllUser();
    break;
    
  case 'CreateUser':
    $UserCtrl->CreateUser();
    break;

  case 'UpdateUserView':
    $id = $_GET['id'];
    $UserCtrl->UpdateUserView($id);
    break;

  case 'UpdateUser':
    $id = $_GET['id'];
    $UserCtrl->UpdateUser($id);
    break;

  case 'DeleteUser':
    $id = $_GET['id'];
    $UserCtrl->DeleteUser($id);
    break;
  
  default:
    $ProductCtrl->ShowALlPrd();
    break;
}