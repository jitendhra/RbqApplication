<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<html lang="en">

<head>
	<title>RbqApplication</title>
	<link rel="ICON" href="Css/img/ICon (2).ico" />
	<link rel="stylesheet" type="text/css" href="Css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
</head>

<body>
	<!-- /**Header label and Image */ -->
	<a href="index.php"><img src="img/SP Logo.png" /></a>
	<div class="row">
		<h2 class="text-center" style="color:white"><b><br>
				<h2>Design Studio
			</b><br>RBQ Application</h2>
		</h2>
	</div>
	<!-- Login Panel-->
	<div class="form-wrapper" style="height: 25em;"><br>
		<form action="#" method="post">
			<h3>Login here</h3>

			<div class="form-item">
				<input type="user" name="user" required="required" placeholder="Username/emailid" autofocus required></input>
			</div>

			<div class="form-item">
				<input type="password" name="pass" required="required" placeholder="Password" required></input>
			</div>

			<div class="button-panel">
				<input type="submit" class="button" title="Sign In" name="login" value="Login"></input>
			</div>
		</form>
		<?php
		if (isset($_POST['login'])) {
			$emailid = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);

			$query 		= mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and emailid='$emailid'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);

			if ($num_row > 0) {
				$_SESSION['user_id'] = $row['user_id'];
				header('location:dashboard.php');
			} else {
				echo 'Invalid Username and Password Combination';
			}
		}
		?>
		<div class="reminder">
			<p>Not a member? <a href="register.php">Sign up now</a></p><br>
			<p><a href="#">Forgot password?</a></p>
		</div>

	</div>

</body>

</html>