<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: buynow.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: buynow.php");
	} else {
		echo "<script>alert('Warning! Entered Email or Password is Wrong.')</script>";
	}
}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="css/loginForm.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	

	<title>Ceylon Fiberio | Shopping Cart Login Form</title>
</head>
<body>

 <!--Logo-->
 
        <div class="logo" >
            <a href="login.php"><img src="images/logo/logo-txt-wh-border.png" alt="image"></a>
            
        </div>

<!--Search Bar-->

		<div class="row">
			<div class="col-md-12">
				<div class="search">
					<input type="text" class="input" placeholder="What are you looking for ?">
					<div class="searchbtn">
						<a href="login.php" class="search_btn"> <i class="fa fa-search"></i></a>
					</div>
				</div>
			</div>
		</div>


<!--Back Button-->
		<section>
			<div class="Back">
				Do you want to quit this process?
				<p><i>Click Here &nbsp;	<i class="fa fa-level-down"></i></i><br>
				<a href="buynow - Login.php"> <button class="back-btn"><i class="fa fa-arrow-circle-o-left"> &nbsp; Back</i></button></p></a>
			</div>
		</section>


<!--Login Form-->
		<section>

			<div class="container">
				<form action="" method="POST" class="login-email">
					<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
					<div class="input-group">
						<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
					</div>
					<div class="input-group">
						<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
					</div>
					<div>
					<input type="checkbox" class="check-box"><span> Remember Password</span><br><br>
					</div>
					<div class="input-group">
						<button name="submit" class="btn">Login</button>
					</div>
					<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
				</form>
			</div>

		</section>


</body>
</html>