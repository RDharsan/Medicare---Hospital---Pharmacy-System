<?php
include '../connection/connect.php';
if (isset($_POST['submit'])) {
    $test_type = $_POST['test_type'];
    $lab_room = $_POST['lab_room'];
    $lab_incharge = $_POST['lab_incharge'];
    $nurse = $_POST['nurse'];
    $test_doneby = $_POST['test_doneby'];
    $test_date = $_POST['test_date'];

    $sql = "insert into `medicaltest` (test_type, lab_room, lab_incharge, nurse, test_doneby, test_date) values ('$test_type', '$lab_room', '$lab_incharge', '$nurse', '$test_doneby', '$test_date')";
    $result = mysqli_query($con, $sql);
    if ($result) {

        header('location: viewmedicaltest.php');
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
    


</head>

<body>

    <!-- header -->
    <?php
    include('header.php');
    ?>

    <!-- second navigation bar -->
    <div>
        <ul class="secondNav">
            <li><a href="addmedicaltest.php" class="list" id="active" style="color:white">Add Medical Test</a></li>
            <li><a href="viewmedicaltest.php" class="list">View Test</a></li>
            <li><a href="index.php" class="list">Report</a></li>
            <li><a href="search.php" class="list">Search Lab</a></li>
            <li><a href="viewlabequipment.php" class="list">Lab Equipement Details</a></li>
        </ul>

    </div>






    <div class="container my-5">
        <form method="POST" name="myform" onsubmit="return validatemedical()">
            <h1 style="margin-left:35% ;">Add Medical Test</h1><br><br><br>
            <!-- <div class="form-group">  -->
            <div class="row" style="margin-left:10%">
                <div class="col-md-5">
                    <label>Test Type</label>
                    <!-- <input type="text" class="form-control" placeholder="Enter test tyoe" name="test_type" autocomplete="off"> -->
                    <select name="test_type" required class="form-control" id="test_type" required="required">
                        <option disabled selected>Choose here</option>
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
                    <br>
                </div>

                <!-- <div class="form-group"> -->
                <div class="col-md-5">
                    <label>Lab room number:</label>
                    <input type="number" class="form-control" min=0 max=100 placeholder="Enter lab room No" name="lab_room" id="lab_room" autocomplete="off" required>
                    <br>
                </div>

                <!-- <div class="form-group"> -->
                <div class="col-md-5">
                    <label>Lab in charge:</label>
                    <!-- <input type="text" class="form-control" placeholder="Ex: Dr.Samara" name="lab_incharge" autocomplete="off" required> -->



                    <?php


                    $sql1 = "select name from `doctor`";
                    $result1 = mysqli_query($con, $sql1);
                    ?>
                    <select name="lab_incharge" class="form-control" id="lab_incharge">
                        <option disabled selected>Choose doctor</option>
                        <?php
                        while ($row1 = mysqli_fetch_array($result1)) {

                        ?>

                            <option><?php echo $row1['name']; ?></option>

                        <?php
                        }
                        ?>
                    </select>

                    <br>
                </div>





                <!-- <div class="form-group"> -->
                <div class="col-md-5">
                    <label>Nurse:</label>
                    <!-- <input type="text" class="form-control" placeholder="Enter Nurse name" name="nurse" autocomplete="off" required> -->

                    <?php


                    $sql1 = "select name from `nurse`";
                    $result1 = mysqli_query($con, $sql1);
                    ?>
                    <select name="nurse" class="form-control" id="nurse">
                        <option disabled selected>Choose here</option>
                        <?php
                        while ($row1 = mysqli_fetch_array($result1)) {

                        ?>

                            <option><?php echo $row1['name']; ?></option>

                        <?php
                        }
                        ?>
                    </select>


                    <br>
                </div>
                <!-- <div class="form-group"> -->
                <div class="col-md-5">
                    <label>Test done by:</label>
                    <!-- <input type="text" class="form-control" placeholder="Dr.madhushanka" name="test_doneby" autocomplete="off" required> -->
                    <?php


                    $sql1 = "select name from `doctor`";
                    $result1 = mysqli_query($con, $sql1);
                    ?>
                    <select name="test_doneby" class="form-control" id="test_doneby">
                        <option disabled selected>Choose here</option>
                        <?php
                        while ($row1 = mysqli_fetch_array($result1)) {

                        ?>

                            <option><?php echo $row1['name']; ?></option>

                        <?php
                        }
                        ?>
                    </select>

                    <br>
                </div>
                <!-- <div class="form-group"> -->
                <div class="col-md-5">
                    <label>Test done date:</label>
                    <input type="date" class="form-control" placeholder="Enter test date" name="test_date" autocomplete="off" id="test_date" required>
                    <br>
                </div>
            </div>
            <br>

            <button type="submit" class="btn btn-primary" style="background-color:#198754;margin-left:40%" name="submit" id="submit">Submit</button>
            <button type="reset" class="btn btn-primary" style="background-color:#198754;margin-left:1%" name="reset">Reset</button>

        </form>

    </div>
    <!-- Footer -->
    <?php
    include('footer.php');
    ?>
</body>

</html>