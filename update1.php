<?php  

include "connection.php";

if (isset($_POST['submit'])) {

	$id = $_POST['id'];
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$password = $_POST['password'];

	$sql = "UPDATE kavukire SET firstname='$firstname',lastname ='$lastname',password='$password' WHERE id = '$id'";

	$update = mysqli_query($con,$sql);
	
	if(!$update){
		echo "error Occured Througth updating Data in data base";
	}else{
		header("location:dashboard.php");
		echo "data  updated successfuly";

	}
}

 ?>