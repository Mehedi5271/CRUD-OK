


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<style>
    .box{
        text-align: center;
    }
</style>

<?php

$conn = mysqli_connect('localhost','root','','practice');

       if(isset($_POST['submit'])){
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $user = $_POST['user'];
        $email = $_POST['email'];

        $sql = "INSERT INTO user (first_name,last_name,user_name,email) VALUES ('$fname', '$lname', '$user', '$email')";

        $result = mysqli_query($conn,$sql);{
            // header('location:user.php');
        }
       }

?>

<div class="container">
    <div class="row">
        
        <div class="col-sm-3">

        </div>
        <div style="height:450px" class="col-sm-6 pt-4 mt-4 border border-danger box">
        <h2>RESISTRATION FORM</h2>
        <form action="" method="POST">
        First Name: <br>
        <input type="text" name="fname" id=""> <br><br>
         Last Name: <br>
        <input type="text" name="lname" id=""> <br><br>
         User Name: <br>
        <input type="text" name="user" id=""> <br><br>
         Email: <br>
        <input type="text" name="email" id=""> <br> <br>
        <input type="submit" value="Submit" name = "submit" class="btn btn-success">
    </form>
            
        </div>
        <div class="col-sm-3">
            
        </div>
    </div>
</div>
   
</body>
</html>


