<?php
session_start();
include './src/Controllers/Admin/Products.php';
include './src/Controllers/Admin/Users.php';
include './src/Controllers/Client/Products.php';
include './src/Controllers/Admin/Authentication.php';
include './src/Common/handleFile.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'client';
$action = isset($_GET['action']) ? $_GET['action'] : 'Home';


$ProductCtrl = new ProductCtrl();
$UserCtrl = new UserCtrl();
$ClientProuductCtrl = new Products() ;
$Authentication = new Authentication();




switch ($controller) {
  case 'client':
    
    switch ($action) {
      case 'Home':
        $ClientProuductCtrl->ShowALlPrd() ;
        break;

      case 'DetailPrd':
        $id = $_GET['id'];
        $ClientProuductCtrl->DetailPrd($id);
        break;
      
      default:
        echo 'Home Client';
        break;
    }
    
    break;


  case 'admin':
  
    switch ($action) {
      case 'Home':
        $ProductCtrl->ShowAllPrd();
        break;
        
      case 'CreatePrdView':
        $ProductCtrl->StorePrd();
        break;
    
      case 'CreatePrd':
        $ProductCtrl->CreatePrd();
        break;
    
      case 'LoadUpdatePrd':
        $id = $_GET['id'];
        $ProductCtrl->LoadUpdatePrd($id);
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
    
    break;


  case 'login':
    $Authentication->Login();
    break;

  case 'register':
    $Authentication->Register();
    break;
  
  default:
    # code...
    break;
}

// switch ($url) {
//   case 'Home':
//     $ProductCtrl->ShowAllPrd();
//     break;
    
//   case 'CreatePrdView':
//     $ProductCtrl->StorePrd();
//     break;

//   case 'CreatePrd':
//     $ProductCtrl->CreatePrd();
//     break;

//   case 'LoadUpdatePrd':
//     $id = $_GET['id'];
//     $ProductCtrl->LoadUpdatePrd($id);
//     break;

//   case 'UpdatePrd':
//     $id = $_GET['id'];
//     $ProductCtrl->UpdatePrd($id);
//     break;

//   case 'DeletePrd':
//     $id = $_GET['id'];
//     $ProductCtrl->DeletePrd($id);
//     break;
    
//   case 'User':
//     $UserCtrl->ShowAllUser();
//     break;
    
//   case 'CreateUser':
//     $UserCtrl->CreateUser();
//     break;

//   case 'UpdateUserView':
//     $id = $_GET['id'];
//     $UserCtrl->UpdateUserView($id);
//     break;

//   case 'UpdateUser':
//     $id = $_GET['id'];
//     $UserCtrl->UpdateUser($id);
//     break;

//   case 'DeleteUser':
//     $id = $_GET['id'];
//     $UserCtrl->DeleteUser($id);
//     break;
  
//   default:
//     $ProductCtrl->ShowALlPrd();
//     break;
// }