<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
   
   
   .pdt{
                              background-color:white;
                              border-radius:20px;
                              background-color: rgba(255, 255, 255, 0.8);
            
                              display:inline-block;
                              margin:10px;
                              padding:10px;
                              width:300px;
                              height:fit-content;
                              vertical-align:top;

                    }
                    .pdt-img{
                              width:100%;
                              height:80%;

                    }
                    .name{
                              font-size:24px;
                              font-weight:bolder;
                              color:blueviolet;
                              
                    }
                    .price::after{
                              content:"Rs";
                              font-size:12px;
                    }
          
                  .price{
                    font-size:25px;
                    font-weight:bolder;

                  }
                  .h{
                     color:white;
                  }
                  .btn{
                     background-color: rgba(255, 255, 255, 0.8);
                  }
           
                 
                              
                  
</style> 

<body>
          
              <h1 class="h">customer home welcomes you </h1>

       
</body>
</html>
<?php
include "authguard.php";
include "../shared/connection.php";
include "menu.html";


$sql_result=mysqli_query($conn,"select * from product ");

while($dbrow=mysqli_fetch_assoc($sql_result)){
   
   echo "<div class='pdt'>
   <div class='name'>$dbrow[name]</div>
    <div class='price'>$dbrow[price]</div>

     <img class='pdt-img' src='$dbrow[impath]'>
      <div>$dbrow[detail]</div>
 <div>
         <div>
            <a href='addcart.php?pid=$dbrow[pid]'>
            <button class='btn btn-warning' >add to cart</button>
             </a>
            <a href='buy.php?pid=$dbrow[pid]'>
            <button class='btn btn-warning' > buy</button>
         </div>
      </div>
   </div> ";

 
}
?>




