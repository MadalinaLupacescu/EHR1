<?php
    
    include 'connect.php';

    
    $name = $_POST['Name'];
    $emailp = $_POST['Email-p'];
    $addressp = $_POST['Address'];
    $insurance = $_POST['Insurance'];
    $phonep = $_POST['Phone-p'];
    $gender = $_POST['Gender'];
    
        // mysqli_query($db, "INSERT INTO patients (Name, Email-p, Address, Insurance, Phone-p,Gender)
        // VALUES ('$name','$emailp' ,'$addressp', '$insurance', '$phonep', '$gender')"); 
        // $_SESSION['message'] = "Patient's information saved"; 
        //     header('location: dashboard.html');
        //     exit;
        // }else (isset($_POST['Cancel'])){
        //     header('location: dashboard.html');
        //     exit;
        // }  

    // Create the insert query
    $sql = "INSERT INTO patients (Name, Email-p, Address, Insurance, Phone-p,Gender)
    VALUES ('$name','$emailp' ,'$addressp', '$insurance', '$phonep', '$gender')";

    // // Execute the query
    // if ($conn->query($sql) === TRUE) {
    //     header('Location: dashboard.html');
    //     exit;
    // } else {
    //     echo "Error: Try again" . $sql . "<br>" . $conn->error;
    // } OR ($conn->query($sql) === True) for the query 


    // Execute the query
    if (isset($_POST['Add'])) {
        $_SESSION['message'] = "Patient's information saved";
        header('Location: dashboard.html');
        exit;
    } if (isset($_POST['Cancel'])){
        header('Location: dashboard.html');
        exit;
    } else {
        echo "Error: Try again" . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
?>

