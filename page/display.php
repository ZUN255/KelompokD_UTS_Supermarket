<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Account</title>
    <link rel="stylesheet" href="style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="parallax">
        <div class="page-title">supermarket</div>
    </div>
    <div class="menu" id="menu">
        <ul class="menu-ul">
                <a href="../page/home.php" class="list"><li>Home</li></a>
                <a href="../page/store.php" class="list"><li>Pembelian</li></a>
                <a href="../page/riwayat.php" class="list"><li>Riwayat Pembelian</li></a>
                <a href="../page/profile.php" class="list"><li>Profil</li></a>
                <a href="../process/logout.php" class="list"><li>Logout</li></a>
        </ul>
    </div>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="register.php" class="text-light">Add User</a></button>
    </div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <?php

  $sql="Select * from `user`";
  $result=mysqli_query($conn,$sql);
  if($result){
      while($row=mysqli_fetch_assoc($result)){
        $id_user=$row['id_user'];
        $username=$row['username'];
        $email=$row['email'];
        $password=$row['password'];
        echo
        '<tr>
            <th scope="row">'.$id_user.'</th>
            <td>'.$username.'</td>
            <td>'.$email.'</td>
            <td>'.$password.'</td>
            <td>
                <button class="btn btn-primary"><a href="../page/update.php?updateid='.$id_user.'" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="../process/delete.php?deleteid='.$id_user.'" class="text-light">Delete</a></button>
            </td>
        </tr>';
      }
  }
  ?>

  
</table>
</body>
</html>