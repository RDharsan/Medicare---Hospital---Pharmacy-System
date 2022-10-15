<?php
include 'connect.php';
$App_date=$dr='';
if(isset($_POST['submit'])){
    $Dr_Name=$_POST['Dr_Name'];
    $App_date=$_POST['App_date'];
    $App_time=$_POST['App_time'];
    $status=$_POST['status'];
    $speciality=$_POST['speciality'];
    $patient_name=$_POST['patient_name'];
    

    $sql="insert into `appointment` (Dr_Name,App_date,App_time,status,speciality,patient_name) values ('$Dr_Name', '$App_date', '$App_time','$status', '$speciality','$patient_name')";
    $result=mysqli_query($con, $sql);
    if($result){
        header('location: viewAppointment.php');
    }else{
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">

<head>

<script type="text/javascript" src="validations.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="secondNav.css">
  
    <title>Medicare</title>
</head>

<body>
    <!-- header -->
    <?php
    include('header.php');
    ?>

    <!-- second navigation bar -->
    <div>
        <ul class="secondNav">
            <li><a href="doctor.php" class="list" id="active">Doctor Registration</a></li>
            <li><a href="display.php" class="list">View Doctors</a></li>
            <li><a href="viewAppointment.php" class="list">Appointment</a></li>
            <li><a href="search.php" class="list">Search Doctor</a></li>
            <li><a href="searchApp.php" class="list">Search Appointment</a></li>
            <li><a href="report.php" class="list">Report</a></li>
            <!-- style="margin-left: -60px;" -->
        </ul>

    </div>

    <button type="submit" class="btn btn-primary" style="background-color:#198754; margin-left:25px; margin-top:25px;" onclick="location.href='viewAppointment.php'" name="back">Back</button><br>

    <div class="container my-5">
        <form name="myform" onsubmit="return validateApp()" method="POST">
            <h2 style="text-align:center; margin-top:-15px;"><b>Add Appointment Details</b></h2>
            
            <div class="form-group" style="float:left; width:48%;">
                <label style="font-size: 20px; ">Doctor_Name</label>
                <select style="font-size:15px; " class="form-control" placeholder="Enter Patient" name="Dr_Name" autocomplete="off" required> 
                <option disabled selected>Select Doctor Name</option>
                <option value="Dr.Somiah">Dr.Somiah</option> 
                <option value="DDr.Sreekanth">Dr.Sreekanth</option>
                <option value="Dr.Bandara">Dr.Bandara</option>
                <option value="Dr.Sanjana">Dr.Sanjana</option>
                <option value="Dr.Vasuki">Dr.Vasuki</option>  
                <option value="r.H.K.De S.Kularatne">Dr.H.K.De S.Kularatne</option>
                <option value="r.S.D.Rajamanthri"> Dr.S.D.Rajamanthri</option>
                </select>
            </div>


            
            <div class="form-group" style="float:right; width:48%;">
                <label style="font-size: 20px; ">Appointment_date</label>
                <input type="date" style="font-size:15px; " class="form-control" placeholder="Enter Appointment date" name="App_date" autocomplete="off" required>
              
            </div>


            <div class="form-group" style="float:left; width:48%;">
                <label style="font-size: 20px; ">Appointment_time</label>
                <input type="time" style="font-size:15px;"  class="form-control" placeholder="Enter Appointment time" name="App_time" autocomplete="off" required>
                
            </div>

            <div class="form-group" style="float:right; width:48%;">
                <label style="font-size: 20px; ">Status</label>
                <select style="font-size:15px; " class="form-control" placeholder="Select Status" name="status" autocomplete="off" required>    
                <option disabled selected>Select Doctor Status</option>
                <option value="Available">Available</option> 
                <option value="Unavailable">Unavailable</option>
                <option value="Unknown">Unknown</option>
                <option value="Away">Away</option>
               
                </select>   
            </div>


            <div class="form-group" style="float:left; width:48%;">
                <label style="font-size: 20px; ">Speciality</label>
                <select style="font-size:15px; " class="form-control"  name="speciality" autocomplete="off" required>
                <option disabled selected>Select Doctor Speciality</option>
                <option value="Nephrologist">Nephrologist</option> 
                <option value="Dermatologist">Dermatologist</option>
                <option value="Cardiologist">Cardiologist</option>
                <option value="Endocrinologist">Endocrinologist</option>
                <option value="Gynecologist">Gynecologist</option> 
                <option value="Family Medicine">Family Medicine</option>
                <option value="Clinical Immunology">Clinical Immunology</option>
                <option value="Pediatrics">Pediatrics</option>  
                <option value="Psychiatry">Psychiatry</option>
                <option value="Otolaryngology">Otolaryngology</option>
                <option value="Others">Others</option> 
                </select>
            </div>

            <div class="form-group" style="float:right; width:48%;">
                <label style="font-size: 20px; ">Patient Name</label>
                <input style="font-size: 15px;" type="text" class="form-control" placeholder="Enter Patient name" name="patient_name" autocomplete="off" required>
                <span id="errorpname"></span>
               
            </div>

            
        <button type="submit" class="btn btn-primary" style="background-color:#198754" name="submit">Submit</button>
        <button type="reset" class="btn btn-primary" style="background-color:#198754;margin-left:1%" name="reset">Reset</button>
    </form>


    </div>
    <!-- Footer -->
    <?php
    include('footer.php');
    ?>
</body>

</html>