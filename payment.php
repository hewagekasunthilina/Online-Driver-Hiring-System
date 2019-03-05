<DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width , initial-scale=1.0">

<title>Checkout</title>


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<head>
<style>

input[type="text"]{
  width:50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid gray;
  border-radius: 4px;
  box-sizing: border-box;
}

button{
  font-weight: bold;
  font-size: 15px;
  width:50%;
  padding: 12px 20px;
  margin: 8px 0;
  background-color: #7EE958;
  border-radius: 25px;
}

input[type="submit"]{
  font-size: 15px;
  font-weight: bold;
  background-color: green;
  width:50%;
  padding: 12px 20px;
  margin: 8px 0;
  border-radius: 25px;
}

.check{
    padding-left: 10%;
    color: Blue;
    font-family: sans-serif;
}

#myDIV {
  width: 100%;
  padding: 50px 0;
  text-align: center;
  background-color: none;
  margin-top: 20px;
  display: none;
}

@charset "UTF-8";

*{ margin: 0; padding: 0; }

.clearfix { overflow: auto }

a { 
  text-decoration: none;
  color: red;
 }

p{
  margin-bottom: 15px;
  margin-top: 10px;
  color: #444;
}

.wrapper{
  margin: 0 auto;
  width: 100%; 

}

.top-bar{
  width:100%;
  background: #0039e6;
}

.top-bar-links{
  float: left;
}

.top-bar-links ul{
  list-style: none;
  margin: 15px;
}

.top-bar-links ul li{
  display: inline-block;
  padding: 0 10px;
  border-right: 2px solid black;
}

.top-bar-links ul li:last-child{
  border: none;
}

.top-bar-links ul li a{
  color: black;
  text-transform: uppercase;
  font-family: aller;
}

.top-bar-links ul li a:hover{
  color: white;
}

.site-search{
  padding: 3px 10px;
  float: right;
  margin:15px;
  background: white;
  border-radius: 10px;
}

.site-search input{
  border: 0;
  float: left;
}

.site-search button{
  background:url(../img/search.png)
  width: 18px;
  height: 18px;
  border: 0;
  float: right;
}

header{
  background:url(../img/background3.jpg)
}
header .logo{
  float: left;
  margin-top: 30px;
  margin-left: 30px;
}

header .logo h1{
  font-variant: small-caps;
  font-size: 48px;
  font-weight: normal;
  letter-spacing: -1px;
  color: gray;
  margin-left: 50px;
}

header .logodesign{
  width: 55px;
  height: 55px;
  margin-top: 25px;
  background-image: url(../img/Logo.png)
}

header .logo p{
  font-size: 18px;
  color: gray;
  margin-left: 50px;
  font-family: aller;
}

header .socialmedia{
  float: right;
  margin-top: 30px;
  margin-right: 20px;
  margin-bottom: 10px;
}

header .socialmedia ul{
  list-style: none;

}

header .socialmedia ul li{
  display: inline-block;
}

header .socialmedia ul li a{
  background: #444;
  color: #b5b1b1;
  margin-left: 5px;
  padding: 6px;
  display: inline-block;
  border-radius: 20px;
}

header .socialmedia ul li a:hover{
  background: orange;
}

nav{
  background-color: black;
  background: linear-gradient(#0d0d0d, #404040 ,#0d0d0d);
  text-align: center;
  margin-top: 20px;
  border-radius: 5px;


}

nav ul{
  list-style: none;
}

nav ul li{
  display: inline-block;
}

nav ul li a{
  color: white;
  text-transform: uppercase;
  margin-left: 100px;
  margin-right: 40px;
  margin-top: 10px;
  margin-bottom: 10px;
  display: inline-block;
}

nav ul li a:hover{
  color: red;
}

/*---------------------------------------------------------heder section end-----------------------------------------------*/
</style>

</head>

<body>

<script>
 function gethidefunction(){
   var x = document.getElementById("myDIV");

   if (x.style.display = "none"){
     x.style.display = "block";
   }
 }
</script>

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

    <h1 class="check">Checkout</h1>

    <br/><br/><br/><br/>

  <center>
      <input type="submit" value="Handout To Driver" onclick=""><br/><br/>
      <button onclick="gethidefunction()">Pay Online</button>
  </center>

  <div id="myDIV">

    <label style="text-align:left"for="cardnumber">Card Number</label>&nbsp&nbsp
    <input type="text" name="cardnumber" placeholder="****/****/****/****">

  <br/><br/><br/>

    <label style="text-align:center" for="expiredate">Valid Thru</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="text" id="date" placeholder="MM / YY"/></br></br></br>

    <label style="text-align:right" for="pin">CVV / CVC </label>&nbsp&nbsp&nbsp&nbsp
    <input type="text" id="pin" placeholder="Enter Code"/>

    <input type="submit" value="Checkout" onclick="">
  </div>
</div>
</body>
</html>
