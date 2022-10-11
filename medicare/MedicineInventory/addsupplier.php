<?php
include '../connection/connect.php';
if(isset($_POST['submit'])){
    $sname=$_POST['sname'];
    $country=$_POST['country'];
    $code=$_POST['code'];

    $no=$_POST['no'];
 
    $phoneNo=$_POST['code']." ".$_POST['no'];

    $sql="insert into `supplier`(supplierName,country,phoneNo)
    values('$sname','$country','$phoneNo')";

    print($sql);
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
            color: white!important;
        }
        .button3 {
            background-color: #198754;
            margin-left: 50px;
            width: 100px;
            color: white!important;
        }
        .bn{
            margin-top: 70px;
            margin-left: 25%;
        }
        h3{
            text-align: center;
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .in-row{
            display: flex;
        }
    </style>


        <!-- Required meta tags -->
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="secondNav.css">

    <title> Add Supplier Details</title>
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
            <li><a href="addsupplier.php" class="list" id="active" style="color:white">Add Suppliers</a></li>
            <li><a href="viewSupplier.php" class="list">View Supplier Details</a></li>
        </ul>

    </div>


  <h3><b>ADD MEDICINE DETAILS</b></h3>
  
    <div class="container">
    

    <form method="post">
    
    <div class="col side" >
        
        <div class="form-group">
            <label >Supplier Name:</label>
            <input type="text" class="form-control" placeholder="Type Supplier Name" name="sname"/>
        </div>

        <div class="form-group">
            <label >Country Name:</label>
            <input type="text" class="form-control" placeholder="Type Country Name" name="country"/>
        </div>

        
   

        <div class="form-group">
        <label>Phone No:</label>
            <div class="in-row">
                <select  class="form-control sside" name="code" >
                <option value="" disabled selected>Country</option>
                <option value="" data-dialcode="">Please select</option>
                <option value="+43" data-dialcode="+43">Austria</option>
                <option value="+263" data-dialcode="+263">Zimbabwe</option>
                </select>
                <input type="text" class="form-control " placeholder="   X X X   X X X X   X X X " name="no">
            </div>
        </div>

        
    
    </div>
   

    <div class="bn">
        <button name="submit" type="submit" style="background-color:#198754" class="btn button2">Submit</button><button type="reset" class="btn button3" style="background-color:#198754" name="reset">Reset</button>
    </div>
    
    </form> 
    
    </div>
    <!-- Footer -->
    <?php
    include('footer.php');
    ?>
  </body>
</html>