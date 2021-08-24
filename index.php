<?php
include 'conn.php';

// data insertion:

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="INSERT INTO data(name,email,mobile,password) VALUES('$name','$email','$mobile','$password')";
    $result= mysqli_query($conn,$sql);

    if($result){
        echo "<script>alert('Data insertion Successfull')</script>";
        header('location:display.php');
    }
    
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-5 m auto ">
        <h1>Registration form</h1>
        <form method="post">

            <div class="mb-3 my-3">
                <label>Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="mb-3 my-3">
                <label>Email</label>
                <input type="email" class="form-control" name="email">
            </div>

            <div class="mb-3 my-3">
                <label>Mobile</label>
                <input type="tel" class="form-control" name="mobile">
            </div>


            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>