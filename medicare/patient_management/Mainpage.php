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
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="secondNav.css">

  <title>Medicare</title>
</head>

<body>

<!-- Header -->
  <?php
  include('header.php');
  ?>
 
  

  <!-- Main page for laboratory management -->
 <br><br> <div>
    <button onclick="location.href='create_patient.php'" class="btnmain">Register Patients</button>
    <button onclick="location.href='view_patient.php'" class="btnmain">View Patients</button>
    <button onclick="location.href='view.admission.php'" class="btnmain">Check Up Admission</button><br>
    <button onclick="location.href='search.php'"class="btnmain2">Search Patients</button>
    <button onclick="location.href='report.php'" class="btnmain2">Report</button>
  </div>

  
  <!-- Footer -->
  <?php
    include('footer.php');
  ?>
</body>

</html>