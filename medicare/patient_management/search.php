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
            <li><a href="view_admission.php" class="list" >Check Up Admission</a></li>
            <li><a href="create_admission.php" class="list" >Add Admission</a></li>
            <li><a href="search.php" class="list" id="active">Search Patients</a></li>
            <li><a href="report.php" class="list">Report</a></li>
    </ul>

</div>
<br>
    <div class="container my-5" >
        <form action="" method="POST">
            <div class="form-group" style="margin-left:37%">
            <input class="form-control-lg" type="text" placeholder="Search Patient" name="search">
            <div class="col-md-5">
                    <!-- <input type="text" placeholder="search" name="search"> -->
                    <br>
             <button class="btn btn-primary btn-lg" style="background-color:#198754;margin-left:30%" name="submit" >Search</button>
            </div>
        </div>
        </form>
        

        <div class="container">


<table class="table">
  <thead>
    <h1 style="text-align: center;">
    <?php  
        if(isset($_POST['submit'])){
        $search=$_POST['search'];
        echo $search;
        }
    ?></h1><br>
    <tr>
      <th scope="col">PID</th>
      <th scope="col">NAME</th>
      <th scope="col">NIC</th>
      <th scope="col">GENDER</th>
      <th scope="col">DATE OF BIRTH</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">CITY</th>
      <th scope="col">TELEPHONE NUMBER</th>
      <th scope="col">EDIT</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tbody>

  <?php
    if (isset($_POST['submit'])) {
    $search=$_POST['search'];

    $sql = "select * from `patient` where pid='$search' or name='$search' or nic='$search' or gender='$search' or city='$search' or t_phone='$search'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        if(mysqli_num_rows($result)>0){
        

      while ($row = mysqli_fetch_assoc($result)) {
        $pid=$row['pid'];
        $name=$row['name'];
        $nic=$row['nic'];
        $gender=$row['gender'];
        $dob=$row['dob'];
        $address=$row['address'];
        $city=$row['city'];
        $t_phone=$row['t_phone'];

        echo  '<tr>
  <th scope="row">' . $pid . '</th>
 
  <td>' . $name . '</td>
  <td>' . $nic . '</td>
  <td>' . $gender . '</td>
  <td>' . $dob . '</td>
  <td>' . $address . '</td>
  <td>' . $city . '</td>
  <td>' . $t_phone . '</td>
  <td>
  
<button class="btn btn-primary" style="background-color:#198754"><a href="update_patient.php?updateid=' . $pid . '" class="text-light">Update</a></button></td>
<td><button class="btn btn-danger" "><a href="delete_patient.php?deleteid=' . $pid . '" class="text-light">Delete</a></button>

</td>
</tr>';
      }
      }
     
      else{
        ?>
       
        <h2 style="text-align: center;"> <?php
        echo 'Data Not Found!!';
        
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
   