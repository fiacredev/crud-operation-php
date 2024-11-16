<?php 

include 'connection.php';

if(isset($_POST['submit'])){

	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$password = $_POST['pswd'];
	$password_encryption = md5($password);

	$sql = "INSERT INTO kavukire(firstname,lastname,password) VALUES('$firstname','$lastname','$password_encryption')";

	$insert = mysqli_query($con,$sql);

	if (!$insert) {
		echo "error occured throught inserting data in database";
	}else{
		echo "data inserted successfuly in the database";
		header("location:dashboard.php");

	}

}

 ?>