<!doctype html>
<html lang="en">
    <head>
        <title>Hamim Resting PLace</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
    </head>
    <body style="background: linear-gradient(#54a6d6, #c0caf5, #5a88d1)">

        <br><br><br><br><br><br>
       <div class="row">
       	<div class="col-md-12">
       		<center><h3>Room Booking Page</h3></center>
       	</div>
       </div><br><br>
       <center><h5>Room Type:-  Single Non Ac Rooms</h5></center><br>
        <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"370_project");
                $query = "select * from single_non_ac";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 100px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Room No: <?php echo $row["room_no"]?></div>
                        <div class="card-body">
                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="book_room.php?rn=<?php echo $row['room_no'] . "&rt=a";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                            <a href="unbook.php?rn=<?php echo $row['room_no'] . "&rt=a";?>" class="btn btn-danger <?php if($row["status"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "true";}else{echo "false";}?>">Unbook</a>
                        </div>
                    </div>
                    </div>  
                    <?php 
                }
            ?>
        </div><br><br>
        <center><h5>Room Type:-  Single Ac Rooms</h5></center><br>
        <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"370_project");
                $query = "select * from single_ac";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 100px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Room No: <?php echo $row["room_no"]?></div>
                        <div class="card-body">
                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="book_room.php?rn=<?php echo $row['room_no'] . "&rt=b";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                            <a href="unbook.php?rn=<?php echo $row['room_no']. "&rt=b";?>" class="btn btn-danger <?php if($row["status"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "true";}else{echo "false";}?>">Unbook</a>
                        </div>
                    </div>
                    </div>  
                    <?php 
                }
            ?>
        </div><br><br>
        <center><h5>Room Type:-  Double Non-Ac Rooms</h5></center><br>
        <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"370_project");
                $query = "select * from double_non_ac";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 100px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Room No: <?php echo $row["room_no"]?></div>
                        <div class="card-body">
                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="book_room.php?rn=<?php echo $row['room_no'] . "&rt=c";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                            <a href="unbook.php?rn=<?php echo $row['room_no']. "&rt=c";?>" class="btn btn-danger <?php if($row["status"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "true";}else{echo "false";}?>">Unbook</a>
                        </div>
                    </div>
                    </div>  
                    <?php 
                }
            ?>
        </div><br><br>
        <center><h5>Room Type:-  Double Ac Rooms</h5></center><br>
        <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"370_project");
                $query = "select * from double_ac";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 100px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Room No: <?php echo $row["room_no"]?></div>
                        <div class="card-body">
                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="book_room.php?rn=<?php echo $row['room_no'] . "&rt=d";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                            <a href="unbook.php?rn=<?php echo $row['room_no']. "&rt=d";?>" class="btn btn-danger <?php if($row["status"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "true";}else{echo "false";}?>">Unbook</a>
                        </div>
                    </div>
                    </div>  
                    <?php 
                }
            ?>
        </div>
        <br><br><br><br><br><br>
