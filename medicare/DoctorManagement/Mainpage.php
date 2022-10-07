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
  

  <title>Medicare</title>
</head>

<body>

<!-- Header -->
  <?php
  include('header.php');
  ?>
 
  

  <!-- Main page for Doctor management -->
 <br><br> <div>
    <button onclick="location.href='doctor.php'" class="btnmain">Doctor Registration</button>
    <button onclick="location.href='display.php'" class="btnmain">View Doctors</button>
    <button onclick="location.href='viewAppointment.php'" class="btnmain">Appointment</button>
    <button onclick="location.href='search.php'"class="btnmain">Search Doctor</button>
    <button onclick="location.href='searchApp.php'"class="btnmain">Search Appointment</button>
    <button onclick="location.href='report.php'" class="btnmain">Report</button>
  </div>

  
  <!-- Footer -->
  <?php
    include('footer.php');
  ?>
</body>

</html>