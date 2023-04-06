


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



     

?>

<div class="container">
    <div class="row">
        
        <div class="col-sm-3">

        </div>
        <div class="col-sm-6 pt-4 mt-4 border border-danger box">

        <?php
        
        $conn = mysqli_connect('localhost','root','','practice');

        $query = "SELECT * FROM  user ";
        
       while( $result = mysqli_query($conn,$query) or die("failed")){

     

        $data = mysqli_fetch_assoc($result);

        $id = $data['id'];
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $email = $data['email'];

        echo $id.''.$first_name.''.$last_name.''.$email;

    }

        
        
        ?>

    </form>
            
        </div>
        <div class="col-sm-3">
            
        </div>
    </div>
</div>
   
</body>
</html>


