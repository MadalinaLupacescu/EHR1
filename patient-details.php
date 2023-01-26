<?php
// Create a connection to the database
$conn = mysqli_connect("localhost", "root", "", "ecricare_db");

// Check for a successful connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the patient's id from the query parameter
$id = $_GET['id'];

// Retrieve the patient's information from the database
$sql = "SELECT * FROM patients WHERE id = $id";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result && mysqli_num_rows($result) > 0) {
    $patient = mysqli_fetch_assoc($result);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the connection to the database
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Patient Details</h2>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">Name: <?php echo $patient['name']; ?></p>
                    <p class="card-text">Email: <?php echo $patient['email']; ?></p>
                    <p class="card-text">Address: <?php echo $patient['address']; ?></p>
                    <p class="card-text">Phone: <?php echo $patient['phone']; ?></p>
                    <a href="update-patient.php?id=<?php echo $patient['id']; ?>" class="btn btn-primary">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="500">
    <title>ECRI_CARE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script>
	// $('#addpatient').modal({backdrop: 'static', keyboard: false})  
	</script>	
</head>
<body>
   <form class="needs-validation" action="dashboard.php" method="POST">
    <div class="wrapper">
     <!--Top Menu & Menu button-->
        <div class="sidebar">
            <div class="profile">

                <h3 class="fw-bold">LOGIN</h3>
                <P class="fw-bold">REGISTER</P>
            </div>
            <ul class="navbar-nav text-center">
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-solid fa-gauge"></i>&ensp;Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-solid fa-house-user"></i>&ensp;Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="About.php"><i class="fa-solid fa-people-group"></i>&ensp;About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-solid fa-hospital-user"></i>&ensp;Patients</a>
                </li>
            </ul>
        </div>
        
        <div class="section">
            <nav class="navbar navbar-dark bg-mynav">
                <div class="container-fluid justify-content-between">
                    <a class="navbar-brand fw-bold" href="#">ECRI<i class="fa-solid fa-heart-pulse"></i>CARE</a>
                    <a class="btn btn-primary" href="#" role="button"><i class="fa-solid fa-right-from-bracket" value="Logout" name="Logout"></i>&ensp;Logout</a>
                </div>
            </nav>
            <form class="mx-auto needs-validation" style="width: 50%;" action="dashboard.php" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $patient['name']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $patient['email']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="<?php echo $patient['address']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $patient['phone']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="medical_history">medical History</label>
                    <input type="text" class="form-control" id="medical_history" name="medical_history" value="<?php echo $patient['medical_history']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="allergy">Allergy</label>
                    <input type="text" class="form-control" id="allergy" name="allergy" value="<?php echo $patient['allergy']; ?>" required>
                </div>
                <input type="hidden" name="id" value="<?php echo $patient['id']; ?>">
                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
        
    </div>
	</form>



    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 
</form>

</body>
</html>
