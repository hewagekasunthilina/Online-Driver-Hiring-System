<!DOCTYPE html>

<head>
  <title>Plan Your Ride</title>


<body>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/main.css">

  <style>

     div.full{
      background-image: url(img/Ride.jpg);
     }

     input[type="text"], select{
        width:300px;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      input[type="date"], select{
        width:300px;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      input[type="time"], select{
        width:300px;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

     input[type="submit"]{
        width: 80%;
        background-color: red ;
        color: white ;
        padding: 14px 20px;
        margin: 8px 0;
        border: none ;
        border-radius: 25px;
        cursor: pointer;
      }

      input[type="reset"]{
        width: 70%;
        background-color: green;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 25px;
        cursor: pointer;
      }

      .book{
        color:Blue;
        font-family: aller;
        font-size: 40px;
        margin-top: 20px;

      }

      label{
        color: #f2f2f2;
      }

      input[type="submit"]:hoover{
        background-color: #45a049
      }

  </style>
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

    <div class="full">

      
        <h1 class="book"><b>Book Your Driver From Here</b></h1>

        <form name="rideform" onsubmit="return validatePlanRideForm()" method="post" action="Ride/configride.php" ><br/><br/><br/>

            <b><label for="pickuplocation">Pick up Location</label></b>
            <input type="text" name="pickuplocation" placeholder="Enter Your Pickup Location" required ><br/><br/><br/><br/>

            <b><label for="dropoffloaction">Drop Off Location</label></b>
            <input type="text" name="dropofflocation" placeholder="Enter Your Dropoff Location" required><br/><br/><br/><br/>

            <b><label for="pickuptime">Pickup Time</label></b>
            <input type="time" name="pickuptime" placeholder="Enter Your Pickup Time" required><br/><br/><br/><br/>

            <b><label for="pickupdate">Pickup Date</label></b>
            <input type="date" name="pickupdate" placeholder="Enter Your Pickup date" required ><br/><br/><br/><br/>

            <b><label for="vehicletype">Your Vehicle Type</label></b>
            <select id="vehicletype" name="vehicletype" required>
            <option value=""></option>
            <option value="Minicab">Mini Cab</option>
            <option value="Car">Car</option>
            <option value="Minivan">Mini Van (7 seater)</option>
            <option value="Van">Van (7+ seater)</option>
            <option value="TaxiDriver">Taxi</option>
            <option value="Bus">Bus</option>
            <option value="Truck">Truck</option>
            <option value="LongVehicle">Long Vehicle</option>
            <option value="HeavyVehicle">Heavy Vehicle</option>\
            <option value="vip">VIP Class</option>
            </select><br/><br/><br/><br/>

            <center>
            <input type="reset" value="Reset All"><br/><br/>
            <input type="submit" name="book" value="Plan Your Trip">
            </center>
            
          </form>

  </div><!--full-->

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

  </div><!--wrapper-->
  </body>

</html>
