<?php
// Connect to the database
$conn = mysqli_connect("host", "username", "password", "database_name");

// Check for errors
if (!$conn) {
    die("Error connecting to database: " . mysqli_connect_error());
}

// Retrieve patient data from the database
$query = "SELECT name, email, address, phone FROM patients";
$result = mysqli_query($conn, $query);

// Check for errors
if (!$result) {
    die("Error retrieving patient data: " . mysqli_error($conn));
}
?>
