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
  <link rel="stylesheet" href="../laboratoryManagement/style.css">
  <link rel="stylesheet" href="../laboratoryManagement/secondNav.css">

  <title>Medicare</title>
</head>

<body>

<!-- Header -->
<div class="header">
        <p>MEDICARE</p>
        </div>
        <p class="para">We Care Always..</p>
 
  

  <!-- Main page for laboratory management -->
 <br><br> <div>
    <button onclick="location.href='../DoctorManagement/Mainpage.php'" class="btnmain">Doctor Management</button>
    <button onclick="location.href='../patient_management/Mainpage.php'" class="btnmain">Patient Management</button>
    <button onclick="location.href='../MedicineInventory/Mainpage.php'" class="btnmain">Medicine Inventory</button><br>
    <button onclick="location.href='../laboratoryManagement/Mainpage.php'"class="btnmain2">Laboratory Management</button>
    <button onclick="location.href='#'" class="btnmain2">About us</button>
  </div>

  
  <!-- Footer -->
  <?php
    include('../laboratoryManagement/footer.php');
  ?>
</body>

</html>