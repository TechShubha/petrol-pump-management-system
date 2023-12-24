<?php
include'connection.php';
if(isset($_POST['submit'])){
    $customer_id=$_POST['id'];
    $vehicle_no=$_POST['vehicle_no'];
    $customer_name=$_POST['customer_name'];
    $fuel_type=$_POST['fuel_type'];
    $bill_no=$_POST['bill_no'];
    $vehicle_type=$_POST['vehicle_type'];
    $staff_id=$_POST['staff_id'];


    $sql="insert into 'customers'(vehicle_no,customer_name,fuel_type,bill_no,vehicle_type,staff_id)values('$vehicle_no,$customer_name,$fuel_type','$bill_no','$vehicle_type,$staff_id')";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "data inserted successfully";
        header('location:displayc.php');
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

    <title>customer</title>
  </head>
  <body>
    <div class="container my=5">
    <form method="post">
  <div class="form-group">
    <label >VEHICLE NO</label>
    <input type="text" class="form-control" placeholder="Enter vehicle number" name="vehicle_no">
  </div>
    <div class="form-group">
    <label >CUSTOMER NAME</label>
    <input type="text" class="form-control" placeholder="Enter customer name"name="customer_name" >
    </div>
    <div class="form-group">
    <label >FUEL TYPE</label>
    <input type="text" class="form-control" placeholder="Enter fuel type"name="fuel_type">
    </div>
    <div class="form-group">
    <label >BILL NO</label>
    <input type="text" class="form-control" placeholder="Enter bill number"name="bill_no">
    </div>
    <div class="form-group">
    <label >VEHICLE TYPE</label>
    <input type="text" class="form-control" placeholder="Enter vehicle type"name="vehicle_type">
    </div>
    <div class="form-group">
    <label >STAFF ID</label>
    <input type="text" class="form-control" placeholder="Enter staff id"name="staff_id">
    </div>
    
 </div>
     
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

  </body>
</html>









