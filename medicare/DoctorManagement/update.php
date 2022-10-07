<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `doctor` where id=$id";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_assoc($result);
$name = $row['name'];
$address = $row['address'];
$phone = $row['phone'];
$email = $row['email'];
$position = $row['position'];
$medicalschool = $row['medicalschool'];
$speciality = $row['speciality'];
$director = $row['director'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $position=$_POST['position'];
    $medicalschool=$_POST['medicalschool'];
    $speciality=$_POST['speciality'];
    $director=$_POST['director'];

    $sql="update `doctor` set id=$id, name='$name', address='$address', phone='$phone',email='$email', position='$position',medicalschool='$medicalschool',speciality='$speciality',director='$director' where id=$id";
    $result=mysqli_query($con, $sql);
    if($result){
        
        header('location: display.php');
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
            <li><a href="report.php" class="list"> Report</a></li>
        </ul>

    </div>
    <button type="submit" class="btn btn-primary" style="background-color:#198754; margin-left:25px; margin-top:25px" onclick="location.href='display.php'" name="back">Back</button><br>

    <h2 class="h2edit"> Edit Doctor Details</h2>
    <div class="container my-5">
        <form method="POST">
        <h2>Personal Information</h2>
        <div class="form-group" style="float:left; width:48%;">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off" value="<?php echo $name?>">
            </div>
            <div class="form-group" style="float:right; width:48%;">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Enter Your address" name="address" autocomplete="off" value="<?php echo $address?>">
            </div>
            <div class="form-group" style="float:left; width:48%;">
                <label>Phone</label>
                <input type="text" class="form-control" placeholder="Enter Your Phone Number" name="phone" autocomplete="off" value="<?php echo $phone?>">
            </div>

            <div class="form-group" style="float:right; width:48%;">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off" value="<?php echo $email?>">
            </div>

<br>
<br>
            <h2>Professional Information</h2>
            <div class="form-group" style="float:left; width:48%;">
                <label>Position</label>
                <select class="form-control" placeholder="Select Your Position" name="position" autocomplete="off">
                <option><?php echo $position ?></option>
                <option value="Physician">Physician</option> 
                <option value="Surgeon">Surgeon</option>
                <option value="Neutritionist">Neutritionist</option>
                <option value="General">General</option>
                <option value="OPD">OPD</option>
                </select>
            
            </div>

            <div class="form-group" style="float:right; width:48%;">
                <label>Medical_School</label>
                <select class="form-control" placeholder="Select Your Medi-School" name="medicalschool" autocomplete="off">
                <option><?php echo $medicalschool ?></option>
                <option value="Jayawardanapura University">Jayawardanapura University</option> 
                <option value="Colombo University">Colombo University</option>
                <option value="Jaffna University">Jaffna University</option>
                <option value="Kelani University">Kelani University</option>
                <option value="Wayamba University">Wayamba University</option>    
                </select>
            </div>


            <div class="form-group" style="float:left; width:48%;">
                <label>Speciality</label>
                <select  class="form-control" placeholder="Select Your Speciality" name="speciality" autocomplete="off" >
                <option><?php echo $speciality ?></option>
                <option value="Nephrologist">Nephrologist</option> 
                <option value="Dermatologist">Dermatologist</option>
                <option value="Cardiologist">Cardiologist</option>
                <option value="Endocrinologist">Endocrinologist</option>
                <option value="Gynecologist">Gynecologist</option>
                </select>
            </div>

            <div class="form-group" style="float:right; width:48%;">
                <label>Program Director</label>
                <select class="form-control" placeholder="Select Your Director" name="director" autocomplete="off">
                <option><?php echo $director ?></option>
                <option value="Dr.Somiah">Dr.Somiah</option> 
                <option value="Dr.Sreekanth">Dr.Sreekanth</option>
                <option value="Dr.Bandara">Dr.Bandara</option>
                <option value="Dr.Sanjana">Dr.Sanjana</option>
                <option value="Dr.Vasuki">Dr.Vasuki</option>  
                </select>
            </div>




            <button type="submit" class="btn btn-primary" style="background-color:#198754; margin-left: 500px;" name="submit">Update</button>
            <button type="reset" class="btn btn-primary" style="background-color:#198754" name="reset">Reset</button>
        </form>

    </div>
    <!-- Footer -->
    <?php
    include('footer.php');
    ?>
</body>

</html>