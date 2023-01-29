<?php
include 'connect.php';
    if (isset($_POST['Add'])) {
        $name = $_POST['Name'];
        $email = $_POST['Email-p'];
        $address = $_POST['Address'];
        $insurance = $_POST['Insurance'];
        $phone = $_POST['Phone-p'];
        $gender = $_POST['Gender'];
        $medical_history = $_POST['medical_history'];
        $allergy = $_POST['allergy'];
 
    
        // Insert the patient's information into the database
        $sql = "INSERT INTO patients (name, email, address, insurance, phone, gender, medical_history, allergy)
        VALUES ('$name', '$email', '$address', '$insurance', '$phone', '$gender', '$medical_history', '$allergy')";
if ($conn->query($sql) === TRUE) {
    header('Location: dashboard.php');
    } else {
        die(mysqli_error($conn));
    }
    mysqli_close($conn);
}
?>