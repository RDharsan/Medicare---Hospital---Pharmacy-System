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
        <h2 style="text-align:center;"><b>DOCTOR REGISTRATION</b></h2><br><br>
        <h2>Personal Information</h2>
            <div class="form-group" style="float:left; width:48%;">
                <label style="font-size: 20px; ">Name</label>
                <input type="text"style="font-size: 15px; " class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off" required>
            </div>
            <div class="form-group" style="float:right; width:48%;">
                <label style="font-size: 20px;">Address</label>
                <input type="text" style="font-size:15px; " class="form-control" placeholder="Enter Your address" name="address" autocomplete="off" required>
            </div>
            <div class="form-group" style="float:left; width:48%;">
                <label style="font-size: 20px; ">Phone</label>
                <input type="text" style="font-size:15px; " class="form-control" placeholder="Enter Your Phone Number" name="phone" autocomplete="off" required>
                <span id="error"></span>
            </div>
            

            <div class="form-group" style="float:right; width:48%;">
                <label style="font-size: 20px; ">Email</label>
                <input type="text" style="font-size:15px; " class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off" required>
                <span id="errormail"></span>
            </div>

</br>
</br>
          
            <h2>Professional Information</h2>
            <div class="form-group" style="float:left; width:48%;">
                <label style="font-size: 20px; ">Position</label>
                <select style="font-size:15px; "class="form-control" name="position" required>
                <option  disabled selected>Select Your Position</option>
                <option value="Physician">Physician</option> 
                <option value="Surgeon">Surgeon</option>
                <option value="Neutritionist">Neutritionist</option>
                <option value="General">General</option>
                <option value="OPD">OPD</option>
                <option value="edical officer">Medical officer</option>
                <option value="Ayurveda">Ayurveda</option>
                <option value="Veterinary">Veterinary</option>
                <option value="Others">Others</option>
                </select>
            </div>


            <div class="form-group" style="float:right; width:48%;">
                <label style="font-size:20px; ">Medical_School</label>
                <select style="font-size:15px; " class="form-control"  name="medicalschool"  required>
                <option disabled selected>Select Your Medi-School</option>
                <option value="Jayawardanapura University">Jayawardanapura University</option> 
                <option value="Colombo University">Colombo University</option>
                <option value="Jaffna University">Jaffna University</option>
                <option value="Kelani University">Kelani University</option>
                <option value="Wayamba University">Wayamba University</option>
                <option value="South Asian institute of Medicine">South Asian institute of Medicine</option>
                <option value="Peradeniya University">Peradeniya University</option>
                <option value="ANC Medical placement">ANC Medical placement</option>
                <option value="Ruhunu University">Ruhunu University</option>
                <option value="Rajarata University">Rajarata University</option>
                <option value="Others">Others</option>
                </select>   
            </div>



            <div class="form-group" style="float:left; width:48%;">
                <label style="font-size: 20px; ">Speciality</label>
                <select style="font-size:15px; " class="form-control"  name="speciality"  required>
                <option disabled selected>Select Your Speciality</option>
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
                <label style="font-size: 20px; ">Program Director</label>
                <select style="font-size:15px; " class="form-control"  name="director" autocomplete="off" required>
                <option disabled selected>Select Your Speciality</option>
                <option value="Dr.Somiah">Dr.WAS De Silva</option> 
                <option value="DDr.Sreekanth">Dr.B.G.N.Rathnasena</option>
                <option value="Dr.Bandara">Dr.P.N.Rajapakshe</option>
                <option value="Dr.Sanjana">Dr.Sanjana</option>
                <option value="Dr.Vasuki">Dr.Vasuki</option>  
                <option value="Prof. Anoja Abeyjeewa"> Prof. Anoja Abeyjeewa</option>
                <option value="r.H.K.De S.Kularatne">Dr.H.K.De S.Kularatne</option>
                <option value="r.S.D.Rajamanthri"> Dr.S.D.Rajamanthri</option>
                <option value="Dr.B.D.A.Perera">Dr.B.D.A.Perera</option>
                <option value="Prof.Nirmala">Prof.Nirmala </option>
                <option value="Others">Others</option>  
                </select>
            </div>

            <!--input type="submit" value="Submit" class="btn btn-primary" style="background-color:#198754"-->
            <button type="submit"  class="btn btn-primary" style="background-color:#198754" name="submit" >Submit</button>

        </form>
        
    


    </div>
    <!-- Footer -->
    <?php
    include('footer.php');
    ?>
</body>

</html>