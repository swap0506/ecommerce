<?php

session_start();


if (!isset($_SESSION["login_status"])) {
    echo "Illegal attempt: Please log in.";
    die;
}


if ($_SESSION["login_status"] === false) {
    echo "Unauthorized access: You must log in.";
    die;
}
if($_SESSION['usertype']!="customer"){
          echo "forbidden access";
          die;
}
?>