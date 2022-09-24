<?php
include '../connection/connect.php';
if(isset($_GET['deleteid'])){
    $pid=$_GET['deleteid'];

    $sql="delete from `patient` where pid=$pid";
    $result=mysqli_query($con, $sql);
    if($result){
        header('location: view_patient.php');
    }else{
        die(mysqli_error($con));
    }
}
?>