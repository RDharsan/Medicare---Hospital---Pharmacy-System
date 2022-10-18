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
    <script>
        function validate2() {

            var equipment = document.forms["myform"]["equipment"].value;
            if (equipment == "") {
                alert("please enter valid equipment name!!");
                document.getElementById("errorEq").innerHTML = "<span style='color: red;'><b>" + "*Please enter valid equipment name!!</span>"
                return false;
            } else {
                var ename = /^[a-zA-Z ]*$/;
                if (!ename.test(equipment)) {
                    alert('Equipment name cannot be a number!!!');
                    document.getElementById("errorEq").innerHTML = "<span style='color: red;'><b>" + "*Equipment name cannot be a number!!!</span>"
                    return false;
                }
            }

            var model = document.forms["myform"]["model"].value;
            if (model == "") {
                alert("Please enter the valid model name!!");
                document.getElementById("errorModel").innerHTML = "<span style='color: red;'><b>" + "*Please enter valid model name!!</span>"
                return false;
            } else {
                var modelname = /^[a-zA-Z ]*$/;
                if (!modelname.test(model)) {
                    alert('Invalid Model name given!!!');
                    document.getElementById("errorModel").innerHTML = "<span style='color: red;'><b>" + "*Invalid Model name given!!!</span>"
                    return false;
                }
            }

            var insurance_date = document.forms["myform"]["insurance_date"].value;
            if (insurance_date == "") {
                alert("Please select the valid insurance_date!!");
                document.getElementById("errorIns").innerHTML = "<span style='color: red;'><b>" + "*Please enter valid insurance date!!</span>"
                return false;
            }

            var cost = document.forms["myform"]["cost"].value;
            if (cost == "") {
                document.getElementById("errorCost").innerHTML = "<span  style='color: red;'><b>" + "*Please enter cost amount</b></span>"
                return false;
            } else if (isNaN(cost)) {
                alert("Only Digits are allowed!!")
                document.getElementById("errorCost").innerHTML = "<span  style='color: red;'><b>" + "*Only Digits are allowed</b></span>"
                return false;
            }


           var estimated_lifespan = document.forms["myform"]["estimated_lifespan"].value;
            if (estimated_lifespan == "") {
                document.getElementById("errorlife").innerHTML = "<span  style='color: red;'><b>" + "*Please enter cost amount</b></span>"
                return false;
            } 

            var submit = document.forms["myform"]["submit"].value;
            if (submit == "") {
                alert("Details Updated Sucessfully!!")

            }

        }
    </script>
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
            <li><a href="viewlabequipment.php" class="list" id="active" style="color:white">Lab Equipement Details</a></li>
        </ul>

    </div>
    <button type="submit" class="btn btn-primary" style="background-color:#198754; margin-left:25px; margin-top:25px" onclick="location.href='viewlabequipment.php'" name="back">Back</button><br>
    <div class="container my-5">


        <h1 style="margin-left:35% ;">Edit Equipment Details</h1><br><br><br>



        <form method="POST" name="myform" onsubmit="return validate2()">


            <!-- <div class="form-group w-50"> -->
            <div class="row" style="margin-left:10%">
                <div class="col-md-5" style="margin-bottom:30px ;">
                    <label>Equipment:</label>
                    <!-- <input type="text" class="form-control" placeholder="Enter test tyoe" name="test_type" autocomplete="off" value="<?php echo $test_type ?>"> -->
                    <input type="text" class="form-control" placeholder="Enter equipment name" name="equipment" autocomplete="off" value="<?php echo $equipment ?>">
                    <span id="errorEq"></span>
                </div>
                <div class="col-md-5">
                    <label>Model:</label>
                    <input type="text" class="form-control" placeholder="Enter Equipment Model" name="model" autocomplete="off" value="<?php echo $model ?>">
                    <span id="errorModel"></span>
                    <br>
                </div>

                <!-- <div class="form-group"> -->
                <div class="col-md-5">
                    <label>Insurance Date:</label>
                    <input type="date" class="form-control" placeholder="Select Insurance applied date" name="insurance_date" autocomplete="off" value="<?php echo $insurance_date ?>">
                    <span id="errorIns"></span>
                </div>


                <!-- <div class="form-group"> -->
                <div class="col-md-5">
                    <label>Cost:</label>
                    Rs.<input type="text" class="form-control" placeholder="Enter Amount: Rs.10000" name="cost" autocomplete="off" value="<?php echo $cost ?>">
                    <span id="errorCost"></span>
                </div>

                <!-- <div class="form-group"> -->
                <div class="col-md-5">
                    <br><label>Estimated Lifespan:(Digit)   <span id="errorLife"></span></label>
                    <input type="number" min="0" class="form-control" placeholder="Eg: 10 yrs" name="estimated_lifespan" autocomplete="off" value="<?php echo $estimated_lifespan ?>" required>
                  
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