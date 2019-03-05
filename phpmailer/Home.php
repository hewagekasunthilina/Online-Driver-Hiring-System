<?php
   

   $result="";
    if(isset($_POST['bSubmit'])){
    	require 'PHPMailerAutoload.php';
    	$mail = new PHPMailer;
                                   
    $mail->Host = 'smtp.gmail.com'; 
    $mail->Port = 587; 
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';                               
    $mail->UserName = 'mydriver1996.com@example.com';                 
    $mail->Password = 'mydriver123';                           
                               
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('kasunthilina1000@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);


    $mail->isHTML(true);                                 
    $mail->Subject = 'Form Submission: '.$_POST['subject'];
    $mail->Body    = '<h1 align=center>Name : '.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Message: '.$_POST['message'].'</h1>';

    if(!$mail->send()){
    	$result="Something went wrong";
    }

    else{
    	$result = "Thanks ".$_POST['name']." for contacting us.";
    }
   } 
       
?>

<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
					<li><a href="registration/register.php">User Sin Up</a></li>
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

<div class="slideshow-container">

  <div class="mySlides fade">
  
  <img src="img/Slide1.jpg" style="width:100%">
  
</div>

  <div class="mySlides fade">
  
  <img src="img/Slide2.jpg" style="width:100%">
  
</div>

  <div class="mySlides fade">
  
  <img src="img/Slide3.jpg" style="width:100%">
 
</div>

 <div class="mySlides fade">
  
  <img src="img/Slide4.jpg" style="width:100%">
  
</div>

  <div class="mySlides fade">
  
  <img src="img/Slide5.jpg" style="width:100%">
  
</div>

  <div class="mySlides fade">
  
  <img src="img/Slide6.jpg" style="width:100%">
  
</div>

 </div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<div class="intro clearfix">

	<div class="introimage">
	   <img src="img/Driver.png" alt="Driver">
    </div> <!--introimage-->

    <div class="introtext">
    	<h1>You Drink...<br>We Drive....</h1>
    	<p> Save your precious time and energy<br><br>
			&nbsp &nbsp Enjoy your ride with our driver<br><br>
			&nbsp &nbsp &nbsp &nbsp Utilize your time in the road<br><br>
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspwe guaranty your safe
</p>
    	<a href="About Us.php">Read more &raquo;</a><br><br><br>

    	<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span><a href="registration/register.php">Sign Up as a User</a></span></button>
    	<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span><a href="registration/registerdriver.php">Sign Up as a Driver</a></span></button>

    	<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span><a href="adminpanel.php">Admin</a></span></button>


    </div> <!--introtext-->

</div><!-- intro-->

<div class="topic">
	<h3>Meet our Drivers</h3>
</div><!--topic-->

<div class="banner1">
	<table style="font-family: aller">
		<tr>
			<th>
				<img src="img/Withdriver.png" style="border-radius: 40px">
			</th>
			<td align="left">
				<h3>Driver & Vehicle</h3>
					Never waste your time while on the road. Use it for your productivity. For that we provide you the best drivers and a comfortable vehicle for you budget. Come and register with us now. Let’s step on to a better future.<br>

				<a href="Ride.php">Coming Soon &raquo;</a>
			</td>
		</tr>
	</table>
</div><!--banner-->

<div class="banner2">
	<table style="font-family: aller">
		<tr>
			<td align="left">
				<h3>Driver Only</h3>
				Have a vehicle? Tired of driving? Is it time wasting? Need a better solution? Hire a skillful driver from us. Come and register with us now. Let’s step on to a better future.<br>

				<a href="Drivers.php">More info &raquo;</a>
			</td>
			<th>
				<img src="img/Driveronly.png" style="border-radius: 40px">
			</th>
		</tr>
	</table>
</div><!--banner-->


<div class="banner1">
	<table style="font-family: aller">
		<tr>
			<th>
				<img src="img/Taxi.png" style="border-radius: 40px">
			</th>
			<td align="left">
				<h3>Taxi Drivers</h3>
					Never waste your time by looking for a taxi in the road, do your work and stay where ever you are!!! We will send you the best taxi with a good price to you. Come and register with us now. Let’s step on to a better future.<br>

				<a href="Drivers.php">More info &raquo;</a>
			</td>
		</tr>
	</table>
</div><!--banner-->

<div class="banner2">
	<table style="font-family: aller">
		<tr>
			<td align="left">
				<h3>School Bus Drivers</h3>
					Don’t have time to drop your children from their school? But still need a protective ride for them. We will provide a responsible and safe ride for your children. Come and register with us now. Let’s step on to a better future.<br>

				<a href="Drivers.php">More info &raquo;</a>
			</td>
			<th>
				<img src="img/Schoolbus.png" style="border-radius: 40px">
			</th>
		</tr>
	</table>
</div><!--banner-->

<div class="banner1">
	<table style="font-family: aller">
		<tr>
			<th>
				<img src="img/Longvehicle.png" style="border-radius: 40px">
			</th>
			<td align="left">
				<h3>Long Vehicle Drivers</h3>
				Looking for a vehicle to transfer your goods and items. We have the best vehicles and drivers in our company. Come and register with us now. Let’s step on to a better future.<br>

				<a href="Drivers.php">More info &raquo;</a>
			</td>
		</tr>
	</table>
</div><!--banner-->

<div class="banner2">
	<table style="font-family: aller">
		<tr>
			<td align="left">
				<h3>Truck Drivers</h3>
				Looking for a skillful truck driver to get done your work? Don’t waste your time while searching for them. Come to us. Come and register with us now. Let’s step on to a better future.<br>

				<a href="Drivers.php">More info &raquo;</a>
			</td>
			<th>
				<img src="img/Truck.png" style="border-radius: 40px">
			</th>
		</tr>
	</table>
</div><!--banner-->

<div class="banner1">
	<table style="font-family: aller">
		<tr>
			<th>
				<img src="img/Heavyvehicle.png" style="border-radius: 40px">
			</th>
			<td align="left">
				<h3>Heavy Vehicle Drivers</h3>
				Looking for a heavy vehicle driver. Even if you found, do they demand their self’s more than your budget. You are in the right place. Come and register with us now. Let’s step on to a better future.<br>

				<a href="Drivers.php">More info &raquo;</a>
			</td>
		</tr>
	</table>
</div><!--banner-->

<div class="banner2">
	<table style="font-family: aller">
		<tr>
			<td align="left">
				<h3>Vip Drivers</h3>
				Looking for a trustful, skillful driver to your luxury vehicle. You are in the right place. Come and register with us now. Let’s step on to a better future.<br>

				<a href="Drivers.php">More info &raquo;</a>
			</td>
			<th>
				<img src="img/Vip.png" style="border-radius: 40px">
			</th>
		</tr>
	</table>
</div><!--banner-->

<center>
<div class="homecontent clearfix">
	<div class="home-col">
		<h2>A Little About Us</h2>
		<img src="img/Us.png" alt="about us">
		<p>We are proud to say that, our obligation is to provide you a safety and time saving ride with our drivers. Our service has been recognized in sri lanka for more than 10 years. We have been nominated by sri lankan best service provider in 2018.</p>
		<p> And also, consecutively we won the award for the best upcoming growing company in sri lanka, from 2015 to 2018. Starting from 2000, we are providing best practiced drivers to make sure your journey will be a safe one as well as a relaxed one. From technology wise our services are on time for any place. </p>
		<a href="About Us.php">Read more about us &raquo;</a>
	</div><!--home-col-->

	<div class="home-col">
		<h2>Offers</h2>
		<div class="services">
			<img src="img/Offer1.png" alt="Offers">
			<h3>Special</h3>
			<p>A brief description about the special offer what are we gave</p>
		</div><!--services-->

		<div class="services">
			<img src="img/Offer2.png" alt="Offers">
			<h3>Service</h3>
			<p>A brief description bout our page what are the services we accept</p>
		</div><!--services-->

		<div class="services">
			<img src="img/Offer3.png" alt="Offers">
			<h3>Payment</h3>
			<p>A brief description about the payment method what are we accept</p>
		</div><!--services-->

		<div class="services">
			<img src="img/Offer4.png" alt="Offers">
			<h3>Volenteers</h3>
			<p>A brief description about drivers who can register with us</p>
		</div><!--services-->
		<a href="#">View all our offers &raquo;</a>
	</div><!--home-col-->

	<div class="home-col">
		<h2>How to Use Our System</h2>
		<p>
			1.QUICKER<br>
			2.SPEED<br>
			3.SECURITY<br>
			4.DECIPLENE<br>
			5.SAFETY<br>
		</p>
		<p>Be a member of us. Use Driver Hiring System on Android play store to book our driver today itself, use promocodes for more discounts. For further more details on our website <a href="About Us.php">www.mydriver.com</a></p>
	</div><!--home-col-->

</div><!--homecontent-->
</center>


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

			<h5><?= $result; ?></h5>
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