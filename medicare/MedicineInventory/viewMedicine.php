<?php
include '../connection/connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
<style>
        /* .side{
            width: 300px!important;          
        }
        .sside{
            width: 300px!important;
        } */
        .button2 {
            background-color: #198754;
            width: 100px;
            color: white;
        }
        .button3 {
            background-color: #198754;
            margin-left: 50px;
            width: 100px;
        }
        h3{
            text-align: center;
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .row {
            display: flex;
            }
        .col{
            flex: 20%;
            padding: 20px;
            height: 300px;
            margin-left: 20px;
            margin-right: 20px;
        }
        .in-row{
            display: flex;
        }
        /* .in-col{
            flex: 20%;
            padding: 20px;
            height: 300px;
        } */
        .tbl{
             width: 1280px!important;
             margin-left: -60px!important;
        }
        .bb{
            /* border-color: #04AA6D!important; */
            background-color: #198754!important;
        }
        .bbb{
            /* border-color: #04AA6D!important; */
            background-color: red!important;
        }
</style>
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
        <li><a href="addmedicine.php" class="list" >Add Medicine</a></li>
            <li><a href="viewMedicine.php" class="list" id="active" style="color:white">View Medicine Details</a></li>
            <li><a href="" class="list">Search Medicine</a></li>
            <li><a href="" class="list">Report Generate</a></li>
            <li><a href="addsupplier.php" class="list" >Add Suppliers</a></li>
            <li><a href="viewSupplier.php" class="list">View Supplier Details</a></li>
        </ul>

    </div>

    <h3><b>MEDICINES DETAILS</b></h3>
    <div class="container">

    <table class="table tbl">
  <thead>
    <tr>
        <th scope="col">MID</th>
        <th scope="col">Medicine Type</th>
        <th scope="col">Medicine Name</th>
        <th scope="col">Manufacture Date</th>
        <th scope="col">Expire date</th>
        <th scope="col">Supplier Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Package</th>
        <th scope="col">Dosage</th>
        <th scope="col">Units</th>
        <th scope="col">Operations</th>
        
    </tr>
  </thead>
  <tbody>

  <?php

  $sql="Select * from `medicine`";
  $result=mysqli_query($con,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
        $mid=$row['mid'];
        $medicineType=$row['medicineType'];
        $medicineName=$row['medicineName'];
        $manufactureDate=$row['manufactureDate'];
        $expireDate=$row['expireDate'];
        $supplierName=$row['supplierName'];
        $quantityAmount=$row['quantityAmount'];
        $package=$row['package'];
        $dosageAmount=$row['dosageAmount'];
        $units=$row['units'];
        echo ' <tr>
        <th scope="row">'.$mid.'</th>
        <td>'.$medicineType.'</td>
        <td>'.$medicineName.'</td>
        <td>'.$manufactureDate.'</td>
        <td>'.$expireDate.'</td>
        <td>'.$supplierName.'</td>
        <td>'.$quantityAmount.'</td>
        <td>'.$package.'</td>
        <td>'.$dosageAmount.'</td>
        <td>'.$units.'</td>
        <td>
        <button class="btn bb" style="background-color:#198754"><a href="medUpdate.php?updateid='.$mid.'" class="text-light">Update</a></button><td>
        <td><button class="btn bbb" style="background-color:#198754;"><a href="medDelete.php?deleteid='.$mid.'" class="text-light">Delete</a></button>
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