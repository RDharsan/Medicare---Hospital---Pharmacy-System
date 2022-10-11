<?php

include '../connection/connect.php';



$equipment_id = $_GET['updateid'];
$sql = "select * from `labequipment` where equipment_id=$equipment_id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$equipment = $row['equipment'];
$model = $row['model'];
$insurance_date = $row['insurance_date'];
$cost = $row['cost'];
$estimated_lifespan = $row['estimated_lifespan'];



if (isset($_POST['submit'])) {

    



    $equipment = $_POST['equipment'];
    $model = $_POST['model'];
    $insurance_date = $_POST['insurance_date'];
    $cost = $_POST['cost'];
    $estimated_lifespan = $_POST['estimated_lifespan'];

    $sql = "update `labequipment` set equipment_id=$equipment_id, equipment='$equipment', model='$model', insurance_date='$insurance_date', cost='$cost', estimated_lifespan='$estimated_lifespan' where equipment_id=$equipment_id";
    $result = mysqli_query($con, $sql);
    if ($result) {

        header('location: viewlabequipment.php');
    } else {
        die(mysqli_error($con));
    }
}


?>





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
            <li><a href="viewmedicaltest.php" class="list" >View Test</a></li>
            <li><a href="index.php" class="list">Report</a></li>
            <li><a href="search.php" class="list">Search Lab</a></li>
            <li><a href="viewlabequipment.php" class="list" id="active" style="color:white">Lab Equipement Details</a></li>
        </ul>

    </div>
    <button type="submit" class="btn btn-primary" style="background-color:#198754; margin-left:25px; margin-top:25px" onclick="location.href='viewlabequipment.php'" name="back">Back</button><br>
    <div class="container my-5">


        <h1 style="margin-left:35% ;">Edit Equipment Details</h1><br><br><br>
   

  
    <form method="POST" name="myform" onsubmit="return updatevalidate()">


        <!-- <div class="form-group w-50"> -->
        <div class="row" style="margin-left:10%">
            <div class="col-md-5" style="margin-bottom:30px ;">
                <label>Equipment:</label>
                <!-- <input type="text" class="form-control" placeholder="Enter test tyoe" name="test_type" autocomplete="off" value="<?php echo $test_type ?>"> -->
                <input type="text" class="form-control" placeholder="Enter equipment name" name="equipment" autocomplete="off" required value="<?php echo $equipment?>">

            </div>
            <div class="col-md-5">
                    <label>Model:</label>
                    <input type="text" class="form-control"  placeholder="Enter Equipment Model" name="model" autocomplete="off" value="<?php echo $model?>" required>
                    <br>
                </div>

                <!-- <div class="form-group"> -->
                <div class="col-md-5">
                    <label>Insurance Date:</label>
                    <input type="date" class="form-control" placeholder="Select Insurance applied date" name="insurance_date" autocomplete="off" value="<?php echo $insurance_date?>"required>
                </div>

      
                <!-- <div class="form-group"> -->
                <div class="col-md-5">
                    <label>Cost:</label>
                    Rs.<input type="number" class="form-control" placeholder="Enter Amount: Rs.10000" min="0" name="cost" autocomplete="off" value="<?php echo $cost?>" required>
                </div>

                <!-- <div class="form-group"> -->
                <div class="col-md-5">
                    <br><label>Estimated Lifespan:(Digit)</label>
                    <input type="number" class="form-control" placeholder="Eg: 10 yrs" min="0"  name="estimated_lifespan" autocomplete="off" value="<?php echo $estimated_lifespan?>" required>
                   
                </div>
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary" style="background-color:#198754;margin-left:40%" name="submit">Update</button>
        <button type="reset" class="btn btn-primary" style="background-color:#198754;margin-left:1%" name="reset">Reset</button>
    </form>

    </div>
    <!-- Footer -->
    <?php
    include('footer.php');
    ?>
</body>

</html>