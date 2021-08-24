<?php
include 'conn.php';
if(isset($_GET['id']))
    $id=$_GET['id'];

    $sql="DELETE FROM data WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    
    if($result){
        // echo "<script>alert('Data deleted Successfull')</script>";
        header('location:display.php');
    }


?>