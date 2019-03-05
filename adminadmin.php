<html>
<head>
	<title>Admin Panel</title>

	

	<style>

		a{text-decoration: none}
		.top h2{
			font-size: 30px;
			color: 
		}

		.top{
			background-color: grey;
		}

		#adminlogo{
			width: 90px;
			height: 80px;
		}

		.top button{  
    		border: none;
   			border-radius: 5px;
    		outline: 0;
    		display: inline-block;
    		padding: 15px;
    		color: white;
    		background-color:#4d4dff;
    		color: #000000;
    		text-align: center;
    		cursor: pointer;
    		width: 150px;
    		font-size: 15px;
    		transition: all 0.5s;
    		margin: 5px;
    		margin-left: 140px;

		}

		.top button span{
			cursor: pointer;
			display: inline-block;
			position: relative;
			transition: 0.5s;
        }

        .top button span:after{
			content:  '\00bb';
			position: absolute;
			opacity: 0;
			top: 0;
			right: -20px;
			transition: 0.5s;
		}

		.top button:hover span{
			padding-right: 25px;
		}

		.top button:hover span:after{
			opacity: 1;
			right: 0;
		} 

		.data{
			background-image: url(img/data1.jpg);
			height: 700px;
		}

		th{
			color:red;
			padding-left:190px;
			font-size: 25px;
		}

		td{
			color: orange;
			padding-left: 190px;
			font-size: 20px;
		}
	</style>

	

</head>

<body>

	<div class="top">
	<center><img src="img/login.png" alt="adminLogo" id="adminLogo"><h2>Welcome to Admin Panel</h2></center>

	
		    <button type="submit" value="Add Data"><span><a href="add.php">Add Data</a></span></button>
			<button type="submit" value="Delete Data"><span><a href="delete.php">Delete Data</a></span></button>
			<button type="submit" value="Update Data"><span><a href="update.php">Update Data</a></span></button>
			<button type="submit" value="Log Out"><span><a href="Home.php">Log Out</a></span></button>
	</div>





	<div class="data">

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