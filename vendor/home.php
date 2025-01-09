<?php
session_start();
if(!isset ($_SESSION["login_status"])){
          echo"illegal attempt by skipping login";
          die;
}
if($_SESSION["login_status"]==false){
          echo "unauthorised access";
          die;
}

include "authguard.php";
include"menu.html";

?>

<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
          <div class="d-flex justify-content-center align-items-center vh-100">
          <form action="upload.php" method="post" class="w-50 bg-warning p-4" enctype="multipart/form-data">
          <h4 class="text-centre ">upload product</h4>
          <input class="form-control mt-3" type="text" name="pname" placeholder="product name">
          <input class="form-control mt-2" type="number" name="pprice" placeholder="product price">
          <textarea class="form-control mt-2"  name="pdetail"  cols="30" rows="3"placeholder="product description"></textarea>
          <input  name="pdtimg" class="form-control mt-2" type="file"  accept=".jpg,.png">
          <div class="text-center mt-3">
                    <button class= "btn btn-danger">upload product</button>
           </div>
</body>
</html>


