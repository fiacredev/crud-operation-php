<?php  

include "include/connect.php";

if (isset($_GET['id'])) {	
	session_start();

	$id = $_GET['id'];
	$fetch = mysqli_query($con, "SELECT * FROM users WHERE u_id='{$id}'");

	if (mysqli_num_rows($fetch)>0) {
		$data = mysqli_fetch_assoc($fetch);

		$_SESSION['id'] = $data['u_id'];
		$_SESSION['email'] = $data['u_email'];
		$_SESSION['name'] = $data['u_name'];

		if ($_SESSION['id']) {
			header("location: index.php?succ");
		}else{
			header("location: signup.php?err=Unknown error occured");
		}
	}else{
		header("location: signup.php?err=User does not exist in the database");
	}
}else{
	header("location: signup.php");	
}


?>