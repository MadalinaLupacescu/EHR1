
<?php
    // ini_set('display_errors', 0);
    // error_reporting(E_ERROR | E_WARNING | E_PARSE); 
    
   include 'connect.php';

    // Get the form data
    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $username = $_POST['UserName'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $cpassword = $_POST['CPassword'];
    $phonenumber = $_POST['Phone_nr'];


    // Create the insert query
    $sql = "INSERT INTO doctors (FirstName, LastName, UserName, Email, Password, CPassword, Phone_nr) 
    VALUES ('$firstname','$lastname','$username','$email', '$password', '$cpassword','$phonenumber')";


    // Execute the query
    if ($conn->query($sql) === TRUE) {
        header('Location: dashboard.html');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
?>