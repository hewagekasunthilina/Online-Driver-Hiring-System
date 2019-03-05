<?php 

	$pickuplocation = "";
	$dropofflocation = "";
	$pickuptime = "";
	$pickupdate = "";
	$vehicletype = "";

	$db = mysqli_connect('localhost', 'root', '' , 'ride');

	if($db->connect_error){
	die("Connection Failed:".$con->connect_error);
}

	if(isset($_POST['book'])){
	$pickuplocation = ($_POST['pickuplocation']);
	$dropofflocation = ($_POST['dropofflocation']);
	$pickuptime = ($_POST['pickuptime']);
	$pickupdate = ($_POST['pickupdate']);
	$vehicletype = ($_POST['vehicletype']);

	$sql = "INSERT INTO details (pickUpLocation, dropOffLocation, pickUpTime, pickUpDate, vehicleType) 
		                   VALUES ('$pickuplocation', '$dropofflocation', '$pickuptime', '$pickupdate', '$vehicletype')";

		                   mysqli_query($db,$sql);

	
}

 ?>