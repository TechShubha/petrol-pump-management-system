<?php
include'connection.php';
if(isset($_POST['submit'])){
    $fuel_id=$_POST['id'];
    $fuel_type=$_POST['fuel_type'];
    $fuel_Quantity=$_POST['fuel_Quantity'];
    $fuel_company=$_POST['fuel_company'];


    $sql="insert into`fuels`(fuel_type,fuel_Quantity,fuel_company)values('$fuel_type','$fuel_Quantity','$fuel_company')";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "data inserted successfully";
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
    <label >fuel_Quantity</label>
    <input type="text" class="form-control" placeholder="Enter fuel quantity"name="fuel_quantity" >
    </div>
    <div class="form-group">
    <label >fuel_company</label>
    <input type="text" class="form-control" placeholder="Enter fuel company"name="fuel_company">
    </div>
    
 </div>
     
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

  </body>
</html>