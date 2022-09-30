<?php
include '../connection/connect.php';
if(isset($_GET['deleteid'])){
    $aid=$_GET['deleteid'];

    $sql="delete from `admission` where aid=$aid";
    $result=mysqli_query($con, $sql);
    if($result){
        header('location: view_admission.php');
    }else{
        die(mysqli_error($con));
    }
}
?>