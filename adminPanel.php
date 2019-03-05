<html>
<head>
	<title>Admin Panel</title>

	<link rel="stylesheet" type="text/css" href="css/adminStyle.css">

	<style>
		h3{
			text-align: center;
			font-family: aller;
			font-size: 35px;
			color: #ffd633;
		}

		th{
			color: #ff8000;
			font-size: 25px;
			padding-left: 25px;
			
		}

		td{
			color: white;
			padding: 25px;
			
		}
	</style>

</head>

<body>
	<div id="header">
		<center><img src="../img/adminLgo.png" alt="adminLogo" id="adminLogo"><h2>Welcome to Admin Panel</h2></center>
		
	</div>

	<div id="sidebar">
		<ul>
			<button type="submit" value="Add Data"><span><a href="add.php">Add Data</a></span></button>
			<button type="submit" value="Delete Data"><span><a href="delete.php">Delete Data</a></span></button>
			<button type="submit" value="Update Data"><span><a href="update.php">Update Data</a></span></button>
			<button type="submit" value="Log Out"><span><a href="Home.php">Log Out</a></span></button>
			
		</ul>
	</div>

	<div id="data">
	<br>

	<?php
		error_reporting(0);
		include 'connection.php';
		$sql = "SELECT * FROM data";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			echo "<h3> Data Available!</h3>";
			echo "<br/><br/>";
			echo "<table class = 'table table-stripped table-bordered'>";
			echo "<tr>";
			echo "<th> ID </th>";
			echo "<th> Name </th>";
			echo "<th> Email </th>";
			echo "<th> Password </th>";
			echo "</tr>";

			while ($row = mysqli_fetch_assoc($result)) {
				echo '<tr><td>' . $row["id"] . '</td><td>' . $row["fname"] .  '</td><td>' . $row["email"] . '</td><td>' . $row["pass"] . '</td></tr>';
			}

			echo "<table>";
		}

		else{
			echo "<h3> No User Data</h3>";
		}

	?>
		
	</div>
</body>
</html>