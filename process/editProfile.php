<?php 
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['edit']) && isset($_GET['id'])) {

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../db.php');

       // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $id = $_GET['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


        $query = mysqli_query($con, 
            "UPDATE users SET username = '$username', email = '$email', password = '$password' WHERE id = '$id'") or die(mysqli_error($con));
        
        if ($query) {
            echo 
            '<script>
                alert("Edit Success"); window.location = "../page/showProfile.php" 
            </script>';
        } else {
            echo 
            '<script>
                alert("Edit Failed");
            </script>';
        }
    }

?>