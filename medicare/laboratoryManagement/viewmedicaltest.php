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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="secondNav.css">

  <title>Medicare</title>
  <link rel="icon" type="image/x-icon" href="../logo.jpg">
  <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
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
        <li><a href="viewmedicaltest.php" class="list" style="color:white" id="active">View Test</a></li>
        <li><a href="index.php" class="list">Report</a></li>
        <li><a href="search.php" class="list">Search Lab</a></li>
        <li><a href="viewlabequipment.php" class="list">Lab Equipement Details</a></li>
    </ul>

</div>
<br><br>

    <div class="container">


      <table class="table">
        <thead>
          <tr style="background-color:#198754;color:white;" >
            <th scope="col">Test ID</th>
            <th scope="col">Test type</th>
            <th scope="col">Lab room</th>
            <th scope="col">Lab in-charge</th>
            <th scope="col">Nurse</th>
            <th scope="col">Test done by</th>
            <th scope="col">Test done date</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>

          <?php


          $sql = "select * from `medicaltest`";
          $result = mysqli_query($con, $sql);
          if ($result) {

            while ($row = mysqli_fetch_assoc($result)) {
              $test_id = $row['test_id'];
              $test_type = $row['test_type'];
              $lab_room = $row['lab_room'];
              $lab_incharge = $row['lab_incharge'];
              $nurse = $row['nurse'];
              $test_doneby = $row['test_doneby'];
              $test_date = $row['test_date'];

              echo  '<tr>
        <th scope="row">' . $test_id . '</th>
        <td>' . $test_type . '</td>
        <td>' . $lab_room . '</td>
        <td>' . $lab_incharge . '</td>
        <td>' . $nurse . '</td>
        <td>' . $test_doneby . '</td>
        <td>' . $test_date . '</td>
        <td>
        
    <button class="btn btn-primary" style="background-color:#198754"><a href="updatemedicaltest.php?updateid=' . $test_id . '" class="text-light">Update</a></button></td>
    <td><button class="btn btn-danger" " ><a href="deletemedicaltest.php?deleteid=' . $test_id . '" class="text-light" >Delete</a></button>

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