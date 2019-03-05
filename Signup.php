<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/Signup.css">
	
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
				<li><a href="MyAccount.php">My Account</a></li>
				<li><a href="AboutUs.php">About Us</a></li>
			</ul>
		</nav>

<div class="usersignup">
	<h3>Signup as a user</h3>
</div><!---usersignup-->

<div class="containerDriver" >
  <div class="formDriver">
    <h2 id="h3" style="font-family:'Aller',bold;">Sign up here</h2>
    <h4 style="font-family: 'aller', bold;">Please fill this form to create an account</h4>

  </div><!--formdriver-->

  <div class="header">
		<h2>Register</h2>
	</div>

	<form method="post" action="register.php">
		<!--display validatin errors here-->
		<?php include('errors.php');  ?>

	  <div class="input-group">
      <input type="text" name="name" placeholder="Enter your name" value="<?php echo $username; ?>"><br></div>

       <div class="input-group">
      <input type="text" name="mobileNum" placeholder="Enter your mobile number" value="<?php echo $mobileNum; ?>"><br></div>

       <div class="input-group">
      <input type="text" name="email" placeholder="Enter your email" value="<?php echo $email; ?>"><br></div>

       <div class="input-group">
      <input type="text" name="password" placeholder="Enter your address" value="<?php echo $password; ?>"><br></div>

       <div class="input-group">
      <input type="text" name="nic" placeholder="Enter your NIC number" value="<?php echo $password; ?>"><br></div>
      
      <input type="password" name="password" placeholder="Enter password" value="<?php echo $username; ?>"><br>
      <input type="password" name="rePassword" placeholder="Re-enter your password" value="<?php echo $username; ?>"><br>
      <input type="checkbox" name="terms" value="terms">I agree with your terms and conditions<br><br><br>

      <div class="register">
        <input type="submit" value="SIGN UP">
      </div><!---register-->

        </form>
</div><!---containerdriver-->















</div><!---wrapper-->
</body>
</html>