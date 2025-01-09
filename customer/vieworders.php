<?
if (!isset($_GET['pid'])) {
          die("PID parameter is missing.");
      }
      
      
      var_dump($_GET['pid']); 
      if (!is_numeric($_GET['pid'])) {
          die("Invalid PID. It should be a numeric value.");
      }

      
include "authguard.php";
include "menu.html";
include "../shared/connection.php";
$sql_result=mysqli_query($conn,"select * from purchase where
userid=$_SESSION[userid]");
while($dbrow=mysqli_fetch_assoc($sql_result)){
          print_r($dbrow);
          echo "<br>";
}
?>