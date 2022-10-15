<?php
include '../connection/connect.php';
$sid=$_GET['updateid'];
$sql="Select * from `supplier` where sid=$sid";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$supplierName=$row['supplierName'];
$address=$row['address'];
$phoneNo=$row['phoneNo'];

if(isset($_POST['submit'])){
    $sname=$_POST['sname'];
    $address=$_POST['address'];
    $phoneNo=$_POST['phoneNo'];

    $sql="update `supplier` set sid=$sid,supplierName='$sname',address='$address',phoneNo='$phoneNo' where sid=$sid" ;
    
    $result=mysqli_query($con,$sql);
    if($result){
        header('location: viewSupplier.php');
    }else{
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <style>
        .container{
            max-width: 500px!important;
            margin: auto!important;
            align-items: center!important;
            padding: 10px!important;
        }
        
        .side{
            width: 500px!important;
        }
        .sside{
            width: 200px!important;
        }
        .button2 {
            background-color: #198754;
            width: 100px;
        }
        .button3 {
            background-color: #198754;
            margin-left: 50px;
            width: 100px;
        }
        .bn{
            margin-top: 30px;
            margin-left: 25%;
        }
        h3{
            text-align: center;
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
        .a{
            margin-left: 20px !important;
            margin-top: 20px !important;
        }
    </style>
            <!-- Required meta tags -->
            <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="secondNav.css">

    <title>Update Medicine Details</title>
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
        <li><a href="addsupplier.php" class="list">Add Suppliers</a></li>
        <li><a href="viewSupplier.php" class="list" id="active" style="color:white">View Supplier Details</a></li>
        
        </ul>

    </div>

<button class="btn a" style="background-color:#198754"><a href="viewSupplier.php" style="color: white">BACK</a></button>

  <h3><b>UPDATE SUPPLIER DETAILS</b></h3>

  <div class="container">
    

    <form method="post">
    <div class="col side" >
        
        <div class="form-group">
            <label >Supplier Name:</label>
            <input type="text" class="form-control" value=<?php echo $supplierName;?> placeholder="Type Supplier Name" name="sname"/>
        </div>

        <div class="form-group">
            <label >Address:</label>
            <input type="text" value=<?php echo $address;?> class="form-control" placeholder="Type Address" name="address"/>
        </div>

        
   

        <div class="form-group">
        <label>Phone No:</label>
            <div class="in-row">
                <input type="text" class="form-control " value=<?php echo $phoneNo;?> placeholder="   X X X   X X X X   X X X " name="phoneNo">
            </div>
        </div>

        
    
    </div>
    <div class="bn">
        <button name="submit" type="submit" style="background-color:#198754; color:white" class="btn button2">Submit</button><button type="reset" class="btn button3" style="background-color:#198754; color:white" name="reset">Reset</button>
    </div>
    
    </form> 
    
    </div>
    <!-- Footer -->
    <?php
    include('footer.php');
    ?>
  </body>
</html>