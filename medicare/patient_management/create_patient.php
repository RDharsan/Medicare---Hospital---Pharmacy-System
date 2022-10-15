<?php
include '../connection/connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $nic = $_POST['nic'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $t_phone = $_POST['t_phone'];

    $sql = "insert into `patient` (name, nic, gender, dob, address, city, t_phone) values ('$name', '$nic', '$gender','$dob','$address','$city','$t_phone')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: view_patient.php');
    } else {
        die(mysqli_error($con));
    }
}

?>



<!doctype html>
<html lang="en">

<head>
<script type="text/javascript">
    function validate(){
    var t_phone = document.forms["myform"]["t_phone"].value;
    if(isNaN(t_phone)){
        document.getElementById("error").innerHTML="<span style='color: red;'>"+"Only digits allowed for Phone number</span>"
        return false;
    }

    else if(t_phone.length>10){
        document.getElementById("error").innerHTML="<span style='color: red;'>"+"Maximum limit is 10 digits</span>"
        return false;
    }

    else if(t_phone.length<10){
        document.getElementById("error").innerHTML="<span style='color: red;'>"+"Maximum limit is 10 digits</span>"
        return false;
    }

    else if(t_phone.charAt(0)==9){
        document.getElementById("error").innerHTML="<span style='color: red;'>"+"Starting number 9 not allowed</span>"
        return false;
    }

} 

</script> 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="secondNav.css">
    <title>Add Patient</title>
</head>

<body>

    <!-- header -->
    <?php
    include('header.php');
    ?>

    <!-- second navigation bar -->
    <div>
        <ul class="secondNav">
        <li><a href="create_patient.php" class="list"  id="active">Register Patient</a></li>
            <li><a href="view_patient.php" class="list">View Patient</a></li>
            <li><a href="view_admission.php" class="list" >Check Up Admission</a></li>
            <li><a href="create_admission.php" class="list" >Add Admission</a></li>
            <li><a href="search.php" class="list">Search Patients</a></li>
            <li><a href="report.php" class="list">Report</a></li>
        </ul>

    </div>
    <div class="container my-5">
        <form name="myform" onsubmit="return validate()" method="POST">
        <h1 style="margin-left:35% ;">Add Patient Details</h1>
            <div class="row" style="margin-left:10%">
                <div class="col-md-5">

                    <br><label>Name</label>
                    <input type="text" class="form-control" placeholder="Enter Your Firstname" name="name"  required autocomplete="off" required>
                </div>
                <div class="col-md-5">
                <br><label>NIC</label>
                    <input type="text" class="form-control" placeholder="Use capital V" name="nic"  required autocomplete="off" required>
                </div>
                <div class="col-md-5">
                <br><label>Gender</label>
                    <select name="gender" id="gender" class="form-control" required>
                        <option disabled selected> Choose Here </option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="col-md-5">
                <br><label>Date of Birth</label>
                    <input type="date" class="form-control" placeholder="Mr/Mrs/Miss.Enter Patient's Name" name="dob"  required autocomplete="off" required>
                </div>
                <div class="col-md-5">
                <br><label>Address</label>
                    <input type="text" class="form-control" placeholder="Enter Patient's Address" name="address"  required autocomplete="off" required>
                </div>
                <div class="col-md-5">
                <br><label>City</label>
                    <input type="text" class="form-control" placeholder="Enter Patient's City" name="city"  required autocomplete="off" required>
                </div>
                <div class="col-md-5">
                <br><label>Phone Number</label>
                    <input type="number" class="form-control" placeholder="Ex:0724705102" name="t_phone"  required autocomplete="off" required>
                    <span id="error"></span>
                </div>
            </div>
                <br>
                <button type="submit" class="btn btn-primary" style="background-color:#198754;margin-left:40%" name="submit">Submit</button>
                <button type="reset" class="btn btn-primary" style="background-color:#198754" name="reset">Reset</button>
        </form>



    </div>
    <!-- Footer -->
    <?php
    include('footer.php');
    ?>
</body>

</html>