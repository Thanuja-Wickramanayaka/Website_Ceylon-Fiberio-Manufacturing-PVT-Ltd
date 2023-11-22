<?php 

include 'config.php';

error_reporting(0);

session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: login.php");
}
 

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Congratulations! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Went Wrong.')</script>";
			}
		} else {
			echo "<script>alert('Warning! This Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Warning! Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet"  href="css/register_form.css">

	<title>Ceylon Fiberio | Shopping Cart Register Form</title>
</head>
<body>
	

 <!--Logo-->
 
 		<div class="logo" >
            <a href="register.php"><img src="images/logo/logo-txt-wh-border.png" alt="image"></a>
            
        </div>

<!--Search Bar-->

		<div class="row">
			<div class="col-md-12">
				<div class="search">
					<input type="text" class="input" placeholder="What are you looking for ?">
					<div class="searchbtn">
						<a href="register.php" class="search_btn"> <i class="fa fa-search"></i></a>
					</div>
				</div>
			</div>
		</div>


<!--Back Button-->

		<section>
			<div class="Back"><br><br><br><br><br><br><br><br>
				Do you want to quit this process?
				<p><i>Click Here &nbsp;	<i class="fa fa-level-down"></i></i><br>
				<a href="buynow - Login.php"> <button class="back-btn"><i class="fa fa-arrow-circle-o-left"> &nbsp; Back</i></button></p></a>
			</div>
		</section>

		
		
<!--Login Form-->
		<div class="container">
				<form action="" method="POST" class="login-email">
					<p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
					<div class="input-group">
						<input type="text" placeholder="User Name" name="username" value="<?php echo $username; ?>" required>
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
					<div>
					<input type="checkbox" class="check-box"><span> I agree to the terms and conditions. <br> &nbsp; &nbsp; <a href="#"><i> (See More..)</i></a>  </span> <br><br>
					</div>
					<div class="input-group">
						<button name="submit" class="btn">Register</button>
					</div>
					<p class="login-register-text">Already have an account? <a href="login.php">Login Here</a>.</p>
				</form>
		</div>



</body>
</html>