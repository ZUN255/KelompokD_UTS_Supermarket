<?php
    include 'config.php';
?>

<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

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
                    <img class="card-imgtop" src="https://pbs.twimg.com/media/E34McqsVEAE0fst.png" width="auto" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Fresh And Organics</h5>
                        <p class="cardtext">Fresh and organics from the farm.</p>

                    </div>
               </div>
                <div class="card mx-4" style="width: 18rem;">
                    <img class="card-imgtop" src="https://image.freepik.com/free-vector/delivery-staff-ride-motorcycles-shopping-concept_1150-34879.jpg" width="auto" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Free Delivery</h5>
                        <p class="cardtext">We also providing free delivery services.</p>
                        
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img class="card-imgtop" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKA93-emK5tTVXyZw5jfdJ0mN-zz66hWKZWg&usqp=CAU" width="auto" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Easy Payments</h5>
                        <p class="cardtext">Easy to do payment system.</p>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
