<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `appointment` where id=$id";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);
$Dr_Name = $row['Dr_Name'];
$App_date = $row['App_date'];
$App_time = $row['App_time'];
$status = $row['status'];
$speciality = $row['speciality'];
$patient_name = $row['patient_name'];


if(isset($_POST['submit'])){
    $Dr_Name=$_POST['Dr_Name'];
    $App_date=$_POST['App_date'];
    $App_time=$_POST['App_time'];
    $status=$_POST['status'];
    $speciality=$_POST['speciality'];
    $patient_name=$_POST['patient_name'];
    
    $sql="update `appointment` set id=$id, Dr_Name='$Dr_Name', App_date='$App_date', App_time='$App_time',status='$status', speciality='$speciality',patient_name='$patient_name' where id=$id";
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
            <li><a href="doctor.php" class="list">Doctor Registration</a></li>
            <li><a href="display.php" class="list" id="active">View Doctors</a></li>
            <li><a href="viewAppointment.php" class="list">Appointment</a></li>
            <li><a href="search.php" class="list">Search Doctor</a></li>
            <li><a href="searchApp.php" class="list">Search Appointment</a></li>
            <li><a href="report.php" class="list">Report</a></li>
            <!-- style="margin-left: -60px;" -->
        </ul>

    </div>
    <button type="submit" class="btn btn-primary" style="background-color:#198754; margin-left:25px; margin-top:25px" onclick="location.href='viewAppointment.php'" name="back">Back</button><br>

    <h2 class="h2edit" style="text-align:center;"><b>  Edit Appointment Details</b> </h2>
    <div class="container my-5">
        <form method="POST">
        
        <div class="form-group" style="float:left; width:48%;">
                <label style="font-size: 20px; ">Doctor_Name</label>
                <select style="font-size:15px; " class="form-control" placeholder="Enter Patient" name="Dr_Name" autocomplete="off">
                 <option><?php echo $Dr_Name?></option>
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
                <label style="font-size:20px; ">Appointment_date</label>   
                <input  style="font-size:15px;" type="date" class="form-control" placeholder="Enter Appointment date" name="App_date" autocomplete="off" value="<?php echo $App_date?>">
            </div>


            <div class="form-group" style="float:left; width:48%;">
                <label style="font-size:20px; ">Appointment_time</label>
                <input style="font-size:15px; " type="time" class="form-control" placeholder="Enter Appointment time" name="App_time" autocomplete="off" value="<?php echo $App_time?>">
            </div>

          
            <div class="form-group" style="float:right; width:48%;">
                <label style="font-size: 20px; ">Status</label>
                <select style="font-size:15px; " class="form-control" placeholder="Select Status" name="status" autocomplete="off">
                <option><?php echo $status ?></option>
                <option value="Available">Available</option> 
                <option value="Unavailable">Unavailable</option>
                <option value="Unknown">Unknown</option>
                <option value="Away">Away</option>
                </select>
            
            </div>

         
            <div class="form-group" style="float:left; width:48%;">
                <label style="font-size: 20px; ">Speciality</label>
                <select style="font-size:15px; "  class="form-control" placeholder="Select Your Speciality" name="speciality" autocomplete="off" >
                <option><?php echo $speciality ?></option>
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
                <input style="font-size: 15px;" type="text" class="form-control" placeholder="Enter Patient name" name="patient_name" autocomplete="off" value="<?php echo $patient_name?>">
                <span id="errorpname"></span>
            </div>




            <button type="submit" class="btn btn-primary" style="background-color:#198754; margin-left: 500px;" name="submit">Update</button>
            <button type="reset" class="btn btn-primary" style="background-color:#198754;margin-left:1%" name="reset">Reset</button>
        </form>

    </div>
    <!-- Footer -->
    <?php
    include('footer.php');
    ?>
</body>

</html>