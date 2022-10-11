<?php
include '../connection/connect.php';
if(isset($_POST['submit'])){
    $type=$_POST['type'];
    $name=$_POST['name'];
    $mdate=$_POST['mdate'];
    $edate=$_POST['edate'];
    $sname=$_POST['sname'];
    $qamount=$_POST['qamount'];
    $package=$_POST['package'];
    $damount=$_POST['damount'];
    $units=$_POST['units'];

    $sql="insert into `medicine`(medicineType,medicineName,manufactureDate,expireDate,supplierName,quantityAmount,package,dosageAmount,units)
    values('$type','$name','$mdate','$edate','$sname','$qamount','$package','$damount','$units')";

    $result=mysqli_query($con,$sql);
    if($result){
        header('location: viewMedicine.php');
    }else{
        die(mysqli_error($con));
    }

}

?>

<!doctype html>
<html lang="en">
  <head>
    <style>
        .vl {
            border-left: 4px solid #D3D3D3;
            height: 350px;
            margin-top: 30px;
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
            margin-left: 40%;
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
    </style>
        <!-- Required meta tags -->
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="secondNav.css">

    <title>Add Medicine Details</title>
  </head>
  <body>
    <!-- header -->
  <?php
    include('header.php');
    ?>

    <!-- second navigation bar -->
    <div>
        <ul class="secondNav">
            <li><a href="addmedicine.php" class="list" id="active" style="color:white">Add Medicine</a></li>
            <li><a href="viewMedicine.php" class="list">View Medicine Details</a></li>
            <li><a href="search.php" class="list">Search Medicine</a></li>
            <li><a href="index.php" class="list">Report Generate</a></li>
            <li><a href="addsupplier.php" class="list">Add Suppliers</a></li>
            <li><a href="viewSupplier.php" class="list">View Supplier Details</a></li>
        </ul>

    </div>


  <h3><b>ADD MEDICINE DETAILS</b></h3>
  
    <div class="container">
    
        <form method="post">
    <div class="row">
    <div class="col" >
        <div class="form-group">
        <label>Medicine Type:</label>
        <select  class="form-control" name="type" required>
            <option value="" disabled selected>Select Medicine Type</option>
            <option value="Liquid">Liquid</option>
            <option value="Tablet">Tablet</option>
            <option value="Capsules">Capsules</option>
            <option value="Injections">Injections</option>
            <option value="Inhalers">Inhalers</option>
            <option value="Drops">Drops</option>
        </select>
        </div>

        <div class="form-group">
            <label >Medicine Name:</label>
            <input type="text" class="form-control" placeholder="Type Medicine Name" name="name"required/>
        </div>

        <div class="form-group">
            <label >Manufacture Date:</label>
            <input type="date" class="form-control" placeholder="Select Manufacture Date" name="mdate" required>
        </div>

        <div class="form-group">
            <label >Expire Date:</label>
            <input type="date" class="form-control" placeholder="Select Expire Date" name="edate" required>
        </div>
    </div>
    

    <div class="vl"></div>


    <div class="col">
        <div class="form-group">
            <label >Supplier Name:</label>
            <input type="text" class="form-control" placeholder="Type Supplier Name" name="sname" required>
        </div>

        <div class="form-group">
        <label>Quantity:</label>
            <div class="in-row">
                <input type="text" class="form-control side " placeholder="Amount" name="qamount" required>
                <select  class="form-control sside" name="package" required >
                    <option value="" disabled selected>Package type</option>
                    <option value="Vials">Vials</option>
                    <option value="Bottles">Bottles</option>
                    <option value="Blister packs">Blister packs</option>
                    <option value="Sachets">Sachets</option>
                    <option value="Syringes">Syringes</option>
                    <option value="Ampoules">Ampoules</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label>Dosage:</label>
            <div class="in-row">
                <input type="text" class="form-control side" placeholder="Amount" name="damount" required>
                <select  class="form-control sside" name="units" required >
                    <option value="" disabled selected>Units</option>
                    <option value="l">l</option>
                    <option value="kg">kg</option>
                    <option value="g">g</option>
                    <option value="ml">ml</option>
                </select>
            </div>
        </div>
    </div>
    </div>

    <div class="bn">
        <button name="submit" type="submit" class="btn button2" style="background-color:#198754">Submit</button><button type="reset" class="btn button3" style="background-color:#198754" name="reset">Reset</button>
    </div>
    
    </form> 
    
    </div>
    <!-- Footer -->
    <?php
    include('footer.php');
    ?>
  </body>
</html>