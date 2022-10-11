<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        <li><a href="doctor.php" class="list" >Doctor Registration</a></li>
        <li><a href="display.php" class="list" >View Doctors</a></li>
        <li><a href="viewAppointment.php" class="list" id="active" style="color:white">Appointment</a></li>
        <li><a href="search.php" class="list">Search Doctor</a></li>
        <li><a href="searchApp.php" class="list">Search Appointment</a></li>
        <li><a href="report.php" class="list"> Report</a></li>
    </ul>

</div> 
<br>


    <div class="container">
    <button type="submit" class="btn btn-primary" style="background-color:#198754; margin-left:25px; margin-top:-25px" onclick="location.href='addAppointment.php'" name="addequip">Add Appointment Details</button><br>  
    
    <br> <h1 style="margin-left:25% ;">View Appointment Details</h1><br><br>
 
      <table class="table">
        <thead>
          <tr style="background-color:#198754;color:white;">
            <th scope="col">ID</th>
            <th scope="col">Doctor_Name</th>
            <th scope="col">Appointment_date</th>
            <th scope="col">Appointment_time</th>
            <th scope="col">Status</th>
            <th scope="col">Speciality</th>
            <th scope="col">Patient Name</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            
         </tr>
        </thead>
      <tbody>
      <?php
       
       $sql = "select * from `appointment`";
       $result = mysqli_query($con, $sql);
       if ($result) {

         while ($row = mysqli_fetch_assoc($result)) {
           $id = $row['id'];
           $Dr_Name = $row['Dr_Name'];
           $App_date = $row['App_date'];
           $App_time = $row['App_time'];
           $status = $row['status'];
           $speciality = $row['speciality'];
           $patient_name = $row['patient_name'];

           

           echo  '<tr>
           <th scope="row">' . $id . '</th>
           <td>' . $Dr_Name . '</td>
           <td>' . $App_date . '</td>
           <td>' . $App_time . '</td>
           <td>' . $status . '</td>
           <td>' . $speciality . '</td>
           <td>' . $patient_name . '</td>
         
   
           <td>
       <button class="btn btn-primary" style="background-color:#198754"><a href="updateAppointment.php?updateid=' . $id . '" class="text-light">Update</a></button>
       </td>
       <td>
       <button class="btn btn-danger" ><a href="deleteAppointment.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
   
        </td>
         </tr>';
         }
        }

      ?>

      </tbody>
        
      </table>
    </div>
    <!-- Footer -->
 <?php
    include('footer.php');
  ?>

</body>

</html>