<?php
include '../connection/connect.php';
if (isset($_POST['submit'])) {
    $pid = $_POST['pid'];
    $telephone = $_POST['telephone'];
    $a_date = $_POST['a_date'];
    $a_time = $_POST['a_time'];
    $checkup_type = $_POST['checkup_type'];
    $consulting_doc = $_POST['consulting_doc'];
    

    $sql = "insert into `admission` (pid, telephone, a_date, a_time, checkup_type, consulting_doc) values ('$pid', '$telephone', '$a_date','$a_time','$checkup_type','$consulting_doc')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: view_admission.php');
    } else {
        die(mysqli_error($con));
    }
}

?>



<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="secondNav.css">
    <title>Add Patient</title>
</head>

<!-- <script type="text/javascript">
    function validate(){
    var phone = document.forms["myform"]["telephone"].value;
    if(isNaN(telephone)){
        document.getElementById("error").innerHTML="<span style='color: red;'>"+"Only digits allowed for Phone number</span>"
        return false;
    }

    else if(telephone.length>10){
        document.getElementById("error").innerHTML="<span style='color: red;'>"+"Maximum limit is 10 digits</span>"
        return false;
    }

    else if(telephone.length<10){
        document.getElementById("error").innerHTML="<span style='color: red;'>"+"Maximum limit is 10 digits</span>"
        return false;
    }

    else if(telephone.charAt(0)==9){
        document.getElementById("error").innerHTML="<span style='color: red;'>"+"Starting number 9 not allowed</span>"
        return false;
    }
 </script>    -->

<body>

    <!-- header -->
    <?php
    include('header.php');
    ?>

    <!-- second navigation bar -->
    <div>
        <ul class="secondNav">
            <li><a href="create_patient.php" class="list">Register Patient</a></li>
            <li><a href="view_patient.php" class="list">View Patient</a></li>
            <li><a href="view_admission.php" class="list" >Check Up Admission</a></li>
            <li><a href="create_admission.php" class="list" id="active" >Add Admission</a></li>
            <li><a href="search.php" class="list">Search Patients</a></li>
            <li><a href="report.php" class="list">Report</a></li>
        </ul>

    </div>
    <div class="container my-5">
        <form name="myform" onsubmit="return validate()"  method="POST" >
        <h1 style="margin-left:35% ;">Add Patient Details</h1>
            <div class="row" style="margin-left:10%">
                <div class="col-md-5">

                    <br><label>Patient ID</label>
                    <input type="text" class="form-control" placeholder="Enter Patient ID" name="pid" autocomplete="off" required>
                </div>
                <div class="col-md-5">
                <br><label>Patient Telephone number</label>
                    <input type="text" class="form-control" placeholder="Enter Patient Telephone number" name="telephone" autocomplete="off" required>
                    <span id="error"></span>
                </div>
                <div class="col-md-5">
                <br><label>Admission Date</label>
                    <input type="date" class="form-control" placeholder="Select admission date" name="a_date" autocomplete="off" required>
                </div>
                <div class="col-md-5">
                <br><label>Admission Time</label>
                    <input type="time" class="form-control" placeholder="Select Admission Time" name="a_time" autocomplete="off" required>
                </div>
                <div class="col-md-5">
                <br><label>Check Up Type</label>
                    <select name="checkup_type" id="checkup_type" class="form-control" autocomplete="off" required>
                        <option disabled selected> Choose Here </option>
                        <option value="OPD">OPD</option>
                        <option value="Blood Test">Blood Test</option>
                        <option value="Urine Test">Urine Test</option>
                        <option value="Eye Check up">Eye Check up</option>
                        <option value="ECG">ECG</option>
                        <option value="Cholestrol Check">Cholestrol Check</option>

                    </select>
                </div>
                <div class="col-md-5">
                <br><label>Consulting Doctor</label>
                <select class="form-control"  name="consulting_doc" autocomplete="off" required>
                <option disabled selected>Select Consulting Doctor</option>
                <option value="Dr.Somiah">Dr.W.A.S De Silva</option> 
                <option value="Dr.Sreekanth">Dr.B.G.N.Rathnasena</option>
                <option value="Dr.Bandara">Dr.P.N.Rajapakshe</option>
                <option value="Dr.Sanjana">Dr.Sanjana</option>
                <option value="Dr.Vasuki">Dr.Vasuki</option>  
                <option value="Dr.Bandara"> Prof. Anoja Abeyjeewa.</option>
                <option value="Dr.Sanjana">Dr.H.K.De S.Kularatne</option>
                <option value="Dr.Vasuki"> Dr.S.D.Rajamanthri</option>
                <option value="Dr.Sanjana">Dr.B.D.A.Perera</option>
                <option value="Dr.Vasuki">Prof.Nirmala </option>
                <option value="Others">Others</option>  
                </select>
            
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