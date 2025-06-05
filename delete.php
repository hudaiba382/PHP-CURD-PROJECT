<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $q = "DELETE FROM laps WHERE id = '$id'";

    $run = mysqli_query($con,$q);
    if($run){
        header('location:display.php');
    }
}else{
    echo 'data not deleted';
}
