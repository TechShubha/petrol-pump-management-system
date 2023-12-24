<?php
include'connection.php';
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
    $fuel_type=$_POST['fuel_type'];
    $fuel_quantity=$_POST['fuel_quantity'];
    $fuel_company=$_POST['fuel_company'];


    $sql="update`fuels`set id=$id,fuel_type='$fuel_type',fuel_quantity='$fuel_quantity',fuel_company='$fuel_company' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
      echo "updated successfully";
      header('location:display.php');
    }else{
        die(mysqli_error($con));
      }
    }
         
    


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>fuel</title>
  </head>
  <body>
    <div class="container my=5">
    <form method="post">
  <div class="form-group">
    <label >fuel_type</label>
    <input type="text" class="form-control" placeholder="Enter fuel type" name="fuel_type">
  </div>
    <div class="form-group">
    <label >fuel_quantity</label>
    <input type="text" class="form-control" placeholder="Enter fuel quantity"name="fuel_quantity" >
    </div>
    <div class="form-group">
    <label >fuel_company</label>
    <input type="text" class="form-control" placeholder="Enter fuel company"name="fuel_company">
    </div>
    
 </div>
     
  <button type="submit" class="btn btn-primary" name="submit">update</button>
</form>
    </div>

  </body>
</html>