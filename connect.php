<?php
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="ecricare_db";

    $conn= new mysqli($server_name,$username,$password,$database_name);
    //now check the connection
    if (!$conn){
    die(mysqli_error($conn));
    }

?>