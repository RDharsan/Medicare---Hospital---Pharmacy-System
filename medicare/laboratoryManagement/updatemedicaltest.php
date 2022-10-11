<?php

include '../connection/connect.php';



$test_id = $_GET['updateid'];
$sql = "select * from `medicaltest` where test_id=$test_id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$test_type = $row['test_type'];
$lab_room = $row['lab_room'];
$lab_incharge = $row['lab_incharge'];
$nurse = $row['nurse'];
$test_doneby = $row['test_doneby'];
$test_date = $row['test_date'];




if (isset($_POST['submit'])) {

    



    $test_type = $_POST['test_type'];
    $lab_room = $_POST['lab_room'];
    $lab_incharge = $_POST['lab_incharge'];
    $nurse = $_POST['nurse'];
    $test_doneby = $_POST['test_doneby'];
    $test_date = $_POST['test_date'];

    $sql = "update `medicaltest` set test_id=$test_id, test_type='$test_type', lab_room='$lab_room', lab_incharge='$lab_incharge', nurse='$nurse', test_doneby='$test_doneby', test_date='$test_date' where test_id=$test_id";
    $result = mysqli_query($con, $sql);
    if ($result) {

        header('location: viewmedicaltest.php');
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
            <li><a href="viewmedicaltest.php" class="list" id="active" style="color:white">View Test</a></li>
            <li><a href="index.php" class="list">Report</a></li>
            <li><a href="search.php" class="list">Search Lab</a></li>
            <li><a href="viewlabequipment.php" class="list">Lab Equipement Details</a></li>
        </ul>

    </div>
    <button type="submit" class="btn btn-primary" style="background-color:#198754; margin-left:25px; margin-top:25px" onclick="location.href='viewmedicaltest.php'" name="back">Back</button><br>
    <div class="container my-5">


        <h1 style="margin-left:35% ;">Edit Test Details</h1><br><br><br>
   
        
        


  
    <form method="POST">


        <!-- <div class="form-group w-50"> -->
        <div class="row" style="margin-left:10%">
            <div class="col-md-5" style="margin-bottom:30px ;">
                <label>Test Type:</label>
                <!-- <input type="text" class="form-control" placeholder="Enter test tyoe" name="test_type" autocomplete="off" value="<?php echo $test_type ?>"> -->
                <select name="test_type" value="<?php echo $test_type ?>" required class="form-control">
                    <option><?php echo $test_type ?></option>
                    <option>BUN</option>
                    <option>Blood Test</option>
                    <option>Infectious disease tests</option>
                    <option>Sexually transmitted infection tests</option>
                    <option>Tumor and cancer marker tests</option>
                    <option>ANA</option>
                    <option>CRP</option>
                    <option>Nutrient and vitamin level tests</option>
                    <option>Hormone level tests</option>
                    <option>Cholesterol level tests</option>
                </select>
            </div>
            <div class="col-md-5" style="margin-bottom:30px ;">
                <label>Lab room number:</label>
                <input type="number" class="form-control" min=0 placeholder="Enter lab room No" name="lab_room" autocomplete="off" value="<?php echo $lab_room ?>" required>
            </div>
            <div class="col-md-5" style="margin-bottom:30px ;">
                <label>Lab in charge:</label>
                <!-- <input type="text" class="form-control"placeholder="Ex: Dr.Samara" name="lab_incharge" autocomplete="off" value="<?php echo $lab_incharge ?>" required> -->
                <?php


                $sql1 = "select name from `doctor`";
                $result1 = mysqli_query($con, $sql1);
                ?>
                <select name="lab_incharge" class="form-control">
                    <option><?php echo $lab_incharge ?></option>
                    <?php
                    while ($row1 = mysqli_fetch_array($result1)) {

                    ?>

                        <option><?php echo $row1['name']; ?></option>

                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-5" style="margin-bottom:30px ;">
                <label>Nurse:</label>
                <!-- <input type="text" class="form-control" placeholder="Enter Nurse name" name="nurse" autocomplete="off" value="<?php echo $nurse ?>" required> -->
                <?php


                $sql1 = "select name from `nurse`";
                $result1 = mysqli_query($con, $sql1);
                ?>
                <select name="nurse" class="form-control">
                    <option><?php echo $nurse ?></option>
                    <?php
                    while ($row1 = mysqli_fetch_array($result1)) {

                    ?>

                        <option><?php echo $row1['name']; ?></option>

                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-5" style="margin-bottom:30px ;">
                <label>Test done by:</label>
                <!-- <input type="text" class="form-control" placeholder="Ex: Dr.madhushanka" name="test_doneby" autocomplete="off" value="<?php echo $test_doneby ?>" required> -->
                <?php


                $sql1 = "select name from `doctor`";
                $result1 = mysqli_query($con, $sql1);
                ?>
                <select name="test_doneby" class="form-control">
                    <option><?php echo $test_doneby ?></option>
                    <?php
                    while ($row1 = mysqli_fetch_array($result1)) {

                    ?>

                        <option><?php echo $row1['name']; ?></option>


                    <?php
                    }

                    ?>
                </select>
            </div>
            <div class="col-md-5" style="margin-bottom:30px ;">
                <label>Test done date:</label>
                <input type="date" class="form-control" placeholder="Enter test date" name="test_date" autocomplete="off" value="<?php echo $test_date ?>" required>
            </div>
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary" onclick="msgupt()" style="background-color:#198754;margin-left:40%" name="submit">Update</button>
        <button type="reset" class="btn btn-primary" style="background-color:#198754;margin-left:1%" name="reset">Reset</button>
    </form>

    </div>
    <!-- Footer -->
    <?php
    include('footer.php');
    ?>
</body>

</html>