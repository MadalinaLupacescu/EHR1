<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <!-- <link rel="stylesheet" href="style.css"/> -->
    <link rel="stylesheet" href="styling.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">

        <!-- trying to edit the form layout -->
        <div class="container" style>

<h1 class="text-center" style="color:rgb(35, 122, 243); font-family:Verdana;"> Register Here</h1>

<form action="Register.php" method="POST">
    
    <div class="form-group">
        <label class="form-label" for="name">First Name</label>
        <input class="form-control" type="text" id="text" name="FirstName" required>
    </div>
    
    <div class="form-group">
        <label class="form-label" for="name">Last Name</label>
        <input class="form-control" type="text" id="text" name="LastName" required>
    </div>

    <div class="form-group">
        <label class="form-label" for="email">Create username</label>
        <input class="form-control" type="text" id="text" name="UserName" required>
        <div class="invalid-feedback">
            Please enter a valid username.
        </div>
    </div>

    <div class="form-group">
        <label class="form-label" for="email">Phone number</label>
        <input class="form-control" type="int" id="int" name="PhoneNo" required>
    </div>

    
    <div class="form-group">
        <label class="form-label" for="LicenceNo">Licence No</label>
        <input class="form-control" type="text" id="text" name="LicenceNo" required>
    </div>

    <div class="form-group">
        <label class="form-label" for="email">Email Address</label>
        <input class="form-control" type="email" id="email" name="Email" required>
        <div class="invalid-feedback">
            Please enter a valid email address.
        </div>
    </div>

    <div class="form-group">
        <label class="form-label" for="password">Password</label>
        <input class="form-control" type="password" id="password" name="Password" required>
        <div class="invalid-feedback">
            Enter your password
        </div>
        <!-- <?php
if ($err!="ok") 
echo $err;
?> -->
    </div>

    <div class="form-group">
        <label class="form-label" for="password">Confirm Password</label>
        <input class="form-control" type="password" id="password" name="CPassword" required>
        <div class="invalid-feedback">
            Enter your password
        </div>
        <br>
        
<!-- The part I added ended here -->

        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>