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

<!-- Header -->
  <?php
  include('header.php');
  ?>
 
  

  <!-- Main page for laboratory management -->
 <br><br> <div>
    <button onclick="location.href='addmedicaltest.php'" class="btnmain">Add Medical Test</button>
    <button onclick="location.href='viewmedicaltest.php'" class="btnmain">View Test</button>
    <button onclick="location.href='index.php'" class="btnmain">Report</button><br>
    <button onclick="location.href='search.php'"class="btnmain2">Search Lab</button>
    <button onclick="location.href='viewlabequipment.php'" class="btnmain2">Lab Equipement Details</button>
  </div>

  
  <!-- Footer -->
  <?php
    include('footer.php');
  ?>
</body>

</html>