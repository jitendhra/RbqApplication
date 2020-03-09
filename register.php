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
	<a href="register.php"><img src="img/SP Logo.png" /></a>
	<div class="row">
		<h2 class="text-center" style="color:whitesmoke"><b><br>
				<h2>Design Studio
			</b><br>RBQ Application</h2>
		</h2>
	</div>
	<!-- Register Panel-->
	<div class="form-wrapper" style="height: 32em">
		<form action="#" method="post">
			<h3>Register here</h3>
			<div class="form-item">
				<label for="usrNameRegister">Fullname:</label>
				<input type="user" name="name" required="required" placeholder="FullName" autofocus required autocomplete="name"></input>
			</div>
			<div class="form-item">
				<label for="usrNameRegister">Username:</label>
				<input type="user" class="form-control" id="username" placeholder="UserName" name="username" autocomplete="username">
			</div>
			<div class="form-item">
				<label for="email">Email address:</label>
				<input type="email" class="form-control" id="emailid" placeholder="EmailId" name="emailid" autocomplete="email">
			</div>
			<div class="form-item">
				<label for="pwdRegister">Password:</label>
				<input type="password" class="form-control" placeholder="Password" name="password" id="password">
			</div>
			<div class="button-panel">
				<input type="submit" class="button" title="Register" name="login" value="Register"></input>
			</div>
		</form>

		<?php
		if (isset($_POST['login'])) {
			$fullname = mysqli_real_escape_string($con, $_POST['name']);
			$username = mysqli_real_escape_string($con, $_POST['username']);
			$emailid = mysqli_real_escape_string($con, $_POST['emailid']);
			$password = mysqli_real_escape_string($con, $_POST['password']);

			$query 		= mysqli_query($con, "insert into users (fullname,username,emailid,password) values('$fullname','$username','$emailid','$password')");
			/* $row		= mysqli_fetch_array($query);
				$num_row 	= mysqli_num_rows($query); */

			/* if ($num_row > 0) 
					{			
						$_SESSION['user_id']=$row['user_id'];
						header('location:index.php');
						
					}
				else
					{
						echo 'Invalid Username and Password Combination';
					} */
		}
		?>
		<div class="reminder">
			<p><a href="index.php">Back to Login</a></p>
		</div>

	</div>

</body>

</html>