
<?php
if (isset($_POST['Add'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email-p'];
    $address = $_POST['Address'];
    $insurance = $_POST['Insurance'];
    $phone = $_POST['Phone-p'];
    $gender = $_POST['Gender'];

    // Create a connection to the database
    $conn = mysqli_connect("localhost", "root", "", "ecricare_db");

    // Check for a successful connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert the patient's information into the database
    $sql = "INSERT INTO patients (name, email, address, insurance, phone, gender)
    VALUES ('$name', '$email', '$address', '$insurance', '$phone', '$gender')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>



