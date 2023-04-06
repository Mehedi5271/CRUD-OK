<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        .table{
           margin-top: 20px;
        }
    </style>
</head>
<body>

<?php

$conn = mysqli_connect('localhost','root','','practice');

// delete part

if(isset($_GET['deleteid'])){
   $deleteid = $_GET['deleteid'];

   $sql = "DELETE FROM user WHERE id = $deleteid";

   $adanprodan = mysqli_query($conn,$sql);
   
}



$query = "SELECT * FROM  user ORDER BY id DESC ";

$result = mysqli_query($conn,$query) or die("failed");

$count = mysqli_num_rows($result);
if($count>0){
    
?>

<div class="container">
<table class="table table-success ">
  <thead>
    
    <tr>
    <h3 class="text-center p-2 mt-2 text-primary bg-primary-subtle">User Information</h3>
      <th scope="col">Serial</th>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
     
      
    </tr>
  </thead>
  <tbody>

<?php 

$serial = 1;



while($row = mysqli_fetch_assoc($result)){




?>

    <tr>
    <td><?php echo $serial++ ?></td>
    
      
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['first_name'] ?></td>
      <td><?php echo $row['last_name'] ?></td>
      <td><?php echo $row['user_name'] ?></td>
      <td><?php echo $row['email'] ?></td>
    
      <p></p>

      <td>
        <span class='btn btn-success'> <a class="text-white text-decoration-none"  href='edit.php?id=<?php echo $row['id'] ?>'>  Edit </a> </span>
         <span class='btn btn-danger'><a class="text-white text-decoration-none" href='user.php?deleteid=<?php echo $row['id'] ?>'>  Delete </a></span>
      </td>
      
    
    </tr>

    <?php } ?>
   
  </tbody>
</table>
</div>
<?php } ?>
</body>
</html>