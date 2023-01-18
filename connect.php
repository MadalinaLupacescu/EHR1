<?php
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="ehr";

    $conn=mysqli_connect($server_name,$username,$password,$database_name);
    //now check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>