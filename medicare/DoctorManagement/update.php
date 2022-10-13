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

<script type="text/javascript">
    function validate(){
    var phone = document.forms["myform"]["phone"].value;
    if(isNaN(phone)){
        document.getElementById("error").innerHTML="<span style='color: red;'>"+"Only digits allowed for Phone number</span>"
        return false;
    }

    else if(phone.length>10){
        document.getElementById("error").innerHTML="<span style='color: red;'>"+"Maximum limit is 10 digits</span>"
        return false;
    }

    else if(phone.length<10){
        document.getElementById("error").innerHTML="<span style='color: red;'>"+"Maximum limit is 10 digits</span>"
        return false;
    }

    else if(phone.charAt(0)==9){
        document.getElementById("error").innerHTML="<span style='color: red;'>"+"Starting number 9 not allowed</span>"
        return false;
    }



    var email = document.forms["myform"]["email"].value;
    
    var re = /^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/;
    var x=re.test(email);
    if(x){
        
    }
    else{
        document.getElementById("errormail").innerHTML="<span style='color: red;'>"+"Mail id is not in correct format</span>"
        return false;
    }


  }

</script>




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

    <h2 class="h2edit" style="text-align:center;"><b> Edit Doctor Details</b> </h2>
    <div class="container my-5">
        <form name="myform" onsubmit="return validate()" method="POST">
        
        <h2>Personal Information</h2>
        <div class="form-group" style="float:left; width:48%;">
                <label style="font-size: 20px; ">Name</label>
                <input style="font-size:15px; " type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off" value="<?php echo $name?>">
            </div>
            <div class="form-group" style="float:right; width:48%;">
                <label style="font-size: 20px; ">Address</label>
                <input style="font-size:15px; " type="text" class="form-control" placeholder="Enter Your address" name="address" autocomplete="off" value="<?php echo $address?>">
            </div>
            <div class="form-group" style="float:left; width:48%;">
                <label style="font-size: 20px; ">Phone</label>
                <input style="font-size:15px; " type="text" class="form-control" placeholder="Enter Your Phone Number" name="phone" autocomplete="off" value="<?php echo $phone?>">
                <span id="error"></span>
            </div>

            <div class="form-group" style="float:right; width:48%;">
                <label style="font-size: 20px; ">Email</label>
                <input style="font-size:15px; " type="text" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off" value="<?php echo $email?>">
                <span id="errormail"></span>
            </div>

<br>
<br>
            <h2>Professional Information</h2>
            <div class="form-group" style="float:left; width:48%;">
                <label style="font-size: 20px; ">Position</label>
                <select style="font-size:15px; " class="form-control" placeholder="Select Your Position" name="position" autocomplete="off">
                <option><?php echo $position ?></option>
                <option value="Physician">Physician</option> 
                <option value="Surgeon">Surgeon</option>
                <option value="Neutritionist">Neutritionist</option>
                <option value="General">General</option>
                <option value="OPD">OPD</option>
                </select>
            
            </div>

            <div class="form-group" style="float:right; width:48%;">
                <label style="font-size: 20px; ">Medical_School</label>
                <select style="font-size:15px; " class="form-control" placeholder="Select Your Medi-School" name="medicalschool" autocomplete="off">
                <option><?php echo $medicalschool ?></option>
                <option value="Jayawardanapura University">Jayawardanapura University</option> 
                <option value="Colombo University">Colombo University</option>
                <option value="Jaffna University">Jaffna University</option>
                <option value="Kelani University">Kelani University</option>
                <option value="Wayamba University">Wayamba University</option>    
                </select>
            </div>


            <div class="form-group" style="float:left; width:48%;">
                <label style="font-size: 20px; ">Speciality</label>
                <select style="font-size:15px; " class="form-control" placeholder="Select Your Speciality" name="speciality" autocomplete="off" >
                <option><?php echo $speciality ?></option>
                <option value="Nephrologist">Nephrologist</option> 
                <option value="Dermatologist">Dermatologist</option>
                <option value="Cardiologist">Cardiologist</option>
                <option value="Endocrinologist">Endocrinologist</option>
                <option value="Gynecologist">Gynecologist</option>
                </select>
            </div>

            <div class="form-group" style="float:right; width:48%;">
                <label style="font-size: 20px; ">Program Director</label>
                <select style="font-size: 15px; " class="form-control" placeholder="Select Your Director" name="director" autocomplete="off">
                <option><?php echo $director ?></option>
                <option value="Dr.Somiah">Dr.Somiah</option> 
                <option value="Dr.Sreekanth">Dr.Sreekanth</option>
                <option value="Dr.Bandara">Dr.Bandara</option>
                <option value="Dr.Sanjana">Dr.Sanjana</option>
                <option value="Dr.Vasuki">Dr.Vasuki</option>  
                </select>
            </div>




            <button type="submit" class="btn btn-primary" style="background-color:#198754; margin-left: 500px;" name="submit">Update</button>
            <button type="reset" class="btn btn-primary" style="background-color:#198754;margin-left:1%"" name="reset">Reset</button>
        </form>

    </div>
    <!-- Footer -->
    <?php
    include('footer.php');
    ?>
</body>

</html>