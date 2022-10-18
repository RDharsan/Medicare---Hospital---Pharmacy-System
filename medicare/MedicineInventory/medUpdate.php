<?php
include '../connection/connect.php';
$mid=$_GET['updateid'];
$sql="Select * from `medicine` where mid=$mid";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$medicineType=$row['medicineType'];
$medicineName=$row['medicineName'];
$manufactureDate=$row['manufactureDate'];
$expireDate=$row['expireDate'];
$supplierName=$row['supplierName'];
$quantityAmount=$row['quantityAmount'];
$package=$row['package'];
$dosageAmount=$row['dosageAmount'];
$units=$row['units'];


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

    $sql="update `medicine` set mid=$mid, medicineType='$type', medicineName='$name', manufactureDate='$mdate', expireDate='$edate', supplierName='$sname', quantityAmount='$qamount', package='$package', dosageAmount='$damount', units='$units' where mid=$mid" ;
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
        }
        .button3 {
            background-color: #198754;
            margin-left: 50px;
            width: 100px;
        }
        .bn{
            margin-top: 70px;
            margin-left: 40%;
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

   
  <title>Medicare</title>
  <link rel="icon" type="image/x-icon" href="../logo.jpg">
  <script>
    function validate(){
        var name = document.forms["myform"]["name"].value;
            if (name=="") {
                document.getElementById("errorr").innerHTML = "<span style='color: red;'><b>" + "*Please enter valid Medicine Name</span>"
                return false;
            }else{
                var ename = /^[a-zA-Z]*$/;
                if(!ename.test(name)){
                    document.getElementById("errorr").innerHTML = "<span style='color: red;'><b>" + "*Medicine name cannot contain Digits</span>"
                    return false;

                }
            }
            var sname = document.forms["myform"]["sname"].value;
            if (sname=="") {
                document.getElementById("errors").innerHTML = "<span style='color: red;'><b>" + "*Please enter valid Supplier Name</span>"
                return false;
            }else{
                var ename = /^[a-zA-Z]*$/;
                if(!ename.test(sname)){
                    document.getElementById("errors").innerHTML = "<span style='color: red;'><b>" + "*Supplier Name Cannot Contain Digits</span>"
                    return false;

                }
            }

            
            var qamount = document.forms["myform"]["qamount"].value;
            if (qamount == "") {
                document.getElementById("error2").innerHTML = "<span  style='color: red;'><b>" + "*Please Enter Quantity Amount</b></span>"
                return false;
            } else if (isNaN(qamount)) {
                document.getElementById("error2").innerHTML = "<span  style='color: red;'><b>" + "*Only Digits are Allowed</b></span>"
                return false;
            }

            var damount = document.forms["myform"]["damount"].value;
            if (damount == "") {
                document.getElementById("error3").innerHTML = "<span  style='color: red;'><b>" + "*Please Enter Quantity Amount</b></span>"
                return false;
            } else {
                if (isNaN(damount)) {
                    document.getElementById("error3").innerHTML = "<span  style='color: red;'><b>" + "*Only Digits are Allowed</b></span>"
                    return false;
                }
            }
    }
  </script>
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
            <li><a href="search.php" class="list">Search Medicine</a></li>
            <li><a href="index.php" class="list">Report Generate</a></li>
            <li><a href="addsupplier.php" class="list" >Add Suppliers</a></li>
            <li><a href="viewSupplier.php" class="list" >View Supplier Details</a></li>
        </ul>

    </div>

<button class="btn a" style="background-color:#198754"><a href="viewMedicine.php" style="color: white">BACK</a></button>

    <h3><b>UPDATE MEDICINE DETAILS</b></h3>
  
    <div class="container">
    
    <form method="post" onsubmit="return validate()" name="myform">
    <div class="row">
    <div class="col" >
        <div class="form-group">
        <label>Medicine Type:</label>
        <select class="form-control" name="type">
            <option value="" disabled selected>Select Medicine Type</option>
            <option value="Liquid"
            <?php
                    if($row["medicineType"]=='Liquid'){
                        echo "selected";
                    }
                    ?>
            >Liquid</option>
            <option value="Tablet"
            <?php
                    if($row["medicineType"]=='Tablet'){
                        echo "selected";
                    }
                    ?>
            >Tablet</option>
            <option value="Capsules"
            <?php
                    if($row["medicineType"]=='Capsules'){
                        echo "selected";
                    }
                    ?>
            >Capsules</option>
            <option value="Injections"
            <?php
                    if($row["medicineType"]=='Injections'){
                        echo "selected";
                    }
                    ?>
            >Injections</option>
            <option value="Inhalers"
            <?php
                    if($row["medicineType"]=='Inhalers'){
                        echo "selected";
                    }
                    ?>
            >Inhalers</option>
            <option value="Drops"
            <?php
                    if($row["medicineType"]=='Drops'){
                        echo "selected";
                    }
                    ?>
            >Drops</option>
        </select>
        </div>

        <div class="form-group">
            <label >Medicine Name:</label>
            <input type="text" value=<?php echo $medicineName;?> class="form-control" placeholder="Type Medicine Name" autocomplete="off" name="name"/>
                    <span id="errorr"></span>
        </div>

        <div class="form-group">
            <label >Manufacture Date:</label>
            <input type="date" value=<?php echo $manufactureDate;?> class="form-control" placeholder="Select Manufacture Date" autocomplete="off" name="mdate" required>
        </div>

        <div class="form-group">
            <label >Expire Date:</label>
            <input type="date" value=<?php echo $expireDate;?> class="form-control" placeholder="Select Expire Date" name="edate" autocomplete="off" required>
        </div>
    </div>
    

    <div class="vl"></div>


    <div class="col">
        <div class="form-group">
            <label >Supplier Name:</label>
            <input type="text" class="form-control" value=<?php echo $supplierName;?> placeholder="Type Supplier Name" name="sname" autocomplete="off">
            <span id="errors"></span>
        </div>

        <div class="form-group">
        <label>Quantity: <span id="error2"></span></label>
            <div class="in-row">
                <input type="text" class="form-control side " placeholder="Amount" value=<?php echo $quantityAmount;?> name="qamount" autocomplete="off" >
                <select class="form-control sside" name="package" required>
                    <option value="" disabled selected >Package</option>
                    <option value="Vials"
                    <?php
                    if($row["package"]=='Vials'){
                        echo "selected";
                    }
                    ?>
                    >Vials</option>
                    <option value="Bottles"
                    <?php
                    if($row["package"]=='Bottles'){
                        echo "selected";
                    }
                    ?>
                    >Bottles</option>
                    <option value="Blister packs"
                    <?php
                    if($row["package"]=='Blister packs'){
                        echo "selected";
                    }
                    ?>
                    >Blister packs</option>
                    <option value="Sachets"
                    <?php
                    if($row["package"]=='Sachets'){
                        echo "selected";
                    }
                    ?>
                    >Sachets</option>
                    <option value="Syringes"
                    <?php
                    if($row["package"]=='Syringes'){
                        echo "selected";
                    }
                    ?>
                    >Syringes</option>
                    <option value="Ampoules"
                    <?php
                    if($row["package"]=='Ampoules'){
                        echo "selected";
                    }
                    ?>
                    >Ampoules</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label>Dosage: <span id="error3"></span></label>
            <div class="in-row">
                <input type="text" class="form-control side" placeholder="Amount" autocomplete="off" value=<?php echo $dosageAmount;?> name="damount" >
                <select  class="form-control sside" name="units" required>
                    <option value="" disabled selected>Units</option>
                    <option value="l" 
                    <?php
                    if($row["units"]=='l'){
                        echo "selected";
                    }
                    ?>
                    >l</option>
                    <option value="kg"
                    <?php
                    if($row["units"]=='kg'){
                        echo "selected";
                    }
                    ?>
                    >kg</option>
                    <option value="g" 
                    <?php
                    if($row["units"]=='g'){
                        echo "selected";
                    }
                    ?>>g</option>
                    <option value="ml"
                    <?php
                    if($row["units"]=='ml'){
                        echo "selected";
                    }
                    ?>
                    >ml</option>
                </select>
            </div>
        </div>
    </div>
    </div>

    <div class="bn">
        <button name="submit" type="submit" class="btn button2" style="background-color:#198754; color:white">Update</button><button type="reset" class="btn button3" style="background-color:#198754; color:white" name="reset">Reset</button>
    </div>
    
    </form> 
    
    </div>
    <!-- Footer -->
    <?php
    include('footer.php');
    ?>
  </body>
</html>