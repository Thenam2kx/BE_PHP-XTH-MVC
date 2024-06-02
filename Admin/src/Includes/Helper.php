<?php
  function ShowData ($data) {
    var_dump($data);
  }

  function uploadFile($file, $folderUpload = './public/images/') {

      $pathStorage = $folderUpload . time() . $file['name'];

      
      $from = $file['tmp_name'];
      $to = $pathStorage; 

      if (move_uploaded_file($from, $to)) {
          return $pathStorage; 
      } 

      return null; 
  }

