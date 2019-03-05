
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>

	<form method="post" action="checklogin.php">
		<div class="input-group">
			<label>Username</label>
			<input type="text" placeholder="Enter the username" name="username" required>
		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="password" placeholder="Enter the Password" name="password_1" required>
		</div>

		<div class="input-group">
			<button type="submit" name="submit" class="btn">Login</button>
		</div>

		<p>Not yet a member ?<a href="register.php">Sign up</a></p>
	</form>

</body>
</html>


