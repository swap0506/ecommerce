
<?php

session_start();
$conn=new mysqli("localhost","root","","ecommerce",3306);
if(!$conn){
          echo "error connection";
      }


$source=$_FILES['pdtimg']['tmp_name'];
$target=$_FILES['pdtimg']['name'];

move_uploaded_file($source,$target);
include "../shared/connection.php";


if($_SERVER[REQUEST_METHOD=='POST']){
    if(isset($_POST['name'],$_POST['price'],$_POST['detail'],$_POST['impath'],$_POST['owner'])){
        $name=$_POST['pname'];
        $price=$_POST['pprice'];
        $detail=$_POST['pdetail'];
        $impath=$target;
        $owner=$_SESSION['userid'];
        $sql="INSERT INTO login(name,price,detail,impath,owner) VALUES( '$name','$price','$detail','$impath','$owner')";
    }
 

    if(mysqli_query($conn,$sql)){
        echo "succesful";
    }
    else{
        echo "error connection";
    }
}
else{
    echo "no data recieved";
}
mysqli_close($conn);


?>

      






