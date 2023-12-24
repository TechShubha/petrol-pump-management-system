<?php
include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fuel details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <button class="btn btn-primary my-5"><a href="fuel.php" class="text-light">Add Fuel details</a></button>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">fuel type</th>
      <th scope="col">fuel Quantity</th>
      <th scope="col">fuel company</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select * from `fuels`";
    $result=mysqli_query($con,$sql);
    if($result){
      while($row=mysqli_fetch_assoc($result)){
     $id=$row['id'];
     $fuel_type=$row['fuel_type'];
     $fuel_quantity=$row['fuel_Quantity'];
     $fuel_company=$row['fuel_company'];
     
     echo'<tr>
     <th scope="row">'.$id.'</th>
     <td>'.$fuel_type.'</td>
     <td>'.$fuel_quantity.'</td>
     <td>'.$fuel_company.'</td>
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