<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $position=$_POST['position'];
    $medicalschool=$_POST['medicalschool'];
    $speciality=$_POST['speciality'];
    $director=$_POST['director'];

    $sql="insert into `doctor` (name,address,phone,email,position,medicalschool,speciality,director) values ('$name', '$address', '$phone','$email', '$position','$medicalschool', '$speciality','$director')";
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
        document.getElementById("errormail").innerHTML="<span style='color: red;'>"+"mail id not in correct format</span>"
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
            <li><a href="doctor.php" class="list" id="active">Doctor Registration</a></li>
            <li><a href="display.php" class="list">View Doctors</a></li>
            <li><a href="viewAppointment.php" class="list">Appointment</a></li>
            <li><a href="search.php" class="list">Search Doctor</a></li>
            <li><a href="searchApp.php" class="list">Search Appointment</a></li>
            <li><a href="report.php" class="list">Report</a></li>
        </ul>

    </div>



    <div class="container my-5">
        <form name="myform" onsubmit="return validate()" method="POST" >
            <h2>Personal Information</h2>
            <div class="form-group" style="float:left; width:48%;">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off" required>
            </div>
            <div class="form-group" style="float:right; width:48%;">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Enter Your address" name="address" autocomplete="off" required>
            </div>
            <div class="form-group" style="float:left; width:48%;">
                <label>Phone</label>
                <input type="text"  class="form-control" placeholder="Enter Your Phone Number" name="phone" autocomplete="off" required>
                <span id="error"></span>
            </div>
            

            <div class="form-group" style="float:right; width:48%;">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off" required>
                <span id="errormail"></span>
            </div>


            
            <h2>Professional Information</h2>
            <div class="form-group" style="float:left; width:48%;">
                <label >Position</label>
                <select class="form-control" placeholder="Select Your Position" name="position" autocomplete="off" required>
                <option value="Physician">Physician</option> 
                <option value="Surgeon">Surgeon</option>
                <option value="Neutritionist">Neutritionist</option>
                <option value="General">General</option>
                <option value="OPD">OPD</option>
                </select>
            </div>


            <div class="form-group" style="float:right; width:48%;">
                <label>Medical_School</label>
                <select class="form-control" placeholder="Enter Your Medi-School" name="medicalschool" autocomplete="off" required>
            
                <option value="Jayawardanapura University">Jayawardanapura University</option> 
                <option value="Colombo University">Colombo University</option>
                <option value="Jaffna University">Jaffna University</option>
                <option value="Kelani University">Kelani University</option>
                <option value="Wayamba University">Wayamba University</option>
                </select>   
            </div>



            <div class="form-group" style="float:left; width:48%;">
                <label>Speciality</label>
                <select class="form-control" placeholder="Enter Your Speciality" name="speciality" autocomplete="off" required>
           
                <option value="Nephrologist">Nephrologist</option> 
                <option value="Dermatologist">Dermatologist</option>
                <option value="Cardiologist">Cardiologist</option>
                <option value="Endocrinologist">Endocrinologist</option>
                <option value="Gynecologist">Gynecologist</option>  
                </select>
            </div>



            <div class="form-group" style="float:right; width:48%;">
                <label>Program Director</label>
                <select class="form-control" placeholder="Enter Your Speciality" name="director" autocomplete="off" required>
                 
                <option value="Dr.Somiah">Dr.Somiah</option> 
                <option value="DDr.Sreekanth">Dr.Sreekanth</option>
                <option value="Dr.Bandara">Dr.Bandara</option>
                <option value="Dr.Sanjana">Dr.Sanjana</option>
                <option value="Dr.Vasuki">Dr.Vasuki</option>  
                </select>
            </div>

            <input type="submit" value="Submit" class="btn btn-primary" style="background-color:#198754">
            <!--button type="submit" class="btn btn-primary" style="background-color:#198754" name="submit" >Submit</button-->
        </form>
        
    


    </div>
    <!-- Footer -->
    <?php
    include('footer.php');
    ?>
</body>

</html>