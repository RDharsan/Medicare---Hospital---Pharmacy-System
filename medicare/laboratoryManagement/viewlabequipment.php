<?php
include '../connection/connect.php';


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
  <script src="index.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="secondNav.css">

  <!-- Js validation - trying -->
  <script src="custom.js"></script>

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
        <li><a href="addmedicaltest.php" class="list" >Add Medical Test</a></li>
        <li><a href="viewmedicaltest.php" class="list"  >View Test</a></li>
        <li><a href="index.php" class="list">Report</a></li>
        <li><a href="search.php" class="list">Search Lab</a></li>
        <li><a href="viewlabequipment.php" class="list" id="active" style="color:white">Lab Equipement Details</a></li>
    </ul>

</div>
<br>
  
    <div class="container"><br>
    <button type="submit" class="btn btn-primary" style="background-color:#198754; margin-left:25px; margin-top:-25px" onclick="location.href='addEquipDetails.php'" name="addequip">Add Equipement Details</button><br>

   <br> <h1 style="margin-left:25% ;">View Lab Equipment Details</h1><br><br>

      <table class="table">
        <thead>
          <tr style="background-color:#198754;color:white;">
            <th scope="col">Equipment ID</th>
            <th scope="col">Equipment</th>
            <th scope="col">Model</th>
            <th scope="col">Insurance Date</th>
            <th scope="col">Cost(Rs.)</th>
            <th scope="col">Est.Lifespan(Yrs)</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>

          <?php


          $sql = "select * from `labequipment`";
          $result = mysqli_query($con, $sql);
          if ($result) {

            while ($row = mysqli_fetch_assoc($result)) {
              $equipment_id = $row['equipment_id'];
              $equipment = $row['equipment'];
              $model = $row['model'];
              $insurance_date = $row['insurance_date'];
              $cost = $row['cost'];
              $estimated_lifespan = $row['estimated_lifespan'];
        

              echo  '<tr>
        <th scope="row">' . $equipment_id . '</th>
        <td>' . $equipment . '</td>
        <td>' . $model . '</td>
        <td>' . $insurance_date . '</td>
        <td>' . $cost . '</td>
        <td>' . $estimated_lifespan . '</td>
        <td>
        
    <button class="btn btn-primary" style="background-color:#198754"><a href="updatelabequipment.php?updateid=' . $equipment_id . '" class="text-light">Update</a></button></td>
    <td><button class="btn btn-danger""  onclick="msgdlt()""><a href="deletelabequipment.php?deleteid=' . $equipment_id . '" class="text-light">Delete</a></button>

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