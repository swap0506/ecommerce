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
include "../shared/connection.php";
include "menu.html";

$sql_result=mysqli_query($conn,"select * from product where owner=$_SESSION[userid]");
while($dbrow=mysqli_fetch_assoc($sql_result)){
         echo "<div class='pdt'>
           <div class='name'>$dbrow[name]</div>
            <div class='price'>$dbrow[price]</div>

             <img class='pdt-img' src='$dbrow[impath]'>
              <div>$dbrow[detail]</div>
         <div>
                 <div>
                    <a href='edit.php?pid=$dbrow[pid]'>
                    <button>edit</button>
                     </a>
                     <a href='delete.php?pid=$dbrow[pid]'>

                     <button>delete</button>
                     </a>
                 </div>
              </div>
           </div> ";

         
}
?>