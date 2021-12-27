<?php
    session_start();
    if (isset($_POST['username'])) {
        $con = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($con, "370_project");
        $username = stripslashes($_POST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_POST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "INSERT into `user` (name, email, password) VALUES ('$username', '$email', '$password')";
        $result   = mysqli_query($con, $query);
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../image/hamim.png" type="image/png">
        <title>Hamim Resting Place</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.css">
    </head>
    <!-- <body style="background-color:#c0caf5"> -->
    <body style="background: linear-gradient(to right,#54a6d6, #c0caf5, #5a88d1)">
        <br><br><br><br><br>
        <!--================Banner Area END =================-->
       <div class="row">
       	<div class="col-md-12">
       		<center><h3>Create user account</h3></center>
       	</div>
       </div><br><br>
        <center>
        <form class="form" action="" method="post">
                <input type="text" class="login-input" name="username" placeholder="Username" required />
                <br><br>
                <input type="text" class="login-input" name="email" placeholder="Email Adress">
                <br><br>
                <input type="password" class="login-input" name="password" placeholder="Password">
                <br><br>
                <input type="submit" name="submit" value="Register" class="login-button">
                <br><br><br><br>
                <p class="link"><a href="index.php">Click to Login</a></p>
            </form>
        </center>
        <br><br><br><br><br><br>
    </body>
</html>
