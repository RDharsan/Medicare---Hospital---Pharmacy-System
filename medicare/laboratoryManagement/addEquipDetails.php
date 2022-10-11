<?php

include '../connection/connect.php';

$equipmentErr = $modelErr = $insurance_dateErr = $costErr = $estimated_lifespanErr = "";

if (isset($_POST['submit'])) {


    if (empty($_POST['equipment'])) {
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    } else {
        $equipment = $_POST['equipment'];
    }




    // $equipment = $_POST['equipment'];
    $model = $_POST['model'];
    $insurance_date = $_POST['insurance_date'];
    $cost = $_POST['cost'];
    $estimated_lifespan = $_POST['estimated_lifespan'];


    $sql = "insert into `labequipment` (equipment, model, insurance_date, cost, estimated_lifespan) values ('$equipment', '$model', '$insurance_date', '$cost', '$estimated_lifespan')";
    $result = mysqli_query($con, $sql);
    if ($result) {

        header('location: viewlabequipment.php');
    } else {

        die(mysqli_error($con));
    }
}



?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="secondNav.css">

    <title>Medicare</title>
    <link rel="icon" type="image/x-icon" href="../logo.jpg">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript"></script>
    <script type="text/javascript" src="index.js"></script>

    

    



</head>

<body>

    <!-- header -->
    <?php
    include('header.php');
    ?>

    <!-- second navigation bar -->
    <div>
        <ul class="secondNav">
            <li><a href="addmedicaltest.php" class="list">Add Medical Test</a></li>
            <li><a href="viewmedicaltest.php" class="list">View Test</a></li>
            <li><a href="index.php" class="list">Report</a></li>
            <li><a href="search.php" class="list">Search Lab</a></li>
            <li><a href="viewlabequipment.php" id="active" class="list" style="color:white">Lab Equipement Details</a></li>
        </ul>


    </div>

    <button type="submit" class="btn btn-primary" style="background-color:#198754; margin-left:25px; margin-top:25px" onclick="location.href='viewlabequipment.php'" name="back">Back</button><br>





    <div class="container my-5">
        <form method="POST" autocomplete="off" name="myform" onsubmit="return validate()">
            <h1 style="margin-left:25% ;">Add Lab Equipment Details</h1><br><br><br>
            <!-- <div class="form-group">  -->
            <div class="row" style="margin-left:10%">
                <div class="col-md-5">
                    <label>Equipment:</label>
                    <input type="text" class="form-control" placeholder="Enter equipment name" name="equipment" id="equipment" autocomplete="off">


                    <br>
                </div>

                <!-- <div class="form-group"> -->
                <div class="col-md-5">
                    <label>Model:</label>
                    <input type="text" class="form-control" placeholder="Enter Equipment Model" name="model" id="model" autocomplete="off">

                    <br>

                </div>

                <!-- <div class="form-group"> -->
                <div class="col-md-5">
                
                        <label>Insurance Date:</label>
                        <input type="date" min="2021-01-01" onchange="datepick()" placeholder="Select Insurance applied date" class="form-control" name="insurance_date" id="insurance_date" autocomplete="off">
                 
                </div>


                <!-- <div class="form-group"> -->
                <div class="col-md-5">
                    <label>Cost:</label>
                    Rs.<input type="number" class="form-control" placeholder="Enter Amount: Rs.10000" min="0" name="cost" id="cost" autocomplete="off">
                </div>

                <!-- <div class="form-group"> -->
                <div class="col-md-5">
                    <br><label>Estimated Lifespan:(Digit)</label>
                    <input type="number" class="form-control" placeholder="Eg: 10 yrs" min="0" name="estimated_lifespan" id="estimated_lifespan" autocomplete="off">


                </div>

            </div>
            <br>

            <button type="submit" class="btn btn-primary" style="background-color:#198754;margin-left:40%" name="submit" id="register">Submit</button>

            <button type="reset" class="btn btn-primary" style="background-color:#198754;margin-left:1%" name="reset">Reset</button>

        </form>

    </div>
    <!-- Footer -->
    <?php
    include('footer.php');
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  

  

</body>

</html>