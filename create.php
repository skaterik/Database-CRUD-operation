<?php
include 'conn.php';

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    $sql="INSERT INTO user (name,password) VALUES('$name','$password')";
    
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Inserted')</script>";
    }
    else{
        echo "fail";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m auto">
                <form method="POST">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h1 class="text-center text-white">Insert operation</h1>
                        </div>
                        <div class="form-froup">
                            <label for="name">name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-froup">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                        <button  type="submit" class="btn btn-success" name="submit" >Submit</button>
                    </div>
                </form>
                <h5><a href="display.php"><input type="button" class="btn btn-primary" value="Display data"></a></h5>
            </div>

        </div>
    </div>
</body>
</html>