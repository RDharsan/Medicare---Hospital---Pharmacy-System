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
        <li><a href="display.php" class="list" id="active">View Doctors</a></li>
        <li><a href="viewAppointment.php" class="list">Appointment</a></li>
        <li><a href="search.php" class="list">Search Doctor</a></li>
        <li><a href="searchApp.php" class="list">Search Appointment</a></li>
        <li><a href="report.php" class="list"> Report</a></li>
    </ul>

</div>
<br>


    <div class="container">
      
    

      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Current Position</th>
            <th scope="col">Medical School</th>
            <th scope="col">Speciality</th>
            <th scope="col">Director</th>
            <th scope="col">Operations</th>
         </tr>
        </thead>
      <tbody>
      <?php
       
       $sql = "select * from `doctor`";
       $result = mysqli_query($con, $sql);
       if ($result) {

         while ($row = mysqli_fetch_assoc($result)) {
           $id = $row['id'];
           $name = $row['name'];
           $address = $row['address'];
           $phone = $row['phone'];
           $email = $row['email'];
           $position = $row['position'];
           $medicalschool = $row['medicalschool'];
           $speciality = $row['speciality'];
           $director = $row['director'];


           

           echo  '<tr>
           <th scope="row">' . $id . '</th>
           <td>' . $name . '</td>
           <td>' . $address . '</td>
           <td>' . $phone . '</td>
           <td>' . $email . '</td>
           <td>' . $position . '</td>
           <td>' . $medicalschool . '</td>
           <td>' . $speciality . '</td>
           <td>' . $director . '</td>
   
   
           <td>
       <button class="btn btn-primary" style="background-color:#198754"><a href="update.php?updateid=' . $id . '" class="text-light">Update</a></button>
       </td>
       <td>
       <button class="btn btn-danger" ><a href="delete.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
   
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