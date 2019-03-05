 <?php 

 $username = "";
 $email = "";
 $mobilenumber = "";
 $nic = "";
 $address = "";

// connect to the database

$db = mysqli_connect('localhost', 'root', '' , 'registration');

if($db->connect_error){
	die("Connection Failed:".$con->connect_error);
}

//if the register button is clicked
if(isset($_POST["register"])){
	$username = ($_POST['username']);
	$email = ($_POST['email']);
	$mobilenumber = ($_POST['mobilenumber']);
	$nic = ($_POST['nic']);
	$address=($_POST['address']);
	$password_1s = ($_POST['Password_1']);
	$password_2s = ($_POST['Password_2']);


		$password_1s = md5($password_1s);
		$sql = "INSERT INTO users(username,email,mobilenumber,nic,address,password) VALUES('$username','$email','$mobilenumber','$nic','$address','$password_1s')";

		mysqli_query($db, $sql);
	}





 ?>

 