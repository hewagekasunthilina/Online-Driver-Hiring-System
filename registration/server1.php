 <?php 

 $username = "";
 $email = "";
 $mobilenumber = "";
 $nic = "";
 $licence = "";
 $address = "";
 
$db = mysqli_connect('localhost', 'root', '' , 'registration');

if($db->connect_error){
	die("Connection Failed:".$con->connect_error);
}


if(isset($_POST['register'])){
	$username = ($_POST['username']);
	$email = ($_POST['email']);
	$mobilenumber = ($_POST['mobilenumber']);
	$nic = ($_POST['nic']);
	$licence = ($_POST['licence']);
	$address = ($_POST['address']);  
	$password_1s = ($_POST['password_1']);
	$password_2s = ($_POST['password_2']);

		$password_1s = md5($password_1s);
		$sql = "INSERT INTO drivers (userName, email, mobileNumber, nic, licNumber, address, password) 
		                   VALUES ('$username', '$email', '$mobilenumber', '$nic', '$licence', '$address', '$password_1s')";

		                   mysqli_query($db,$sql);

	}





 ?>