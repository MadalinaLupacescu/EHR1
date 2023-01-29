<?php
include 'connect.php';

if (isset($_POST['submit'])){

    // Get the form data
    $LicenceNo = $_POST['LicenceNo'];
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $UserName = $_POST['UserName'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Cpassword = $_POST['CPassword'];
    $PhoneNumber = $_POST['PhoneNo'];



// Create the insert query
$sql = "INSERT INTO doctor (LicenceNo, FirstName, LastName, UserName, Email, Password, CPassword, PhoneNo) 
    VALUES ('$LicenceNo','$FirstName','$LastName','$UserName','$Email', '$Password', '$Cpassword','$PhoneNumber')";
// Execute the query
if ($conn->query($sql) === TRUE) {
    header('Location: Login.php');
} else {
    die(mysqli_error($conn));
}

// Close the connection
$conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="50">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styling.css">

</head>

<body>
    <div class="container my 10">

        <h1 class="text-center" style="color:rgb(35, 122, 243); font-family:Verdana;"> Register Here</h1>

        <form method="POST">

            <div class="form-group">
                <label class="form-label">Licence No</label>
                <input class="form-control" type="text" id="text" name="LicenceNo" required>
            </div>

            <div class="form-group">
                <label class="form-label" >First Name</label>
                <input class="form-control" type="text" id="text" name="FirstName" required>
            </div>

            <div class="form-group">
                <label class="form-label">Last Name</label>
                <input class="form-control" type="text" id="text" name="LastName" required>
            </div>

            <div class="form-group">
                <label class="form-label">Create username</label>
                <input class="form-control" type="text" id="text" name="UserName" required>
                <div class="invalid-feedback">
                    Please enter a valid username.
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Phone number</label>
                <input class="form-control" type="int" id="int" name="PhoneNo" required>
            </div>



            <div class="form-group">
                <label class="form-label">Email Address</label>
                <input class="form-control" type="email" id="email" name="Email" required>
                <div class="invalid-feedback">
                    Please enter a valid email address.
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Password</label>
                <input class="form-control" type="password" id="password" name="Password" required>
                <div class="invalid-feedback">
                    Enter your password
                </div>

            </div>

            <div class="form-group">
                <label class="form-label">Confirm Password</label>
                <input class="form-control" type="password" id="password" name="CPassword" required>
                <div class="invalid-feedback">
                    Enter your password
                </div>
                <br>
                <div class="col-md-12 text-center">
                    <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Sign Up">
                </div>

        </form>
    </div>

</body>


</html>