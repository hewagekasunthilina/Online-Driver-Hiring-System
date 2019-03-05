<!DOCTYPE html>
<html>
<head>
	<title>Register</title>

	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" name="registeruser" action="server.php">
		<div class="input-group">
			<label>Username</label>
			<input type="text" placeholder="Enter your username" name="username" required>
		</div>

		<div class="input-group">
			<label>Email</label>
			<input type="text" placeholder="Enter your E-mail" name="email" required>
		</div>

		<div class="input-group">
			<label>Mobile Number</label>
			<input type="text" placeholder="Enter your mobile number" name="mobilenumber" required>
		</div>

		<div class="input-group">
			<label>NIC</label>
			<input type="text" placeholder="Enter your NIC" name="nic" required>
		</div>

		<div class="input-group">
			<label>Address</label>
			<input type="text" placeholder="Enter your address" name="address" required>
		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="Password" placeholder="Enter your Password" name="Password_1" required>
		</div>

		<div class="input-group">
			<label>Conform Password</label>
			<input type="Password" placeholder="Re-type your Password" name="Password_2" required>
		</div>

		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>

		<p>
			Already a member ? <a href="login.php">Sign in</a>
		</p>
	</form>


		

</body>
</html>