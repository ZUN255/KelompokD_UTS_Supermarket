<?php 

include 'config.php';

error_reporting(0);

session_start();


if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM user WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO user (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Supermarket</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="style.css" />
        <script src="store.js"></script>
    </head>
    <body>
        <header class="main-header">
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
            
        </header>
        <section class="container content-section">
            <h2 class="section-header">Fruit</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Apple</span>
                    <img class="shop-item-image" src="../Image/apple.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp 10000</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Banana</span>
                    <img class="shop-item-image" src="../Image/banana.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp 10000</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Grape</span>
                    <img class="shop-item-image" src="../Image/grape.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp 10000</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">Meat</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Ribeye</span>
                    <img class="shop-item-image" src="../Image/ribeye.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp 100000</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Wagyu</span>
                    <img class="shop-item-image" src="../Image/wagyu.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp 500000</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">Rp 0</span>
            </div>
            <button class="btn btn-primary btn-purchase" name="submit" type="button">PURCHASE</button>
        </section>
        <footer class="main-footer">
        </footer>
    </body>
</html>