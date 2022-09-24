<?php
include '../connection/connect.php';
if(isset($_GET['deleteid'])){
    $test_id=$_GET['deleteid'];

    $sql="delete from `medicaltest` where test_id=$test_id";
    $result=mysqli_query($con, $sql);
    if($result){
        // echo "Deleted Successfully";
       
        header('location: viewmedicaltest.php');
        
    }else{
        die(mysqli_error($con));
    }
}
?>