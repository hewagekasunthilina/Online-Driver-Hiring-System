<?php include('server1.php'); ?>
<!DOCTYPE html> 
<html>
<head>
	<title>Register as a driver</title>

	
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	

	<div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" name="registerdriver" action="server1.php">

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" placeholder = "Enter the username" required>
		</div>

		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" placeholder="Enter your valid Email" required>
		</div>

		<div class="input-group">
			<label>Mobile Number</label>
			<input type="text" name="mobilenumber" placeholder="Enter your mobile number" required>
		</div>

		<div class="input-group">
			<label>NIC</label>
			<input type="text" name="nic" placeholder="Enter your NIC number" required>
		</div>

		<div class="input-group">
			<label>Licence Number</label>
			<input type="text" name="licence" placeholder="Enter your licence number" required>
		</div>

		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" placeholder="Enter your Address" required>
		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="password" placeholder = "Enter the password" name="password_1" required>
		</div>

		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" placeholder = "Re enter the password" name="password_2" required>
		</div>

		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>

		<p> Already a driver ?<a href="login1.php">Sign in</a></p>
	</form>



</body>
</html>