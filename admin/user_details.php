<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../image/favicon.png" type="image/png">
        <title>Royal Hotel</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <style type="text/css">
            .btn{
                margin-right: 15px;
            }
        </style>
    </head>
    <body style="background: linear-gradient(to right,#54a6d6, #c0caf5, #5a88d1)">
        <!--================Banner Area END =================-->
        <br><br>
       <div class="row">
       	<div class="col-md-12">
       		<center><h3>Checked In Users Details</h3></center>
       	</div>
       </div><br><br>
        <div class="row">
        	<div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>User ID</th>
                            <th>User Mobile</th>
                            <th>Room No</th>
                            <th>User Address</th>
                            <th>Child</th>
                            <th>Adult</th>
                            <th>Check-In</th>
                            <th>Check-Out</th>
                        </tr>
                    </thead>
        		<?php
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"370_project");
                    $query = "select * from single_non_ac where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['holder_name'];?></td>
                                <td><?php echo $row['holder_id'];?></td>
                                <td><?php echo $row['holder_mobile'];?></td>
                                <td><?php echo $row['room_no'];?></td>
                                <td><?php echo $row['holder_address'];?></td>
                                <td><?php echo $row['child'];?></td>
                                <td><?php echo $row['adult'];?></td>
                                <td><?php echo $row['in_date'];?></td>
                                <td><?php echo $row['out_date'];?></td>
                            </tr>
                        <?php
                    }
                ?>
            </table>
        	</div>
        </div>
        <br><br><br><br><br><br>
    </body>
</html>

