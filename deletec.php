<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from 'customers' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "deleted successfully";
        header('location:displayc.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>