<?php
include '../connection/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="secondNav.css">
    <title>view Patient</title>
</head>
<body>
<!-- header -->
<?php
    include('header.php');
    ?>

    <!-- second navigation bar -->
    <div>
        <ul class="secondNav">
        <li><a href="create_patient.php" class="list">Register Patient</a></li>
            <li><a href="view_patient.php" class="list">View Patient</a></li>
            <li><a href="view_admission.php" class="list" id="active" >Check Up Admission</a></li>
            <li><a href="create_admission.php" class="list"  >Add Admission</a></li>
            <li><a href="search.php" class="list">Search Patients</a></li>
            <li><a href="report.php" class="list">Report</a></li>
        </ul>
</div>
<br>    
    <div class="container">
    
</button>

<table class="table">
  <thead>
    <tr style="background-color:#198754;color:white;">
      <th scope="col">ADMISSION ID</th>
      <th scope="col">PATIENT ID</th>
      <th scope="col">TELEPHONE</th>
      <th scope="col">ADMISSION DATE</th>
      <th scope="col">ADMISSION TIME</th>
      <th scope="col">CHECK UP TYPE</th>
      <th scope="col">CONSULTING DOCTOR</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tbody>

  <?php


$sql="select * from `admission`";
$result=mysqli_query($con, $sql);
if($result){
 
    while($row=mysqli_fetch_assoc($result)){
        $aid=$row['aid'];
        $pid = $row['pid'];
        $telephone = $row['telephone'];
        $a_date = $row['a_date'];
        $a_time = $row['a_time'];
        $checkup_type = $row['checkup_type'];
        $consulting_doc = $row['consulting_doc'];

        echo  '<tr>
        <th scope="row">'.$aid.'</th>
        <td>'.$pid.'</td>
        <td>'.$telephone.'</td>
        <td>'.$a_date.'</td>
        <td>'.$a_time.'</td>
        <td>'.$checkup_type.'</td>
        <td>'.$consulting_doc.'</td>
       <td>
        <button class="btn btn-danger"><a href="delete_patient.php?deleteid='.$aid.'" class="text-light">Delete</a></button>

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