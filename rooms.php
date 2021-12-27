<!doctype html>
<html lang="en">
        <head>
        <title>Hamim Resting PLace</title>
        <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.css">
    </head>
    <body style="background: linear-gradient(#54a6d6, #c0caf5, #5a88d1)">

        <br><br><br><br><br><br> 
        <div class="row">
            <div class="col-md-12">
                <center><h1>Room Booking Page</h1></center>
            <div> 
        </div>
        <br><br>
        <center><h5>Room Type :- Single Non-AC Rooms</h5></center>
        <br><br>
        <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"370_project");
                $query = "select * from single_non_ac";
                $query_run = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <div class="col-md-2" style="margin-left: 100px;">
                        <div class="card bg-light" style="width: 300px;">
                            <div class="card-header">Room no:<?php echo $row['room_no'];?></div>
                            <div class="card-body">
                                <p class="card-text">Room Status:<?php if($row['status'] == 0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                                <a href="admin/book_room.php" class="btn btn-primary <?php if($row['status']==0){echo "active";}else{echo "disabled";}?>">Book</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }   
            ?> 
        </div>
        <br><br>
        <center><h5>Room Type :- Single AC Rooms</h5></center>
        <br><br>
        <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"370_project");
                $query = "select * from single_ac";
                $query_run = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <div class="col-md-2" style="margin-left: 100px;">
                        <div class="card bg-light" style="width: 300px;">
                            <div class="card-header">Room no:<?php echo $row['room_no'];?></div>
                            <div class="card-body">
                                <p class="card-text">Room Status:<?php if($row['status'] == 0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                                <a href="admin/book_room.php" class="btn btn-primary <?php if($row['status']==0){echo "active";}else{echo "disabled";}?>">Book</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }   
            ?> 
        </div>
        <br><br>
        <center><h5>Room Type :- Double Non-AC Rooms</h5></center>
        <br><br>
        <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"370_project");
                $query = "select * from double_non_ac";
                $query_run = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <div class="col-md-2" style="margin-left: 100px;">
                        <div class="card bg-light" style="width: 300px;">
                            <div class="card-header">Room no:<?php echo $row['room_no'];?></div>
                            <div class="card-body">
                                <p class="card-text">Room Status:<?php if($row['status'] == 0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                                <a href="admin/book_room.php" class="btn btn-primary <?php if($row['status']==0){echo "active";}else{echo "disabled";}?>">Book</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }   
            ?> 
        </div>
        <br><br>
        <center><h5>Room Type :- Double AC Rooms</h5></center>
        <br><br>
        <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"370_project");
                $query = "select * from double_ac";
                $query_run = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <div class="col-md-2" style="margin-left: 100px;">
                        <div class="card bg-light" style="width: 300px;">
                            <div class="card-header">Room no:<?php echo $row['room_no'];?></div>
                            <div class="card-body">
                                <p class="card-text">Room Status:<?php if($row['status'] == 0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                                <a href="admin/book_room.php" class="btn btn-primary <?php if($row['status']==0){echo "active";}else{echo "disabled";}?>">Book</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }   
            ?> 
        </div><br><br><br><br><br><br>
