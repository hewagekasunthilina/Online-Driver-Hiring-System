<!--<?php 


session_start();

if(isset($_SESSION['username'])){
	echo "<h1>Welcome ".$_SESSION['username']."</h1>";

	echo "<a href='Home.php'>Home Page</a><br>";

	echo "<br><a href='logout.php'><input type=button value=logout name=logout><a/>";
}

	else{
		if($_POST['username']==$username && $_POST['password_1']==$password_1){

			$_SESSION['username']=$username;
			echo "<script>location.href=checklogin.php'</script>";
		}

		else{
			echo "<script><alert('username or password incorrect!')</script>";
			echo "<script>location.href='login.php'</script>";
		}
	}

 ?>-->


<?php
ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="registration"; // Database name 
$tbl_name="users"; // Table name

// Connect to server and select databse.
$con=mysqli_connect("$host", "$username", "$password") or die(mysql_error());
echo "Connected to MySQL<br />";

mysqli_select_db($con,"$db_name") or die(mysql_error());
echo "Connected to Database<br />";

// Define $username and $password 
$username=$_POST['username']; 
$password=$_POST['password_1'];


$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result=mysqli_query($con,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1) {
echo "Success! $count";
} else {
echo "Unsuccessful! $count";
}

ob_end_flush();
?>