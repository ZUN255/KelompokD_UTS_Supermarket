<?php
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="store.php" class="text-light">Belanja</a></button>
    </div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga Barang</th>
      <th scope="col">Jumlah Barang</th>
      <th scope="col">Subtotal</th>
    </tr>
  </thead>

  <?php

  $sql="Select * from `item`";
  $result=mysqli_query($conn,$sql);
  if($result){
      while($row=mysqli_fetch_assoc($result)){
        $id_barang=$row['id_barang'];
        $nama_barang=$row['nama_barang'];
        $harga_barang=$row['harga_barang'];
        $jumlah_barang=$row['jumlah_barang'];
        $subtotal=$row['subtotal'];
        echo
        '<tr>
            <th scope="row">'.$id_barang.'</th>
            <td>'.$nama_barang.'</td>
            <td>'.$harga_barang.'</td>
            <td>'.$jumlah_barang.'</td>
            <td>'.$subtotal.'</td>
        </tr>
        <button class="btn btn-danger"><a href="home.php" class="text-light">Back</a></button>';
      }
  }
  ?>

  
</table>
</body>
</html>