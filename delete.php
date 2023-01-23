<?php
// Create a connection to the database
$conn = mysqli_connect("localhost", "root", "", "ecricare_db");

// Check for a successful connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the id of the record to be deleted
$id = $_POST['id'];

// Delete the record from the database
$sql = "DELETE FROM patients WHERE id = $id";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the connection to the database
mysqli_close($conn);
?>
