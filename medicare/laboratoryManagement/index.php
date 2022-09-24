<?php
include '../connection/connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
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

<?php
  include('header.php');
  ?>

<div>
        <ul class="secondNav">
            <li><a href="addmedicaltest.php" class="list" >Add Medical Test</a></li>
            <li><a href="viewmedicaltest.php" class="list">View Test</a></li>
            <li><a href="#" class="list" id="active" style="color:white">Report</a></li>
            <li><a href="search.php" class="list">Search Lab</a></li>
            <li><a href="viewlabequipment.php" class="list">Lab Equipement Details</a></li>
        </ul>

    </div>
    <style>
        body {
            background-color: white;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div style="background-color:#e9ebee ;border: 1px solid black; padding: 16px;margin-top: 40px;">
                    <center>
                        <h3>Medical Test Records</h3>
                    </center>
                    <table class="table table=hover" style="text-align: center;">
                        <!-- <tr >
                            <th>View Online</th>
                            <th>Download</th>
                        </tr> -->
                        <?php
                        $con = new PDO("mysql:host=localhost;dbname=medicare", "root", "");
                        $query = "select * from `medicaltest`";
                        $result = $con->prepare($query);
                        $result->execute();
                        if ($result->rowCount()) {
                            if ($medicaltest = $result->fetch()) {
                        ?>
                                <tr>
                                    <td>
                                        
                                        <button class="btn btn-primary" style="background-color:#198754" ><a href="medicaltest_pdf.php?id=<?php echo $medicaltest['test_id'];?> " class="text-light">View Online</a></button>
                                    </td>
                                    <td>
                                    <button class="btn btn-primary" style="background-color:#198754" ><a href="medicaltest_pdf.php?id=<?php echo $medicaltest['test_id'];?>" class="text-light" download="medicaltest_pdf.php?id=<?php echo $medicaltest['test_id'];?>">Download Now</a>
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
                <div style="background-color:#e9ebee ;border: 1px solid black; padding: 16px;margin-top: 40px;">
                    <center>
                        <h3>Lab Equipment Records</h3>
                    </center>
                    <table class="table table=hover" style="text-align: center;">
                        <!-- <tr >
                            <th>View Online</th>
                            <th>Download</th>
                        </tr> -->
                        <?php
                        $con = new PDO("mysql:host=localhost;dbname=medicare", "root", "");
                        $query = "select * from `labequipment`";
                        $result = $con->prepare($query);
                        $result->execute();
                        if ($result->rowCount()) {
                            if ($labeq = $result->fetch()) {
                        ?>
                                <tr>
                                    <td>
                                        
                                        <button class="btn btn-primary" style="background-color:#198754" ><a href="labeq_pdf.php?id=<?php echo $labeq['equipment_id'];?> " class="text-light">View Online</a></button>
                                    </td>
                                    <td>
                                    <button class="btn btn-primary" style="background-color:#198754" ><a href="labeq_pdf.php?id=<?php echo $labeq['equipment_id'];?>" class="text-light" download="labeq_pdf.php?id=<?php echo $labeq['equipment_id'];?>">Download Now</a>
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
        
    </div><br>
    <?php
    include('footer.php');
  ?>
</body>

</html>