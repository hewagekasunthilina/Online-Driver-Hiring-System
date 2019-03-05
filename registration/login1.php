<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>

	<form method="post" action="login1.php">
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="text" name="password_1">
		</div>

		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>

		<p>Not yet a driver ?<a href="registerdriver.php">Sign up</a></p>
	</form>

</body>
</html>