<?php 

include 'config.php';

error_reporting(0);

session_start();


$id_user=$_GET['updateid'];
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM `user` WHERE email=$email";
		$result = mysqli_query($conn, $sql);
        $row=mysqli_fetch_assoc($result);
		if ($result->num_rows > 0) {
			$sql = "update `user` set $id_user, username='$username', email='$email', password='$password' where id_user=$id_user";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! Update Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Sudah Ada.')</script>";
		}
		
	} else {
		echo "<script>alert('Password dan Confirm Password Tidak Sama.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="Logreg.css">

	<title>Update Form</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">EDIT PROFILE</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn"><a href="../page/profile.php">Update</a></button>
			</div>
			
		</form>
	</div>
</body>
</html>