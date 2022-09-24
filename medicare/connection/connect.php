<?php

$con=new mysqli('localhost', 'root', '', 'medicare');  

if(!$con){
    die(mysqli_error($con));
}
?>