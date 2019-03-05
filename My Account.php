<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="wrapper">
		<div class="top-bar clearfix">
			<div class="top-bar-links">
				<ul>
					<li><a href="registration/register.php">User Sign Up</a></li>
					<li><a href="registration/registerdriver.php">Driver Sign Up</a></li>
				</ul>
			</div><!--topbarlinks-->
				<div class="site-search">
					<form method="get" action="Home.html">
						<input type="search" name="search-box">
						<button type="submit"></button>
					</form>
				</div><!--sitesearch-->
		</div> <!--topbar-->
		<header class = "clearfix">
			<div class= "logo">
				<h1>MyDriver</h1>
				<p>Quickly...Safer...Faster</p>
			</div> <!--logo-->
			<div class="logodesign">
			
			</div><!--logodesign-->
			<div class="socialmedia">
				<ul>
					<li><a href="#"><i class="fab fa-linkedin fa-fw"></i></a></li>
					<li><a href="#"><i class="fab fa-twitter-square fa-fw"></i></a></li>
					<li><a href="#"><i class="fab fa-pinterest fa-fw"></i></a></li>
					<li><a href="#"><i class="fab fa-google-plus-square fa-fw"></i></a></li>
					<li><a href="#"><i class="fas fa-rss-square fa-fw"></i></a></li>
				</ul>
			</div> <!--socialmedia-->
		</header>
		<nav>
			<ul>
				<li><a href="Home.php">Home</a></li>
				<li><a href="Drivers.php">Drivers</a></li>
				<li><a href="Ride.php">Ride</a></li>
				<li><a href="My Account.php">My Account</a></li>
				<li><a href="Contact Us.php">Contact Us</a></li>
			</ul>
		</nav>


		<div id="data">
	<br>

	<?php
		error_reporting(0);
		include 'userconnection.php';
		$sql = "SELECT * FROM users";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			echo "<p align = 'center'><font color = black><font-family = 'aller' Data Available</font></p>";

			while ($row = mysqli_fetch_assoc($result)) {
				echo "<h4> ID: </h4>" . $row["id"]. " <br> " . "Name: " . $row["username"]. " <br> " . "Email: " . $row[email]. " <br> " . "Mobile Number: " . $row["mobilenumber"]. " <br> " . "NIC:" . $row["nic"]. "<br>";
			}
		}
		else{
			echo "<p align = 'center'><font color = white><font-family = 'aller' No User Data</font></p>";
		}

	?>
		
	</div>

	<footer>
	<div class="footercol">
		<h4>Latest news</h4>
		<div class="news">
			<p>
				<a href="#">News 1</a>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
	</div><!--footercol-->

	<div class="footercol">
		<h4>Quick links</h4>
		<ul class="quicklinks">
			<li><a href="Terms.php">T & C</a></li>
			<li><a href="Careers.php">Careers</a></li>
			<li><a href="Privacy.php">Privacy Policy</a></li>
			
		</ul><!--quicklinks-->
	</div><!--footercol-->

	<div class="footercol">
		<h4>Latest blog posts</h4>
		<div class="blogpost">
			<h5>Post Title</h5>
			<div class="postinfo">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur.</p>
			</div><!--postinfo-->
		</div><!--blogpst-->
	</div><!--footercol-->

	<div class="footercol">
		<h4>contact us</h4>
		<form action="Home.php" class="contact" name="contactus" onsubmit="return(validate());">

			<input type="text" name="name" placeholder="Name">
			<input type="email" name="email" placeholder="Email">
			<input type="text" name="subject" placeholder="Subject">
			<textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
			<input type="submit" name="bSubmit" value="Send">

		</form>

		<script type="text/javascript">
			function validate()
			{

			if(document.contactus.name.value=="")
			{
				alert("Please provide your name!");
				document.contactus.name.focus();
				return false;
			}

				if(document.contactus.email.value=="")
			{
				alert("Please provide your Email!");
				document.contactus.email.focus();
				return false;
			}
				if(document.contactus.subject.value=="")
			{
				alert("Please provide a subject!");
				document.contactus.subject.focus();
				return false;
			}
				return(true);
			}
		</script>

	</div><!--footercol-->

</footer>

<div class="copyrights">
	<div class="left">
		Copyrights &copy; Domain Name. All Rights Reserved
	</div>
	<div class="right">
		Website by: MyDriver.com
	</div>
</div><!--copyright-->


	</div> <!--wrapper-->
</body>
</html>