<?php
  include 'conn.php';
  
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operation</title>
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Display window</h1>
    <button class="btn btn-primary my-5"><a class="text-light" href="index.php"> Add user</a>
  </button>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <!-- loops for data display and fetching -->
  <?php
    $sql= "SELECT * FROM data ";
    $result= mysqli_query($conn,$sql);
    
    $count=0;
  
    while($res=mysqli_fetch_array($result)){
      $count++;

    
  ?>
  <tbody>

    <tr>
      <th scope="row"><?php echo $count ?>  </th>
      <!-- <td><?php echo $res['id'] ?></td> -->
      <td><?php echo $res['name'] ?></td>
      <td><?php echo $res['email'] ?></td>
      <td><?php echo $res['mobile'] ?></td>
      <td><?php echo $res['password'] ?></td>
      <td>
        
      <button class="btn btn-success"><a href="update.php?id=<?php echo $res['id'] ?>" class="text-light" >Update</a></button>

      <button class="btn btn-danger"><a href="delete.php?id=<?php echo $res['id'] ?>" class="text-light">Delete</a></button>
    
    
    </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
  </div>
  
</body>
</html>