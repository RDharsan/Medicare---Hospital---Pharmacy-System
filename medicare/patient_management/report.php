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
        <li><a href="create_patient.php" class="list">Register Patient</a></li>
            <li><a href="view_patient.php" class="list">View Patient</a></li>
            <li><a href="view_admission.php" class="list"  id="active">Check Up Admission</a></li>
            <li><a href="create_admission.php" class="list" >Add Admission</a></li>
            <li><a href="search.php" class="list">Search Patients</a></li>
            <li><a href="report.php" class="list">Report</a></li>
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
                        <h3>Patient Records</h3>
                    </center>
                    <!-- comment -->
                    <table class="table table=hover" style="text-align: center;">
                       
                        <?php
                        $con = new PDO("mysql:host=localhost;dbname=medicare", "root", "");
                        $query = "select * from `patient`";
                        $result = $con->prepare($query);
                        $result->execute();
                        if ($result->rowCount()) {
                            if ($patient = $result->fetch()) {
                        ?>
                                <tr>
                                    <td>
                                        <button class="btn btn-primary" style="background-color:#198754" ><a href="patient_pdf.php" class="text-light">View Online</a></button>
                                    </td>
                                    <td>
                                    <button class="btn btn-primary" style="background-color:#198754" ><a href="patient_pdf.php" class="text-light" download="patient_pdf.php">Download Now</a>
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
                        <h3>Patient Admission Records</h3>
                    </center>
                    <table class="table table=hover" style="text-align: center;">
                        <?php
                        $con = new PDO("mysql:host=localhost;dbname=medicare", "root", "");
                        $query = "select * from `admission`";
                        $result = $con->prepare($query);
                        $result->execute();
                        if ($result->rowCount()) {
                            if ($labeq = $result->fetch()) {
                        ?>
                                <tr>
                                    <td>
                                        
                                        <button class="btn btn-primary" style="background-color:#198754" ><a href="admission_pdf.php" class="text-light">View Online</a></button>
                                    </td>
                                    <td>
                                    <button class="btn btn-primary" style="background-color:#198754" ><a href="admission_pdf.php" class="text-light" download="admission.php?id=<?php echo $admission['aid'];?>">Download Now</a>
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