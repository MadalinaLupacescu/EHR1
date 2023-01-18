<?php
    
    include 'connect.php';

    $username = $_POST['UserName'];
    $password = $_POST['Password'];


    // Check the login credentials
    $sql = "SELECT * FROM doctors WHERE UserName='$username' AND Password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful
        // Start a session and redirect the user to the dashboard
        session_start();
        $_SESSION['logged_in'] = true;
        header('Location: dashboard.html');
        exit;
    } else {
        // Login failed
        // Redirect the user back to the login page with an error message - ?error=invalid_credentials
        header('Location: Register.html');
        exit;
    
    }

    // Close the connection
    $conn->close();
?>




// In this example, the PHP script connects to the database and gets the username and password from the data.
//  It then runs a SELECT query to check if there is a matching record in the users table.
// If a matching record is found, the login is successful and the script starts a session and redirects the user to the dashboard.
//  If no matching record is found, the login is unsuccessful and the user is redirected back to the login page with an error message.