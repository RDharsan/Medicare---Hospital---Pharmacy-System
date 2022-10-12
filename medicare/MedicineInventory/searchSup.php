<?php
include '../connection/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
        .button2 {
            background-color: #198754;
            margin-top: 10px;
            /* width: 100px; */
            color: white;
        }
        .button3 {
            background-color: #198754;
            /* width: 100px; */
            color: white;
        }
        .bu {
            margin-left: 220px;
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
        .tbl{
             width: 800px!important;
             margin-left: 150px!important;
             margin-right: 0px !important;
        }
        .bb{
            /* border-color: #04AA6D!important; */
            background-color: #198754!important;
        }
        .bbb{
            /* border-color: #04AA6D!important; */
            background-color: red!important;
        }
        .bn{
            padding-left: 500px;
        }
        .i{
            margin-left: -80px !important;
            width: 300px !important;
        }
        .n{
            margin-left: 230px !important;
            margin-top: -68px !important;
            color: white !important;
            width: 100px !important;
            /* width: 400px !important; */           
        }
        .a{
            margin-left: 20px !important;
            margin-top: 20px !important;
        }
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <!-- Bootstrap CSS -->
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
            <li><a href="search.php" class="list" id="active" style="color:white">Search Medicine</a></li>
            <li><a href="index.php" class="list">Report Generate</a></li>
            <li><a href="addsupplier.php" class="list">Add Suppliers</a></li>
            <li><a href="viewSupplier.php" class="list">View Supplier Details</a></li>
        </ul>

</div>
<button class="btn a" style="background-color:#198754"><a href="search.php" style="color: white">BACK</a></button>
<h3><b>SEARCH SUPPLIER DETAILS</b></h3>

    <div class="container my-5" >
        <form action="" method="POST">
            <div class="form-group" style="margin-left:37%">
            <div class="col-md-5">
                <input type="text" class="form-control i" placeholder="Enter Supplier Name" name="search"> 
                <button class="btn n" style="background-color:#198754" name="submit" >Search</button>
            </div>
        </div>
        </form>

        <div class="container">


        <table class="table tbl">
        <thead>
    <!-- <h1 style="text-align: center;"><?php  
        if(isset($_POST['submit'])){
        $search=$_POST['search'];
        echo $search;
        }
        ?></h1> -->
        <tr style="background-color:#198754;color:white;">
            <th scope="col">SID</th>
            <th scope="col">Supplier Name</th>
            <th scope="col">Country Name</th>
            <th scope="col">Phone No</th>
            <th scope="col">Operations</th>
        </tr>
    </thead>
  <tbody>

    <?php
    if (isset($_POST['submit'])) {
    $search=$_POST['search'];

    $sql = "select * from `supplier` where sid='$search' or supplierName='$search'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        if(mysqli_num_rows($result)>0){
      while ($row = mysqli_fetch_assoc($result)) {
           $sid = $row['sid'];
           $supplierName = $row['supplierName'];
           $country = $row['country'];
           $phoneNo = $row['phoneNo'];

        echo  '<tr>
           <th scope="row">' . $sid . '</th>
           <td>' . $supplierName . '</td>
           <td>' . $country . '</td>
           <td>' . $phoneNo . '</td>         
           <td>                       
           <button class="btn bb" style="background-color:#198754"><a href="supUpdate.php?updateid='.$sid.'" class="text-light">Update</a></button>
           <button class="btn bbb" style="background-color:#198754;"><a href="supDelete.php?deleteid='.$sid.'" class="text-light">Delete</a></button>
           </td>
</tr>';
      }
      }
     
      else{
        ?>
       
        <h2 style="text-align: center;"> <?php
        echo 'DATA NOT FOUND';
        
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