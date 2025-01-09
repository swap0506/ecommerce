<?php
session_start();



$conn=new mysqli("localhost","root","","ecommerce",3306);
$query="select * from user where 
username='$_POST[username]' and 
password='$_POST[password]' ";
echo $query;
$sql_result=mysqli_query($conn,$query);
echo "<br>";
print_r($sql_result);

echo "<br>";
if($sql_result->num_rows>0){
          echo"login success";

          $dbrow=mysqli_fetch_assoc($sql_result);

          $_SESSION["login_status"]=true;
          $_SESSION["usertype"]=$dbrow['usertype'];
          $_SESSION['userid'] = $dbrow['userid']; 
          $_SESSION['username']=$dbrow['username'];

          
         
          echo "<br>";
          print_r($dbrow);

        
    if ($dbrow['usertype'] == 'vendor') {
        header("Location: ../vendor/home.html");
        exit(); // Ensure script stops executing
    } else if ($dbrow['usertype'] == 'customer') {
        header("Location: ../customer/home.html");
        exit(); // Ensure script stops executing
    }
} else {
    echo "Invalid login credentials.";
}

?>

