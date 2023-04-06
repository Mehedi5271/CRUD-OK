


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

    if(isset($_GET['id'])){
        $getid = $_GET['id'];

        $sql = "SELECT * FROM user WHERE id = $getid";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        $id = $row['id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $user_name = $row['user_name'];
        $email = $row['email'];
    }

    if(isset($_POST['submit'])){
        $newid = $_POST['id'];
        $newfirst_name = $_POST['fname'];
        $newlast_name = $_POST['lname'];
        $newuser_name = $_POST['user'];
        $newemail = $_POST['email'];

        $sql1 = "UPDATE user SET first_name='$newfirst_name',last_name='$newlast_name',user_name='$newuser_name',email='$newemail' WHERE id = '$newid' ";

        $update = mysqli_query($conn,$sql1);
        header('location:user.php');
    }

?>

<div class="container">
    <div class="row">
        
        <div class="col-sm-3">

        </div>
        <div style="height:450px" class="col-sm-6 pt-4 mt-4 border border-success box">
        <h2>RESISTRATION FORM</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

        <input type="text" name="id" id="" value = "<?php echo $id ?>" hidden>
        First Name: <br>
        <input type="text" name="fname" id="" value = "<?php echo $first_name ?>"> <br><br>
         Last Name: <br>
        <input type="text" name="lname" id="" value = "<?php echo $last_name ?>"> <br><br>
         User Name: <br>
        <input type="text" name="user" id="" value = "<?php echo $user_name ?>"> <br><br>
         Email: <br>
        <input type="text" name="email" id="" value = "<?php echo $email ?>"> <br> <br>
        <input type="submit" value="UPDATE" name = "submit" class="btn btn-danger">
    </form>
            
        </div>
        <div class="col-sm-3">
            
        </div>
    </div>
</div>
   
</body>
</html>


