
<?php
include '../connection/connect.php';
if(isset($_GET['deleteid'])){
    $equipment_id=$_GET['deleteid'];

    $sql="delete from `labequipment` where equipment_id=$equipment_id";
    $result=mysqli_query($con, $sql);
    if($result){
        // echo "Deleted Successfully";
       
        header('location: viewlabequipment.php');
        
    }else{
        die(mysqli_error($con));
    }
}
?>