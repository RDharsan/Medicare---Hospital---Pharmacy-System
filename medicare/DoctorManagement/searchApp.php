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
  <link rel="icon" type="image/x-icon" href="../logo.jpg">
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
            <li><a href="display.php" class="list">View Doctors</a></li>
            <li><a href="viewAppointment.php" class="list">Appointment</a></li>
            <li><a href="search.php" class="list">Search Doctor</a></li>
            <li><a href="searchApp.php" class="list" id="active" style="color:white">Search Appointment</a></li>
            <li><a href="report.php" class="list"> Report</a></li>
    </ul>

</div>
<br>
    <div class="container my-5" >
        <form action="" method="POST">
            <div class="form-group" style="margin-left:37%">
            <!-- <input class="form-control-lg" type="text" placeholder="Search Test type" name="search"> -->
            <div class="col-md-5">
                    
                    <input type="text" class="form-control" placeholder="Enter Doctor name" name="search"> 
       
                        
                    
                    <br>
               
            <button class="btn btn-primary btn-lg" style="background-color:#198754;margin-left:30%" name="submit" >Search</button>
            </div>
        </div>
        </form>
        <br><br>

        <div class="container">


<table class="table">
  <thead>
    <h1 style="text-align: center;"><?php  
        if(isset($_POST['submit'])){
        $search=$_POST['search'];
        echo $search;
        }
        
    ?></h1><br>
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
    if (isset($_POST['submit'])) {
    $search=$_POST['search'];

    $sql = "select * from `appointment` where id='$search' or Dr_Name='$search'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        if(mysqli_num_rows($result)>0){
        

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
  
<button class="btn btn-primary" style="background-color:#198754"><a href="updateAppointment.php?updateid=' . $id . '" class="text-light">Update</a></button></td>
<td><button class="btn btn-danger" "><a href="deleteAppointment.php?deleteid=' . $id . '" class="text-light">Delete</a></button>

</td>
</tr>';
      }
      }
     
      else{
        ?>
       
        <h2 style="text-align: center;"> <?php
        echo 'Data Not Found!!';
        
      }
    }
}
    ?>




  </tbody>
</table>
</div>
        
    </div>


 <!-- Footer -->
 <?php
    include('footer.php');
  ?>
</body>

</html>