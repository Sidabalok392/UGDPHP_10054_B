<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "UGDPHP_10054_B";
    $con = mysqli_connect($host,$user,$pass,$name);
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL : " . mysqli_connect_error();
    }
?>