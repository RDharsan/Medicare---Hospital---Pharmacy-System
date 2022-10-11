<?php
include '../connection/connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            background-color: white;
        }
        .n{
            width: 110px !important;
        }
        h3{
            text-align: center;
            padding-top: 20px;
        }
</style>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicare</title>
    <link rel="icon" type="image/x-icon" href="../logo.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="secondNav.css">
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
            <li><a href="index.php" class="list" id="active" style="color:white">Report Generate</a></li>
            <li><a href="addsupplier.php" class="list">Add Suppliers</a></li>
            <li><a href="viewSupplier.php" class="list">View Supplier Details</a></li>
        </ul>

    </div>
    <h3><b>REPORT GENERATE</b></h3>

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div style="background-color:#e9ebee; padding: 16px;margin-top: 40px;">
                        <center><h5>MEDICINES RECORD</h5></center>
                        <table class="table table=hover" style="text-align: center;">
                        <?php
                        $con = new PDO("mysql:host=localhost; dbname=medicare", "root", "");
                        $query = "select * from `medicine`";
                        $result = $con->prepare($query);
                        $result->execute();
                        if ($result->rowCount()) {
                            if ($medicine = $result->fetch()) {
                        ?>
                                <tr>
                                    <td>
                                        <button class="btn btn-primary n" style="background-color:#198754; border-color:#198754;" ><a href="medPdf.php?id=<?php echo $medicine['mid'];?> " class="text-light">VIEW</a></button>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary n" style="background-color:#198754; border-color:#198754;" ><a href="medPdf.php?id=<?php echo $medicine['mid'];?>" class="text-light" download="medPdf.php?id=<?php echo $medicine['mid'];?>">DOWNLOAD</a></button>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>


                    </table>
                    </div>
            </div> 
            <div class="col-md-3"></div>       
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div style="background-color:#e9ebee ; padding: 16px;">
                    <center><h5>SUPPLIERS RECORDS</h5></center>
                    <table class="table table=hover" style="text-align: center;">
                        <?php
                        $con = new PDO("mysql:host=localhost; dbname=medicare", "root", "");
                        $query = "Select * from `supplier`";
                        $result = $con->prepare($query);
                        $result->execute();
                        if ($result->rowCount()) {
                            if ($supplier = $result->fetch()) {
                        ?>
                                <tr>
                                    <td>
                                        <button class="btn btn-primary n" style="background-color:#198754; border-color:#198754;" ><a href="supPdf.php?id=<?php echo $supplier['sid'];?> " class="text-light">VIEW</a></button>
                                    </td>
                                    <td>
                                    <button class="btn btn-primary n" style="background-color:#198754; border-color:#198754;" ><a href="supPdf.php?id=<?php echo $supplier['sid'];?>" class="text-light" download="supPdf.phps?id=<?php echo $supplier['sid'];?>">DOWNLOAD</a></button>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>


                    </table>

                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

<!-- Footer -->
<?php
include('footer.php');
?>
    </body>
</html>
