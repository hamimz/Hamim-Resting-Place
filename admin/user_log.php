<?php
    session_start();
    if (isset($_POST['admin_login'])) {
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, "370_project");
        $query = "select * from user where email = '$_POST[email]'";
        $query_run = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($query_run)) {
            if ($row['email'] == $_POST['email']) {
                if ($row['password'] == $_POST['password']) {
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['email'] = $row['email'];
                    header("Location:user_dashboard.php");
                } else {
                    echo "<script>alert('Wrong Password...');</script>";
                }
            }
        }
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
       		<center><h3>User Login</h3></center>
       	</div>
       </div><br><br>
        <div class="row">
        	<div class="col-md-2"></div>
        	<div class="col-md-8">
        		<form action="" method="post">
			<div class="form-group">
		    	<label for="name">Email:</label>
		    	<input type="text" class="form-control" name="email" required="">
		  	</div>
			<div class="form-group">
		    	<label for="email">Password:</label>
		    	<input type="password" class="form-control" name="password" required="">
		  	</div>
				<button type="submit" class="btn btn-warning" name="admin_login">Login</button>
		</form>
        	</div>
        	<div class="col-md-2"></div>
        </div>
        <br><br><br><br><br><br>
    </body>
</html>
