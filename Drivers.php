<!DOCTYPE html>
<html>
<head>
	<title>Drivers</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/Drivers.css">

<!------------------------------------jquary----------------------------------------------------------->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>
<!-------------------------------------Jquary end------------------------------------------------------>

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

		<div class="topic">
			<h3>Our Professional & Qualified Drivers</h3>
		</div><!--topic-->

		<div class="all1">
			<table>
				<tr>
					<td>
						<div class="container">
  							<img src="img/Driver1.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Bob Yejnar</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>

					<button class="button" onclick="openForm()"><span>Chat</span></button>

										<div class="chat" id = "myForm">
											<form action="/action_page.php" class="form-container">
												<h1>Chat</h1>

												<label for="msg"><b>Message</b></label>
												<textarea placeholder="Type message.." name="msg" required></textarea>

												<button type="submit" class="btn">Send</button>
												<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
											</form>
										</div><!--chat-popup-->

										<script>
										function openForm() {
										    document.getElementById("myForm").style.display = "block";
										}

										function closeForm() {
										    document.getElementById("myForm").style.display = "none";
										}
										</script>


					</td>

					<td>
						<div class="container">
  							<img src="img/Driver2.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Dave Smith</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>

					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>

					<td>
						<div class="container">
  							<img src="img/Driver3.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Micheal Jhons</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>

					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>

					<td>
						<div class="container">
  							<img src="img/Driver4.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Henry Koobln</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>
					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>

					<td>
						<div class="container">
  							<img src="img/Driver5.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Qualin Winchester </div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>
					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>

					<td>
						<div class="container">
  							<img src="img/Driver6.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Adel Moose</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>
					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>

					<td>
						<div class="container">
  							<img src="img/Driver7.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Husen Thift</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>
					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>

					<td>
						<div class="container">
  							<img src="img/Driver8.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Mersy Ferdin</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>
					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>
				</tr>
				<tr>
					<td>
						<div class="container">
  							<img src="img/Driver9.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Jule George</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>
					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>

					<td>
						<div class="container">
  							<img src="img/Driver10.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Peter Andruse</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>
					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>

					<td>
						<div class="container">
  							<img src="img/Driver11.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Zea Meth</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>
					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>

					<td>
						<div class="container">
  							<img src="img/Driver12.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Seth Brandey</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>
					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>

					<td>
						<div class="container">
  							<img src="img/Driver13.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Qind Cendei</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>
					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>

					<td>
						<div class="container">
  							<img src="img/Driver14.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Thorch Nolin</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>
					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>

					<td>
						<div class="container">
  							<img src="img/Driver15.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Rucei Bondi</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>
					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>

					<td>
						<div class="container">
  							<img src="img/Driver16.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">James Daylin</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>
					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>
				</tr>
			</table>
		</div><!--all1-->
		


		<div class="more">
			<a href="#">More &raquo;</a>
		</div><!--more-->

		<div class="all2">
			<div class="special">
			<h3>Our special VIP Drivers</h3>

			<table>
				<tr>
					<td>
						<div class="container">
  							<img src="img/Driver18.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Foolin James</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>
					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>

					<td>
						<div class="container">
  							<img src="img/Driver19.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Arther Foss</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>
					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>

					<td>
						<div class="container">
  							<img src="img/Driver20.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Mandy Verly</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>
					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>

					<td>
						<div class="container">
  							<img src="img/Driver21.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Jass Nim</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>
					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>

					<td>
						<div class="container">
  							<img src="img/Driver22.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Yesh Dewin</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>
					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>

					<td>
						<div class="container">
  							<img src="img/Driver5.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Mandy Holine</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>
					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>

					<td>
						<div class="container">
  							<img src="img/Driver18.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Robert Xeamae</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>
					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>

					<td>
						<div class="container">
  							<img src="img/Driver5.jpg" alt="Avatar" class="image">
  								<div class="overlay">
   								 	<div class="text">Lohly Ioseen</div>
  								</div>
						</div>

					<button class="button"><a href="payment.php"><span>Book</span></a></button>
					<button class="button" onclick="openForm()"><span>Chat</span></button>
					</td>
				</tr>
			</table>
		</div><!--all2-->

			
        <a href="#">More &raquo;</a>
    </div>
		</div><!--special-->
<div id = "flip"> Good News for You </div>
<div id = "panel">Fill the form and contact with us !!</div>

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