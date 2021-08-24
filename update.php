<?php
include 'conn.php';

// for getting data from url and updating:

$id = $_GET['id'];
$sql = "SELECT * FROM  data WHERE id='$id' ";
$result = mysqli_query($conn, $sql);
$res=mysqli_fetch_array($result);
// $name=$res['name'];
// $email=$res['email'];
// $mobile=$res['mobile'];
// $password=$res['password'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="UPDATE data SET name='$name',email='$email',mobile='$mobile',password='$password' WHERE id='$id'";
    $result= mysqli_query($conn,$sql);

    if($result){
        // echo "<script>alert('Data updation Successfull')</script>";
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
</head>

<body>
    <div class="container mt-5 m auto ">
        <h1>Registration form</h1>
        <form method="post">

            <div class="mb-3 my-3">
                <label>Name</label>
              <!-- value echoing in update table -->
                <input type="text"  class="form-control" name="name" autocomplete="off" value="<?php echo $res['name'] ?>">
            </div>

            <div class="mb-3 my-3">
                <label>Email</label>
                <input type="email"  class="form-control" name="email" autocomplete="off" value="<?php echo $res['email'] ?>">
            </div>

            <div class="mb-3 my-3">
                <label>Mobile</label>
                <input type="tel"   class="form-control" name="mobile" autocomplete="off" value="<?php echo $res['mobile'] ?>" >
            </div>


            <div class="mb-3">
                <label>Password</label>
                <input type="password"  class="form-control" name="password" autocomplete="off" value="<?php echo $res['mobile'] ?>">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>

</html>