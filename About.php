
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5">
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


   <form class="needs-validation">
    <div class="wrapper">
     <!--Top Menu & Menu button-->
        <div class="sidebar">
            <div class="profile">
                <h3 class="fw-bold"> <a href="LOGIN.php">LOGIN</h3></a>
                <P class="fw-bold"><a href="Register.php">REGISTER</P></a>
            </div>
            <ul class="navbar-nav text-center">
                <li class="nav-item">
                  <a class="nav-link" href="LOGIN.php"><i class="fa-solid fa-gauge"></i>&ensp;<b>Dashboard</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="About.php"><i class="fa-solid fa-house-user"></i>&ensp;<b>Home</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="About.php"><i class="fa-solid fa-people-group"></i>&ensp;<b>About Us</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-solid fa-hospital-user"></i>&ensp;<b>Patients</b></a>
                </li>

            </ul>
        </div>
        
        <div class="section">
            <nav class="navbar navbar-dark bg-mynav">
                <div class="container-fluid justify-content-between">
					<h2 class="text-white"><b>About Us</b></h2>
                    <a class="navbar-brand fw-bold" href="#">ECRI<i class="fa-solid fa-heart-pulse"></i>CARE</a>
                    <a class="btn btn-primary" href="#" role="button"><i class="fa-solid fa-right-from-bracket"></i>&ensp;Logout</a>
                </div>
            </nav>
			<div class = "about">
				<div class="row">
				<div class="col-sm-6">
				  <div class="card">
					<div class="card-body" style="background-image: url(images/ehr.png)">
					  <h2 class="card-title"><b>Objective</b></h2>
					  <p class="card-text fs-5 "><strong>To provide doctors with an easy-to-use and efficient platform for managing patient records.  <br><br>This EHR system will allow doctors to add, read, edit, and delete patient data in a secure and user-friendly environment, with the goal of improving the quality of care provided to patients. <br>
						<br>Additionally, the website will be designed to be accessible on multiple devices, allowing doctors to access patient information from anywhere, at any time. Overall, the goal is to streamline the process of maintaining patient records and improve the overall efficiency and effectiveness of the healthcare system.</strong></p>
					  <a href="#" class="btn btn-primary">Read More</a>
					</div>
				  </div>
				</div>
				
				<div class="col-sm-6">
				  <div class="card">
					<div class="card-body"style="background-image: url(images/doc.jpg)">
					  <h2 class="card-title"><b>About</b></h2>
					  <p class="card-text fs-5" ><strong>The EHR system application was developed with focus on creating an easy-to-use interface for doctors. The application allows doctors to add, read, edit, and delete patient data with just a few clicks, and the data is stored in a secure database to ensure patient privacy.<br>
						<br>The EHR system application has been tested with a group of doctors and has received positive feedback. They found it easy to use and efficient in managing patient records. The ability to access patient information quickly and easily has improved the quality of care provided to patients.</strong><br>
						<br></p>
						
					  <a href="Register.php" class="btn btn-primary"><b><i class="fa-solid fa-people-group"></i> Join Us </b></a>
					</div>
				  </div>
				</div>
			  </div>			
        		</div>
			</div>
    </div>



    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 
</form>

</body>
</html>




