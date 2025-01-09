<html>
          <head>
                    <style>
                    .pdt{
                              background-color:bisque;
                              display:inline-block;
                              margin:10px;
                              padding:10px;
                              width:300px;
                              height:fit-content;
                              vertical-align:top;

                    }
                    .pdt-img{
                              width:100%;
                              height:fit-content;

                    }
                    .name{
                              font-size:24px;
                              font-weight:bolder;
                              
                    }
                    .price::after{
                              content:"Rs";
                              font-size:12px;
                    }
                    </style>
                    </head>
                    </html>
  <?php

$pid=$_GET['pid'];
include "authguard.php";
include "../shared/connection.php";
mysqli_query($conn,"insert into purchase(userid,pid) values($_SESSION[userid],$pid)");
header("location:vieworders.php");
?>