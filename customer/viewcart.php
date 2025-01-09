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
include "authguard.php";
include "menu.html";
include "../shared/connection.php";
$sql_result=mysqli_query($conn,"select * from cart where
userid=$_SESSION[userid]");
while($dbrow=mysqli_fetch_assoc($sql_result)){
          print_r($dbrow);
          echo "<br>";
}
?>
