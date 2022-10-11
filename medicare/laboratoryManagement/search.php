<?php
include '../connection/connect.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="secondNav.css">

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
        <li><a href="addmedicaltest.php" class="list" >Add Medical Test</a></li>
        <li><a href="viewmedicaltest.php" class="list" >View Test</a></li>
        <li><a href="index.php" class="list" >Report</a></li>
        <li><a href="search.php" class="list" id="active" style="color:white">Search Lab</a></li>
        <li><a href="viewlabequipment.php" class="list">Lab Equipement Details</a></li>
    </ul>

</div>
<br>
    <div class="container my-5" >
        <form action="" method="POST">
            <div class="form-group" style="margin-left:37%">
            <!-- <input class="form-control-lg" type="text" placeholder="Search Test type" name="search"> -->
            <div class="col-md-5">
                    
                    <!-- <input type="text" class="form-control" placeholder="Enter test tyoe" name="test_type" autocomplete="off"> -->
                    <select name="search" required class="form-control">
                        <option selected>Search Test Type</option>
                        <option>BUN</option>
                        <option>Blood Test</option>
                        <option>Infectious disease tests</option>
                        <option>Sexually transmitted infection tests</option>
                        <option>Tumor and cancer marker tests</option>
                        <option>ANA</option>
                        <option>CRP</option>
                        <option>Nutrient and vitamin level tests</option>
                        <option>Hormone level tests</option>
                        <option>Cholesterol level tests</option>
                    </select>
                    <br>
               
            <button class="btn btn-primary btn-lg" style="background-color:#198754;margin-left:30%" name="submit" >Search</button>
            </div>
        </div>
        </form>
        <br><br>

        <div class="container">


<table class="table">
  <thead>
    <h1 style="text-align: center;"><?php  
        if(isset($_POST['submit'])){
        $search=$_POST['search'];
        echo $search;
        }
        
    ?></h1><br>
    <tr style="background-color:#198754;color:white;">
      <th scope="col">Test ID</th>
      <th scope="col">Lab room</th>
      <th scope="col">Lab in-charge</th>
      <th scope="col">Nurse</th>
      <th scope="col">Test done by</th>
      <th scope="col">Test done date</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>

    <?php
    if (isset($_POST['submit'])) {
    $search=$_POST['search'];

    $sql = "select * from `medicaltest` where test_id='$search' or test_type='$search'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        if(mysqli_num_rows($result)>0){
        

      while ($row = mysqli_fetch_assoc($result)) {
        $test_id = $row['test_id'];
        // $test_type = $row['test_type'];
        $lab_room = $row['lab_room'];
        $lab_incharge = $row['lab_incharge'];
        $nurse = $row['nurse'];
        $test_doneby = $row['test_doneby'];
        $test_date = $row['test_date'];

        echo  '<tr>
  <th scope="row">' . $test_id . '</th>
 
  <td>' . $lab_room . '</td>
  <td>' . $lab_incharge . '</td>
  <td>' . $nurse . '</td>
  <td>' . $test_doneby . '</td>
  <td>' . $test_date . '</td>
  <td>
  
<button class="btn btn-primary" style="background-color:#198754"><a href="updatemedicaltest.php?updateid=' . $test_id . '" class="text-light">Update</a></button></td>
<td><button class="btn btn-danger" " onclick="msgdlt()"><a href="deletemedicaltest.php?deleteid=' . $test_id . '" class="text-light">Delete</a></button>

</td>
</tr>';
      }
      }
     
      else{
        ?>
       
        <h2 style="text-align: center;"> <?php
        echo 'Data Not Found!!';
        echo "<script>alert('Data Not found!!')</script>";
        
      }
    }
}
    ?>




  </tbody>
</table>
</div>
        
    </div>


 <!-- Footer -->
 <?php
    include('footer.php');
  ?>
</body>

</html>