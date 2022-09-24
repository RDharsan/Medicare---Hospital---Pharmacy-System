<?php
include '../connection/connect.php';
if(isset($_GET['deleteid'])){
    $sid=$_GET['deleteid'];

    $sql="delete from `supplier` where sid=$sid";
    $result=mysqli_query($con, $sql);
    if($result){
        header('location: viewSupplier.php');
    }else{
        die(mysqli_error($con));
    }
}
?>