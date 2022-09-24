<?php
include '../connection/connect.php';
if(isset($_GET['deleteid'])){
    $mid=$_GET['deleteid'];

    $sql="delete from `medicine` where mid=$mid";
    $result=mysqli_query($con, $sql);
    if($result){
        header('location: viewMedicine.php');
    }else{
        die(mysqli_error($con));
    }
}
?>