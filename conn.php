<?php
$conn = mysqli_connect('localhost','root','','crud');


if(!$conn){
    echo "<script>alert('Databse connection not Successfull')</script>";
}


?>