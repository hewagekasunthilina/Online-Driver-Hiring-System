<html>
<head>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<style>
		body{
 		margin: 0 auto;
 		background-image: url("img/data.jpg");
 		background-repeat: no-repeat;
 		background-size: 100% 720px;
		}
 
		.container{
 		width: 500px;
 		height: 450px;
 		text-align: center;
 		margin: 0 auto;
 		background-color: rgba(44, 62, 80,0.7);
 		margin-top: 160px;
        }
 
        .container img{
 		width: 150px;
 		height: 150px;
 		margin-top: -60px;
		}

		input[type="text"],input[type="password"]{
 		margin-top: 30px;
 		height: 45px;
 		width: 300px;
 		font-size: 18px;
 		margin-bottom: 20px;
 		background-color: #fff;
 		padding-left: 40px;
		}

		input[type="password"]{
		margin-top: 30px;
 		height: 45px;
 		width: 300px;
 		font-size: 18px;
 		margin-bottom: 20px;
 		background-color: #fff;
 		padding-left: 40px;	
		}
 
		.form-input::before{
 		font-family:;
 		padding-left: 07px;
 		padding-top: 40px;
 		position: absolute;
 		font-size: 35px;
 		color: #2980b9; 
		}
 
		/*.form-input:nth-child(2)::before{
 		content: "\f023";
		}*/
 
		.btn-login{
 		padding: 15px 25px;
 		border: none;
 		background-color: #27ae60;
 		color: #fff;
		}

		h3{
			text-align: center;
			font-family: aller;
			font-size: 30px;
			color: white;
		}
		
</style>

	<?php

		error_reporting(0);
		
		include 'connection.php';
		$name = $_POST['user'];
		$email = $_POST['mail'];
		$password = $_POST['password'];
		$sql = "INSERT into data(fname, email, pass) values ('$name', '$email', '$password')";

		if ($_POST['submit']) {
			if (mysqli_query($conn, $sql)) {
				echo "<h3>Data added successfully</h3>";
			}
			else {
				echo"<h3>Something went wrong</h3>";
			}
		}
	?>

</head>

<body>

	<div class="container">
 		<img src="img/login.png">

	<form action="add.php" method="POST">

 		<div class="form-input">
 		<input type="text" name="user" placeholder ="Enter the User Name" required /> 
 		</div>

 		<div class="form-input">
 		<input type="text" name="mail" placeholder="Enter the Email" required /> 
 		</div>

 		<div class="form-input">
 		<input type="password" name="password" placeholder="Enter the password" required /> 
 		</div>

 		<input type="submit" name="submit" value="SEND INFO" class="btn-login"/>
 	</form>

</body>
</html>


