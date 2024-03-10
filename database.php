<?php

    $hostName = "localhost";
    $dbUser = "id21972677_localhost";
    $dbPassword = "Test@123";
    $dbName = "id21972677_log_register";
    $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
    if(!$conn){
        die("Something went wrong!");
    }

?>