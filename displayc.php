<?php
include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customers details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <button class="btn btn-primary my-5"><a href="customer.php" class="text-light">Add Customer details</a></button>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">vehicle no</th>
      <th scope="col">customer name</th>
      <th scope="col">fuel type</th>
      <th scope="col">bill no</th>
      <th scope="col">vehicle type</th>
      <th scope="col">staff id</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select * from 'customers'";
    $result=mysqli_query($con,$sql);
    if($result){
      while($row=mysqli_fetch_assoc($result)){
     $id=$row['id'];
     $vehicle_no=$row['vehicle_no'];
     $customer_name=$row['customer_name'];
     $fuel_type=$row['fuel_type'];
     $bill_no=$row['bill_no'];
     $vehicle_type=$row['vehicle_type'];
     $staff_id=$row['staff_id'];
     
     echo'<tr>
     <th scope="row">'.$id.'</th>
     <td>'.$vehicle_no.'</td>
     <td>'.$customer_name.'</td>
     <td>'.$fuel_type.'</td>
     <td>'.$bill_no.'</td>
     <td>'.$vehicle_type.'</td>
     <td>'.$staff_id.'</td>
     <td>
        <button class="btn btn-primary"><a href="update.php?
        updateid='.$id.'" class="text-light">update</a></button>
        <button class="btn btn-danger"><a href="delete.php?
        deleteid='.$id.'"class="text-light">delete</a></button>
        </td>
     </tr>';
      }
    }

    ?>
    
  </tbody>
</table>


    </tr>
  </tbody>
</table>
</button>
</div>
</body> 
</html>