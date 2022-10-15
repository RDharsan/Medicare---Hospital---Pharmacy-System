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
        .bb{
            /* border-color: #04AA6D!important; */
            background-color: #198754!important;
        }
        .tbl{
             width: 970px!important;
             margin-left: 100px!important;
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
    <script type="text/javascript" src="validations.js"></script>
  
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
        <li><a href="addmedicine.php" class="list" >Add Medicine</a></li>
            <li><a href="viewMedicine.php" class="list">View Medicine Details</a></li>
            <li><a href="search.php" class="list">Search Medicine</a></li>
            <li><a href="index.php" class="list">Report Generate</a></li>
            <li><a href="addsupplier.php" class="list" >Add Suppliers</a></li>
            <li><a href="viewSupplier.php" class="list" id="active" style="color:white">View Supplier Details</a></li>
        </ul>

    </div>

    <h3><b>SUPPLIERS DETAILS</b></h3>
    <div class="container">

    <table class="table tbl">
  <thead>
    <tr style="background-color:#198754;color:white;">
        <th scope="col">SID</th>
        <th scope="col">Supplier Name</th>
        <th scope="col">Address</th>
        <th scope="col">Phone No</th>
        <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

<?php
$sql="Select * from `supplier`";
$result=mysqli_query($con,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
      $sid=$row['sid'];
      $supplierName=$row['supplierName'];
      $address=$row['address'];
      $phoneNo=$row['phoneNo'];
      echo ' <tr>
      <th scope="row">'.$sid.'</th>
      <td>'.$supplierName.'</td>
      <td>'.$address.'</td>
      <td>'.$phoneNo.'</td>
      <td>
      <button class="btn bb" style="background-color:#198754"><a href="supUpdate.php?updateid='.$sid.'" class="text-light">Update</a></button>
      <button class="btn bbb" onclick="return myFunction()"" style="background-color:#198754;"><a href="supDelete.php?deleteid='.$sid.'"  class="text-light">Delete</a></button>
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