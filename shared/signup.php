<?php
$conn=new mysqli("localhost","root","","ecommerce",3306);
mysqli_query($conn,"insert into user(username,password,usertype) values('$_POST[username]','$_POST[password1]','$_POST[password2]')");
?>