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
    <!-- <script type="text/javascript" src="index.js"></script> -->

    <script>
        function validatemedical2() {

            var test_type = document.forms["myform"]["test_type"].value;
            if (test_type == "") {
                alert("please enter valid Test Type name!!");
                document.getElementById("errorType").innerHTML = "<span style='color: red;'><b>" + "*Please enter/select valid Test Type!!</span>"
                return false;
            } else {
                var ename = /^[a-zA-Z ]*$/;
                if (!ename.test(test_type)) {
                    alert('Test Type cannot be a number!!!');
                    document.getElementById("errorType").innerHTML = "<span style='color: red;'><b>" + "*Test Type cannot be a number!!!</span>"
                    return false;
                }
            }

            var lab_room = document.forms["myform"]["lab_room"].value;
            // if (lab_room == "") {
            //     alert("Please enter the valid lab_room number!!");
            //     document.getElementById("errorLab").innerHTML = "<span style='color: red;'>" + "*Please enter valid Lab room number!!</span>"

            //     return false;
            // }
            if (lab_room == "") {
                document.getElementById("errorLab").innerHTML = "<span  style='color: red;'><b>" + "*Please enter Lab room number</b></span>"
                return false;
            } else if (isNaN(lab_room)) {
                alert("Only Digits are allowed!!")
                document.getElementById("errorLab").innerHTML = "<span  style='color: red;'><b>" + "*Only Digits are allowed</b></span>"
                return false;
            }


            var lab_incharge = document.forms["myform"]["lab_incharge"].value;
            if (lab_incharge == "") {
                alert("please enter/select valid doctor name!!");
                document.getElementById("errorIn").innerHTML = "<span style='color: red;'><b>" + "*please enter/select valid doctor name!!</span>"
                return false;
            } else {
                var ename = /^[a-zA-Z ]*$/;
                ename.trim();
                if (!ename.test(lab_incharge)) {
                    alert('In-charge name cannot be a number!!!');
                    document.getElementById("errorIn").innerHTML = "<span style='color: red;'><b>" + "*In-Charge name cannot be a number!!!</span>"
                    return false;
                }
            }

            var nurse = document.forms["myform"]["nurse"].value;
            if (nurse == "") {
                alert("please enter/select valid nurse name!!");
                document.getElementById("errorNurse").innerHTML = "<span style='color: red;'><b>" + "*please enter/select valid nurse name!!</span>"
                return false;
            } else {
                var ename = /^[a-zA-Z ]*$/;
             
                if (!ename.test(nurse)) {
                    alert('Nurse name cannot be a number!!!');
                    document.getElementById("errorNurse").innerHTML = "<span style='color: red;'><b>" + "*Nurse name cannot be a number!!!</span>"
                    return false;
                }
            }

            var test_doneby = document.forms["myform"]["test_doneby"].value;
            if (test_doneby == "") {
                alert("please enter/select valid doctor name!!");
                document.getElementById("errorDoneBy").innerHTML = "<span style='color: red;'><b>" + "*please enter/select valid doctor name!!</span>"
                return false;
            } else {
                var ename = /^[a-zA-Z ]*$/;
             
                if (!ename.test(test_doneby)) {
                    alert('Name cannot be a number!!!');
                    document.getElementById("errorDoneBy").innerHTML = "<span style='color: red;'><b>" + "*Name cannot be a number!!!</span>"
                    return false;
                }
            }

            var test_date = document.forms["myform"]["test_date"].value;
            if (test_date == "") {
                alert("Please select the valid date!!");
                document.getElementById("errorDate").innerHTML = "<span style='color: red;'><b>" + "*Please enter valid date!!</span>"
                return false;
            }

            var submit = document.forms["myform"]["submit"].value;
            if (submit == "") {
                alert("Details added sucessfully!!")

            }


            if (select == "") {
                alert("Please select a selection");
                return false;


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
            <li><a href="addmedicaltest.php" class="list" id="active" style="color:white">Add Medical Test</a></li>
            <li><a href="viewmedicaltest.php" class="list">View Test</a></li>
            <li><a href="index.php" class="list">Report</a></li>
            <li><a href="search.php" class="list">Search Lab</a></li>
            <li><a href="viewlabequipment.php" class="list">Lab Equipement Details</a></li>
        </ul>

    </div>






    <div class="container my-5">
        <form method="POST" name="myform" onsubmit="return validatemedical2()">
            <h1 style="margin-left:35% ;">Add Medical Test</h1><br><br><br>
            <!-- <div class="form-group">  -->
            <div class="row" style="margin-left:10%">
                <div class="col-md-5">
                    <label>Test Type</label>
                    <!-- <input type="text" class="form-control" placeholder="Enter test tyoe" name="test_type" autocomplete="off"> -->
                    <!-- <select name="test_type" required class="form-control" id="test_type">
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
                    </select> -->

                    <input type="text" class="form-control" name="test_type" list="testType" autocomplete="off" placeholder="Enter/select test type" >
                    <datalist id="testType" name="test_type" >
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
                    </datalist>
                    <span id="errorType"></span>
                    <br>
                </div>

                <!-- <div class="form-group"> -->
                <div class="col-md-5">
                    <label>Lab room number:</label>
                    <input type="text" class="form-control"  placeholder="Enter lab room No" name="lab_room" id="lab_room" autocomplete="off">
                    <span id="errorLab"></span>
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
                    <input type="text" class="form-control" name="lab_incharge" list="lab_incharge" autocomplete="off" placeholder="Enter/select Lab Incharge Name">

                    <!-- <select name="lab_incharge" class="form-control" id="lab_incharge"> -->
                    <datalist name="lab_incharge" id="lab_incharge">
                        <option disabled selected>Choose doctor</option>
                        <?php
                        while ($row1 = mysqli_fetch_array($result1)) {

                        ?>

                            <option><?php echo $row1['name']; ?></option>

                        <?php
                        }
                        ?>
                    </datalist>
                    <!-- </select> -->
                    <span id="errorIn"></span>

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
                    <input type="text" class="form-control" name="nurse" list="nurse" autocomplete="off" placeholder="Enter/select Nurse Name">

                    <datalist name="nurse" id="nurse">
                        <option disabled selected>Choose here</option>
                        <?php
                        while ($row1 = mysqli_fetch_array($result1)) {

                        ?>

                            <option><?php echo $row1['name']; ?></option>

                        <?php
                        }
                        ?>
                    </datalist>
                    <span id="errorNurse"></span>


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
                    <input type="text" class="form-control" name="test_doneby" list="test_doneby" autocomplete="off" placeholder="Enter/select test done doctor Name">

                    <datalist name="test_doneby" id="test_doneby">
                        <option disabled selected>Choose here</option>
                        <?php
                        while ($row1 = mysqli_fetch_array($result1)) {

                        ?>

                            <option><?php echo $row1['name']; ?></option>

                        <?php
                        }
                        ?>
                    </datalist>
                    <span id="errorDoneBy"></span>

                    <br>
                </div>
                <!-- <div class="form-group"> -->
                <div class="col-md-5">
                    <label>Test done date:</label>
                    <input type="date" class="form-control" placeholder="Enter test date" name="test_date" autocomplete="off" id="test_date" required>
                    <span id="errorDate"></span>
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