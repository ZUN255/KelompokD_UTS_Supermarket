<?php
    include 'config.php';
      
    $id_user = $_GET['id_user'];
    $query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id_user'") or die(mysqli_error($conn));

    if (mysqli_num_rows($query) == 0) {
        echo '<tr?> <td colspan="7"> Tidak ada datanya </td> </tr>';
    }else{
        $data = mysqli_fetch_assoc($query);
    }

?>

<!DOCTYPE html>

<html>
<head>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    </head>
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

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 >Our Features</h4>
        <hr>
        <div class="d-flex">
            <div class="card" style="width: 18rem;">
                <img class="card-imgtop" src="../image/pngwing.com.png" width="auto" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Show Profile</h5>
                    <a href="display.php" class="btn btn-info btn-sm">Show</a>
                </div>
           </div>
            <div class="card mx-4" style="width: 18rem;">
                <img class="card-imgtop" src="../image/Daco_4392694.png" width="auto" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Edit Profile</h5>
                    <a href="update.php" class="btn btn-primary btn-sm">Edit</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>