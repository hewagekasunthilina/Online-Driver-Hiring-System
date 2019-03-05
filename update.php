<html>
<head>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<style>
		
	<style>
		body{
 		margin: 0 auto;
 		background: url("../image/data.jpg");
 		background-repeat: no-repeat;
 		background-size: 100% 720px;
		}
 
		.container{
 		width: 500px;
 		height: 550px;
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
 
		
 
		.btn-login{
 		padding: 15px 25px;
 		border: none;
 		background-color: #27ae60;
 		color: #fff;
		}		
</style>


	</style>

	<?php

		error_reporting(0);
		
		include 'connection.php';
		$name = $_POST['user'];
		$name1 = $_POST['user1'];
		$email = $_POST['mail'];
		$email1 = $_POST['mail1'];

		$sql = "UPDATE data SET fname = '$name1', email = '$email1' where id = '$name'";
		
		if ($_POST['submit']) {
			if (mysqli_query($conn, $sql)) {
				echo"<p align = 'center'><font color = red size = '25px'> Data updated successfully </font></p>";
			}
			else {
				echo"<p align = 'center'><font color = red size = '25px'> Something went wrong </font></p>";
			}
		}
	?>

</head>
<body>

	<div class="container">
 		<img src="image/login.png">

		<form action="update.php" method="POST">

			<div class="form-input">
				<h4>Give User ID to update data</h4>
				<input type="text" name="user" placeholder="Enter the ID"/ >
			</div>

			<div class="form-input">
				<h4>Update data which should be changed</h4>
 				<input type="text" name="user1" placeholder ="Enter the New User Name"/> 
 			</div>

 			<div class="form-input">
 				<input type="text" name="mail1" placeholder="Enter the New Email"/> 
 			</div>
		
			<input type="submit" name="submit" value="UPDATE DATA" class="btn-login"/>
		</form>

</body>
</html>